<?php
/**
 * Created by PhpStorm.
 * User: misak113
 * Date: 8.12.13
 * Time: 18:02
 */

use Nette\Caching\Cache;

class JavaVseCzParser {
    const MAIN_URI = "http://java.vse.cz/Main/4it421";
    const WORKS_URI = "http://java.vse.cz/4it421/TemataSeminarek/";
    /** @var string */
    protected $pageUri = '';
    /** @var Nette\Caching\Cache */
    protected $cache;

    public function __construct(\Nette\Caching\IStorage $storage) {
        $this->cache = new Cache($storage, 'java.vse.cz');
    }

    public function getWeeks() {
        $this->pageUri = self::MAIN_URI;
        $page = $this->getPagePartXmlArray(
            "<table border='1' cellpadding='5' width='600' >", "</table>"
        );
        $weeks = array();
        $indexes = array();
        foreach ($page['table']['tr'] as $i => $row) {
            if ($i === 0) {
                foreach ($row['td'] as $index => $td) {
                    $indexes[$index] = isset($td['@value']) ?$td['@value'] :$td;
                }
                continue;
            }
            $week = array();
            foreach ($row['td'] as $index => $td) {
                $week[$indexes[$index]] = isset($td['@value']) ?$td['@value'] :$td;
            }
            $weeks[] = $week;
        }
        return $weeks;
    }

    public function getConditions() {
        $this->pageUri = self::MAIN_URI;
        $page = $this->getPagePartXmlArray(
            "<table border='1' cellpadding='5' width='600' >", "</table>", 2
        );
        $weeks = array();
        $indexes = array();
        foreach ($page['table']['tr'] as $i => $row) {
            if ($i === 0) {
                foreach ($row['th'] as $index => $td) {
                    $indexes[$index] = isset($td['@value']) ?$td['@value'] :$td;
                }
                continue;
            }
            $week = array();
            foreach ($row['td'] as $index => $td) {
                $week[$indexes[$index]] = isset($td['@value']) ?$td['@value'] :$td;
            }
            $weeks[] = $week;
        }
        return $weeks;
    }

    public function getBibliography() {
        $this->pageUri = self::MAIN_URI;
        $page = $this->getPagePartXmlArray(
            "<table border='1' cellpadding='5' width='600' >", "</table>", 3
        );
        $weeks = array();
        $indexes = array();
        foreach ($page['table']['tr'] as $i => $row) {
            if ($i === 0) {
                foreach ($row['th'] as $index => $td) {
                    $indexes[$index] = isset($td['@value']) ?$td['@value'] :$td;
                }
                continue;
            }
            $week = array();
            foreach ($row['td'] as $index => $td) {
                $week[$indexes[$index]] = isset($td['@value']) ?$td['@value'] :$td;
            }
            $weeks[] = $week;
        }
        return $weeks;
    }

    public function getWorksInfo() {
        $this->pageUri = self::WORKS_URI;
        $html = $this->getPagePart("<div id='wikitext'>", "<div class='vspace'></div></div>");
        return $html;
    }

    protected function getPagePart($start, $end, $count = 1) {
        $xml = $this->getPage();
        // remove white spaces
        $xml = trim(preg_replace('/\n+/','', $xml));
        $xmlOut = null;
        for ($i=0;$i<$count;$i++) {
            $startI = strpos($xml, $start);
            if ($startI === false)
                return null;
            $xml = substr($xml, $startI);
            $endI = strpos($xml, $end);
            if ($endI === false)
                return null;
            $xmlOut = substr($xml, 0, $endI+strlen($end));
            $xml = str_replace($xmlOut, '', $xml);
            $xmlOut = str_replace(array(
                "<br clear='all' />",
                "<strong>",
                "</strong>",
            ), "", $xmlOut);
        }
        return $xmlOut;
    }

    protected function getPage() {
        if (!($page = $this->cache->load($this->pageUri))) {
            $page = @file_get_contents($this->pageUri);
            $this->cache->save($this->pageUri, $page, array(
                Cache::EXPIRE => '+ 1 day'
            ));
        }
        return $page;
    }

    protected function getPagePartXmlArray($start, $end, $count = 1) {
        $xmlOut = $this->getPagePart($start, $end, $count);
        if (!$xmlOut)
            return null;
        $array = XML2Array::createArray($xmlOut);
        return $array;
    }

} 