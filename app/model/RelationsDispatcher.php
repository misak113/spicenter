<?php
/**
 * Created by PhpStorm.
 * User: misak113
 * Date: 7.12.13
 * Time: 22:25
 */

class RelationsDispatcher {
    /** @var Methodologies  */
    protected $methodologies;
    /** @var Tools */
    protected $tools;

    public function __construct(Tools $tools, Methodologies $methodologies) {
        $this->tools = $tools;
        $this->methodologies = $methodologies;
    }

    public function relateTools() {
        $tools = $this->tools->getTools();
        foreach ($tools as &$tool) {
            // doplnění info o podobných
            foreach ($tool['similar'] as &$similarTool) {
                $fullTool = $this->tools->getTool($similarTool['href']);
                if ($fullTool) {
                    $similarTool['title'] = $fullTool['name'];
                    $similarTool['desc'] = $fullTool['desc'];
                } else {
                    $similarTool['missing'] = true;
                }
            }
            // doplnění info o metodikách
            foreach ($tool['methodologies'] as &$methodology) {
                $fullMethodology = $this->methodologies->getMethodology($methodology['href']);
                if ($fullMethodology) {
                    $methodology['title'] = $fullMethodology['name'];
                    $methodology['desc'] = $fullMethodology['desc'];
                } else {
                    $methodology['missing'] = true;
                }
            }
        }
        $this->tools->setTools($tools);
    }

    public function relateMethodologies() {
        $methodologies = $this->methodologies->getMethodologies();
        foreach ($methodologies as &$methodology) {
            // doplnění info o podobných
            foreach ($methodology['similar'] as &$similarMethodology) {
                $fullMethodology = $this->methodologies->getMethodology($similarMethodology['href']);
                if ($fullMethodology) {
                    $similarMethodology['title'] = $fullMethodology['name'];
                    $similarMethodology['desc'] = $fullMethodology['desc'];
                } else {
                    $similarMethodology['missing'] = true;
                }
            }
            // doplnění info o metodikách
            foreach ($methodology['tools'] as &$tool) {
                $fullTool = $this->tools->getTool($tool['href']);
                if ($fullTool) {
                    $tool['title'] = $fullTool['name'];
                    $tool['desc'] = $fullTool['desc'];
                } else {
                    $tool['missing'] = true;
                }
            }
        }
        $this->methodologies->setMethodologies($methodologies);
    }
} 