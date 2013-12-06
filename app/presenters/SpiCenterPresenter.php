<?php

/**
 * Homepage presenter.
 */
class SpiCenterPresenter extends BasePresenter
{
    /** @var Methodologies @inject */
    public $methodologies;

    /**
     * @param string $id
     */
    public function renderMethodology($id) {
        $this->template->m = $this->methodologies->getMethodology($id);
        $this->template->name = $id;
    }

    public function renderMethodologies() {
        $this->template->methodologies= $this->methodologies->getMethodologies();
    }
}
