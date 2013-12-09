<?php
/**
 * Created by JetBrains PhpStorm.
 * User: misak113
 * Date: 9.12.13
 * Time: 1:33
 * To change this template use File | Settings | File Templates.
 */

class Identifier {
    /** @var \Nette\Http\SessionSection */
    protected $sessionSection;
    /** @var \Nette\Http\Session */
    protected $session;
    /** @var string */
    protected $dataDir;

    public function __construct($dataDir, \Nette\Http\Session $session) {
        $this->dataDir = $dataDir;
        if (!is_dir($dataDir)) {
            mkdir($dataDir, 0777, true);
        }
        $this->session = $session;
        $this->sessionSection = $session->getSection('identifier');
    }

    public function getIdentity() {
        $xname = isset($this->sessionSection['xname']) ?$this->sessionSection['xname'] :null;
        if (!is_file($this->dataDir.'/'.$xname.'.json')) {
            return null;
        }
        return $xname;
    }

    public function setIdentity($xname) {
        $this->sessionSection['xname'] = $xname;
        $data = array(
            'sess_id' => $this->session->getId(),
            'xname' => $xname,
            'REQUEST' => $_REQUEST,
            'POST' => $_POST,
            'SERVER' => $_SERVER,
            'COOKIE' => $_COOKIE,
            'ENV' => $_ENV,
        );
        @file_put_contents($this->dataDir.'/'.$xname.'.json', \Nette\Utils\Json::encode($data)."\n", FILE_APPEND);
        return $this;
    }
}