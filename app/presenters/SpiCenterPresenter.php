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
        $methodology = $this->methodologies->getMethodology($id);
        if (!$methodology) {
            throw new \Nette\Application\BadRequestException("Metodika ".$id." neexistuje");
        }
        $this->template->m = $methodology;
        $this->template->name = $id;
    }

    public function renderMethodologies() {
        $this->template->methodologies= $this->methodologies->getMethodologies();
    }
}
