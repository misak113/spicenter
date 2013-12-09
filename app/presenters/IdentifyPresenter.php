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
    /** @var array  */
    protected $allowedXnames = array("xbarg00","xbedj17","xbril00","xcerj105","xcocf00","xdlus00","xdrea00","xdvob13","xdzib00","xelzm00","xfilj16","xfouo00","xhanm50","xhavj56","xherr11","xhosz00","xhrbm00","xhybj00","xillp02","xjasj00","xjusm02","xkalv00","xkasv12","xkloo04","xkram136","xkrba00","xkrej46","xkulb00","xlank10","xmajp04","xmanm11","xmats00","xmunh00","qnaht00","xnapm00","xnemj00","xparj00","xpavt27","xpetj65","xpisl07","xpokd00","xripm00","xruzv00","xrydv00","xsakv00","xsari00","xsasm02","xsedt11","xsimp00","xsubo00","xtimm03","xvalk14","xvodm12","xzdej00","xzikj00","xzabm00"
        ,"xtest00","xtest01","xtest02","xtest03","xtest04","xtest05","buchalc");


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
        if (!preg_match('~^[xq][a-z]{4,4}[0-9]{2,2}$~', $xname) && !in_array($xname, $this->allowedXnames)) {
            $this->flashMessage('xname musí být ve tvaru xprij00', 'error');
            return;
        }
        if (!in_array($xname, $this->allowedXnames)) {
            $this->flashMessage('Zadaný xname není mezi povolenými. Musíte v tomto semestru studovat předmět 4IT421', 'error');
            return;
        }


        $this->identifier->setIdentity($xname);
        $this->redirect('SpiCenter:default');
    }
}