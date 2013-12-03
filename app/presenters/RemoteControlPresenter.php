<?php
/**
 * Created by PhpStorm.
 * User: misak113
 * Date: 3.12.13
 * Time: 15:01
 */

class RemoteControlPresenter extends BasePresenter {
    /** @var string  */
    protected $apiURL = 'http://192.168.10.8:8080';
    /** @var object */
    protected $context;

    protected $methods = array(
        'in_queue' => '/requests/status.xml?command=in_enqueue&input=',
        'playlist' => '/requests/playlist.xml'
    );

    public function inject() {
        $this->context = stream_context_create(array(
            'http' => array(
                'header'  => "Authorization: Basic " . base64_encode(":heslo")
            )
        ));
    }

    public function handleGetPlaylist() {
        $playlistArray = $this->requestVLC('playlist');
        $played = $playlistArray['node']['node'][0]['leaf'];
        $playlist = array();
        $show = false;
        foreach ($played as $leaf) {
            $item = $leaf['@attributes'];
            $show = $show || isset($item['current']);
            if ($show)
                $playlist[] = $item;
        }

        $this->sendJson(array(
            'playlist' => $playlist
        ));
    }

    public function handleControlPlaylist() {
        $streamUrl = $this->getRawParameter('streamUrl');
        $status = $this->requestVLC('in_queue', $streamUrl);
        $this->sendJson(array(
            'status' => $status
        ));
    }


    protected function requestVLC($method, $param = null) {
        $uri = $this->apiURL.$this->methods[$method];
        if ($param !== null)
            $uri.= rawurlencode($param);
        $xml = @file_get_contents($uri, false, $this->context);
        $array = XML2Array::createArray($xml);
        return $array;
    }

    protected function getRawParameter($name, $default = null) {
        $params = \Nette\Utils\Json::decode(@file_get_contents("php://input"), true);
        if (isset($params[$name]))
            return $params[$name];

        return $default;
    }
} 