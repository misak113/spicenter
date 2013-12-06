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
        "rup" => array(
            "name" => "RUP",
            "desc" => "Rational Unified Process: komplexní metodika pro řízení vývoje",
            "info" => array(
                ""
            ),
            "principleImage" => "rup.png",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "",
                ),
            ),
            "principleDesc" => "",
            "specifications" => array(
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
            "tools" => array(
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
        return $this->tools[$name];
    }

}