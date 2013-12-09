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
    /** @var JavaVseCzParser @inject */
    public $javaVseCzParser;
    /** @var Identifier @inject */
    public $identifier;

    protected function startup() {
        parent::startup();
        if (!$this->identifier->getIdentity()) {
            $this->redirect('Identify:default');
        }

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

    /**
     * @param string $id
     */
    public function renderClass($id = 'default') {
        $classPages = array('default', 'schedule', 'conditions', 'works', 'bibliography');
        if (!in_array($id, $classPages)) {
            throw new \Nette\Application\BadRequestException('Stránka s požadovanými informacemi o předmětu neexistuje');
        }
        $this->setLayout('class');
        $this->setView('class/'.$id);
        $this->template->id = $id;

        // render
        $this->template->weeks = $this->javaVseCzParser->getWeeks();
        $this->template->conditions = $this->javaVseCzParser->getConditions();
        $this->template->worksInfo = $this->javaVseCzParser->getWorksInfo();
        $this->template->bibliography = $this->javaVseCzParser->getBibliography();
    }
}
