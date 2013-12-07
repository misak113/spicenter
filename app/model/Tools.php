<?php
/**
 * Created by JetBrains PhpStorm.
 * User: misak113
 * Date: 6.12.13
 * Time: 1:07
 * To change this template use File | Settings | File Templates.
 */

class Tools {
    /** @var array */
    protected $tools = array(
        // RUP
        "trello" => array(
            "name" => "Trello",
            "desc" => "",
            "parameters" => array(
                "generality" => 5, // řízení projektů (1) x vývoj software (10)
                "formality" => 6, // formální (1) x volné (10)
                "agility" => 4, // agilní (1) x robustní (10)
                "waterfall" => 6, // vodopádové (1) x iterativní (10)
                "usability" => 5, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                ""
            ),
            "images" => array(
                "rup.png"
            ),
            "downloads" => array(
                array(
                    "title" => "",
                    "href" => "",
                ),
            ),
            "works" => array(
                array(
                    "title" => "",
                    "works" => array(
                        array(
                            "title" => "",
                            "href" => "",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                    ),
                ),
            ),
            "methodologies" => array(
                array(
                    "href" => "",
                    "title" => "",
                    "desc" => "",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "",
                    "title" => "",
                ),
            ),
            "projects" => array(
                array(
                    "href" => "",
                    "title" => "",
                ),
            ),
        ),
    );

    /**
     * @return array
     */
    public function getTools() {
        return $this->tools;
    }

    /**
     * @param $name
     * @return array
     */
    public function getTool($name) {
        if (!isset($this->tools[$name]))
            return null;
        return $this->tools[$name];
    }

}