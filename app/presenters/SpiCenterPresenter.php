<?php

/**
 * Homepage presenter.
 */
class SpiCenterPresenter extends BasePresenter
{
    /** @var Methodologies @inject */
    public $methodologies;
    /** @var Tools @inject */
    public $tools;

    protected function startup() {
        parent::startup();
        $this->template->registerHelper('count', function ($array, $key) {
            $count = 0;
            foreach ($array as $value) {
                $count+= count($value[$key]);
            }
            return $count;
        });
    }

    public function actionDefault() {
        $this->redirect('SpiCenter:methodologies');
    }

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
        $methodologies = $this->methodologies->getMethodologies();
        $methodologies = Sorting::sortByKey($methodologies, 'name');
        $this->template->methodologies = $methodologies;
    }


    /**
     * @param string $id
     */
    public function renderTool($id) {
        $tool = $this->tools->getTool($id);
        if (!$tool) {
            throw new \Nette\Application\BadRequestException("Nástroj ".$id." neexistuje");
        }
        $this->template->t = $tool;
        $this->template->name = $id;
    }
    public function renderTools() {
        $tools = $this->tools->getTools();
        $tools = Sorting::sortByKey($tools, 'name');
        $this->template->tools = $tools;
    }
}
