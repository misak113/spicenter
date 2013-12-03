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

        $playlistXml = @file_get_contents($this->apiURL.$this->methods['playlist'], false, $this->context);
        $playlistArray = $this->xml2array($playlistXml);
        \Nette\Diagnostics\Debugger::dump($playlistArray);die();

        $this->sendJson(array(
            'playlist' => array(
                array('name' => 'shit')
            )
        ));
    }

    protected function xml2array($xmlContent) {
        $xml = new SimpleXMLElement($xmlContent);
        $arXML = array();
        $arXML['name'] = trim($xml->getName());
        $arXML['value'] = trim((string)$xml);
        $t = array();
        foreach($xml->attributes() as $name => $value){
            $t[$name] = trim($value);
        }
        $arXML['attr'] = $t;
        $t=array();
        foreach($xml->children() as $name => $xmlchild) {
            $t[$name][] = $this->xml2array($xmlchild); //FIX : For multivalued node
        }
        $arXML['children'] = $t;
        return($arXML);
    }
} 