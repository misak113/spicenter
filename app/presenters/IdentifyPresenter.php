<?php
/**
 * Created by JetBrains PhpStorm.
 * User: misak113
 * Date: 9.12.13
 * Time: 1:32
 * To change this template use File | Settings | File Templates.
 */

class IdentifyPresenter extends BasePresenter {
    /** @var Identifier @inject */
    public $identifier;

    protected function startup() {
        parent::startup();
        if ($this->identifier->getIdentity()) {
            $this->redirect('SpiCenter:default');
        }
    }
    public function renderDefault() {

    }

    public function handleSaveXname() {
        $xname = $this->getHttpRequest()->getPost('xname');
        $this->template->xname = $xname;
        if (!preg_match('~^[xq][a-z]{4,4}[0-9]{2,2}$~', $xname)) {
            $this->flashMessage('xname musí být ve tvaru xprij00', 'error');
            return;
        }

        $this->identifier->setIdentity($xname);
        $this->redirect('SpiCenter:default');
    }
}