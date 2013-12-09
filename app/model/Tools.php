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
        // Trello
        "trello" => array(
            "name" => "Trello",
            "desc" => "Nástroj pro správu úkolů formou štítků",
            "parameters" => array(
                "generality" => 7, // řízení projektů (1) x vývoj software (10)
                "formality" => 7, // formální (1) x volné (10)
                "agility" => 2, // agilní (1) x robustní (10)
                "waterfall" => 8, // vodopádové (1) x iterativní (10)
                "usability" => 2, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                ""
            ),
            "images" => array(
                "trello.png",
            ),
            "downloads" => array(
                array(
                    "title" => "Trello online",
                    "href" => "http://trello.com/",
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
                    "desc" => "",
                ),
            ),
            "projects" => array(
                array(
                    "href" => "",
                    "title" => "",
                ),
            ),
        ),

        // Eclipse
        "eclipse" => array(
            "name" => "Eclipse",
            "desc" => "Integrované vývojové prostředí",
            "parameters" => array(
                "generality" => 10, // řízení projektů (1) x vývoj software (10)
                "formality" => 3, // formální (1) x volné (10)
                "agility" => 6, // agilní (1) x robustní (10)
                "waterfall" => 6, // vodopádové (1) x iterativní (10)
                "usability" => 1, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'open', // open, free, paid
            ),
            "info" => array(
                "Eclipse je open source vývojová platforma, která je se řadí mezi integrovaná vývojová prostředí (IDE). Nejčastěji se zde pracuje s programovacím jazykem Java, ovšem Eclipse umožňuje i vícejazykovvou podporu programovacích jazyků a to pomocí pluginů (můžeme rozšířit o C++, PHP, UML, HTML..). Základní verze obsahuje pouze prostředky pro vývoj Javy, jako je kompilátor, debugger.., ale neobsahuje nástroj pro vizuální návrh grafických uživatelských rozhraní desktopových aplikací nebo aplikační server. Tato rozšíření se musí provést právě pomocí pluginů. Z tohoto důvodu vzniklo mnoho subprojektů, které zastřešují rozšíření pro jednotlivé oblasti softwarového vývoje v Javě. Eclipse je v současnosti nejpoulárnější IDE pro Javu.",
            ),
            "images" => array(
                "eclipse-1.png",
                "eclipse-2.jpg",
                "http://www.youtube.com/watch?v=23tAK5zdQ9c",
            ),
            "downloads" => array(
                array(
                    "title" => "Eclipse 4.2.1 – zdarma",
                    "href" => "http://www.slunecnice.cz/sw/eclipse/",
                ),
                array(
                    "title" => "Eclipse 4.3.1 – zdarma",
                    "href" => "http://www.eclipse.org/downloads/packages/eclipse-standard-431/keplersr1",
                ),
                array(
                    "title" => "Oficiální stránky s pluginy – zdarma",
                    "href" => "http://www.eclipse.org/downloads/",
                ),
            ),
            "works" => array(
            ),
            "methodologies" => array(
                array(
                    "href" => "rup",
                    "title" => "RUP",
                    "desc" => "",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "visual-studio",
                    "title" => "Visual Studio",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Visual Studio
        "visual-studio" => array(
            "name" => "Visual Studio",
            "desc" => "Integrované vývojové prostředí",
            "parameters" => array(
                "generality" => 10, // řízení projektů (1) x vývoj software (10)
                "formality" => 3, // formální (1) x volné (10)
                "agility" => 7, // agilní (1) x robustní (10)
                "waterfall" => 4, // vodopádové (1) x iterativní (10)
                "usability" => 4, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'paid', // open, free, paid
            ),
            "info" => array(
                "Jedná se o další nástroj spadající do skupiny IDE (integrované vývojové prostředí). Microsoft Visual Studio je balík nástrojů a služeb určený k vývoji softwarových aplikací pro desktopové i dotykové prostředí Windows, pro web/HTML 5, SharePoint, mobilní zařízení i cloud prostředí. Umožňuje vývoj všech typů aplikací pro prakticky všechny druhy koncových HW zařízení. V rámci MSDN služeb obsahuje nástroje podpora řízení sw. projektů, testování a spolupráce v týmu. Existuje mnoho edic, Express pro začátečníky, Test pro testery až po Ultimate pro vývojáře a team leadery. Studenti mají Visual Studio Professional zdarma.",
            ),
            "images" => array(
                "visual-studio-1.png",
                "visual-studio-2.png",
                "http://www.youtube.com/watch?v=i3oT7qn28xA",
            ),
            "downloads" => array(
                array(
                    "title" => "Microsoft Visual Studio a Studio Expres - 90 denní zkušební verze všech edice",
                    "href" => "http://www.visualstudio.com/downloads/download-visual-studio-vs",
                ),
                array(
                    "title" => "Visual Studio Profesional 2013 zdarma pro studenty",
                    "href" => "https://www.dreamspark.com/Product/Product.aspx?productid=72&cmpid=W_VS_DSV_DS_728x90_CZE",
                ),
            ),
            "works" => array(
            ),
            "methodologies" => array(
                array(
                    "href" => "rup",
                    "title" => "RUP",
                    "desc" => "",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "eclipse",
                    "title" => "Eclipse",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Rational RequisitePro
        "rational-requisite-pro" => array(
            "name" => "Rational RequisitePro",
            "desc" => "Nástroj pro správu požadavků",
            "parameters" => array(
                "generality" => 3, // řízení projektů (1) x vývoj software (10)
                "formality" => 6, // formální (1) x volné (10)
                "agility" => 3, // agilní (1) x robustní (10)
                "waterfall" => 7, // vodopádové (1) x iterativní (10)
                "usability" => 6, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'paid', // open, free, paid
            ),
            "info" => array(
                "Jedná se o nástroj pro projektové týmy navržený pro správu požadavků a příkladů použití. Týmy mohou jeho prostřednictvím vytvářet a sdílet požadavky za použití důvěrně známých metod založených na dokumentech při současném využití databázových funkcí, tj. například sledovatelnosti požadavků a analýzy dopadů. Pomáhá vyhnutí se duplicitám a zbytečným opravám, omezuje složitost díky podrobným pohledům sledovatelnosti nebo umožňuje zachytávat a analyzovat informace o požadavcích s možností podrobného přizpůsobení a filtrování atributů a mnoho dalších.",
            ),
            "images" => array(
                "rational-requisite-pro-1.jpg",
                "rational-requisite-pro-2.jpg",
                "http://www.youtube.com/watch?v=QgZbEBTFmNM",
            ),
            "downloads" => array(
                array(
                    "title" => "15 denní zkušební verze Rational RequisitePro verze 7.1.2",
                    "href" => "http://www.ibm.com/developerworks/downloads/r/rrp/?S_CMP=RRP&S_CMP=rnav&S_CMP=rnav",
                ),
                array(
                    "title" => "Rational RequisitePro placený program",
                    "href" => "http://www.ibm.com/developerworks/downloads/r/rrp/buy.html",
                ),
            ),
            "works" => array(
            ),
            "methodologies" => array(
                array(
                    "href" => "rup",
                    "title" => "RUP",
                    "desc" => "",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "jira",
                    "title" => "Jira",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Jira
        "jira" => array(
            "name" => "Jira",
            "desc" => "Nástroj pro řízení projektů a požadavků",
            "parameters" => array(
                "generality" => 2, // řízení projektů (1) x vývoj software (10)
                "formality" => 6, // formální (1) x volné (10)
                "agility" => 3, // agilní (1) x robustní (10)
                "waterfall" => 8, // vodopádové (1) x iterativní (10)
                "usability" => 5, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'paid', // open, free, paid
            ),
            "info" => array(
                "Atlassian JIRA 6.1 je designována pro podporu vývojářských týmů během všech fází dodávky a provozu SW řešení. Software JIRA podporuje a usnadňuje proces řízení projektů a požadavků - nabízí flexibilní a uživatelské nástroje pro řízení a sledování pracovníků při výkonu plnění úkolů. JIRA se orientuje na podporu dosažení očekávaného výkonu na projektu.",
                "Jira eviduje a sluduje chyby, úkoly, projekty, lidi a zdroje. Poskytuje reporty pro detailní analýzy i pro management. Díky existenci stovek rozšiřujících modulů, silným nástrojům pro integraci a podpoře workflow se může stát jedním z hlavních informačních systémů podniku.",
            ),
            "images" => array(
                "jira-1.png",
                "jira-2.jpg",
                "http://www.youtube.com/watch?v=ca8n9uW3afg"
            ),
            "downloads" => array(
                array(
                    "title" => "Jira 6.1 – placené balíčky",
                    "href" => "http://www.myjira.cz/obchod-cenik.html",
                ),
                array(
                    "title" => "Jira 6.1 trial verze zdarma",
                    "href" => "https://www.atlassian.com/software/jira/download",
                ),
            ),
            "works" => array(
            ),
            "methodologies" => array(
                array(
                    "href" => "rup",
                    "title" => "RUP",
                    "desc" => "",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "rational-requisite-pro",
                    "title" => "Rational RequisitePro",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // MagicDraw
        "magic-draw" => array(
            "name" => "MagicDraw",
            "desc" => "Vizuálních modelovacích nástroj",
            "parameters" => array(
                "generality" => 6, // řízení projektů (1) x vývoj software (10)
                "formality" => 8, // formální (1) x volné (10)
                "agility" => 6, // agilní (1) x robustní (10)
                "waterfall" => 5, // vodopádové (1) x iterativní (10)
                "usability" => 6, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'paid', // open, free, paid
            ),
            "info" => array(
                "Jedná se o jeden ze známých vizuálních modelovacích nástrojů. MagicDraw je modelovací nástroj, pro podporu modelů business procesů, architektury a softwaru. Disponuje i podporou týmové spolupráce. Zahrnuje UML 2.0, BPMN, generování kódu (Java, C++, C#, .NET, XML a další), datové modelování, automatické generování reportů (v HTML, PDF, RTF), možnost tvorby vlastních diagramů a další možnosti."
            ),
            "images" => array(
                "magic-draw-1.jpg",
                "magic-draw-2.jpg",
                "http://www.youtube.com/watch?v=9tPfgYQLNd0",
            ),
            "downloads" => array(
                array(
                    "title" => "MagicDraw UML 17.0.4 trial – zdarma",
                    "href" => "http://www.softpedia.com/progDownload/MagicDraw-Download-142523.html",
                ),
                array(
                    "title" => "MagicDraw UML – placená verze",
                    "href" => "http://www.nomagic.com/products/magicdraw.html",
                ),
            ),
            "works" => array(
            ),
            "methodologies" => array(
                array(
                    "href" => "rup",
                    "title" => "RUP",
                    "desc" => "",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "power-designer",
                    "title" => "Power Designer",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),
/*
        // Empty
        "" => array(
            "name" => "",
            "desc" => "",
            "parameters" => array(
                "generality" => 8, // řízení projektů (1) x vývoj software (10)
                "formality" => 7, // formální (1) x volné (10)
                "agility" => 2, // agilní (1) x robustní (10)
                "waterfall" => 8, // vodopádové (1) x iterativní (10)
                "usability" => 2, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                ""
            ),
            "images" => array(
                "trello.png",
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
                    "desc" => "",
                ),
            ),
            "projects" => array(
                array(
                    "href" => "",
                    "title" => "",
                ),
            ),
        ),
        // Empty
        "" => array(
            "name" => "",
            "desc" => "",
            "parameters" => array(
                "generality" => 8, // řízení projektů (1) x vývoj software (10)
                "formality" => 7, // formální (1) x volné (10)
                "agility" => 2, // agilní (1) x robustní (10)
                "waterfall" => 8, // vodopádové (1) x iterativní (10)
                "usability" => 2, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                ""
            ),
            "images" => array(
                "trello.png",
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
                    "desc" => "",
                ),
            ),
            "projects" => array(
                array(
                    "href" => "",
                    "title" => "",
                ),
            ),
        ),
        // Empty
        "" => array(
            "name" => "",
            "desc" => "",
            "parameters" => array(
                "generality" => 8, // řízení projektů (1) x vývoj software (10)
                "formality" => 7, // formální (1) x volné (10)
                "agility" => 2, // agilní (1) x robustní (10)
                "waterfall" => 8, // vodopádové (1) x iterativní (10)
                "usability" => 2, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                ""
            ),
            "images" => array(
                "trello.png",
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
                    "desc" => "",
                ),
            ),
            "projects" => array(
                array(
                    "href" => "",
                    "title" => "",
                ),
            ),
        ),
        // Empty
        "" => array(
            "name" => "",
            "desc" => "",
            "parameters" => array(
                "generality" => 8, // řízení projektů (1) x vývoj software (10)
                "formality" => 7, // formální (1) x volné (10)
                "agility" => 2, // agilní (1) x robustní (10)
                "waterfall" => 8, // vodopádové (1) x iterativní (10)
                "usability" => 2, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2000, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                ""
            ),
            "images" => array(
                "trello.png",
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
                    "desc" => "",
                ),
            ),
            "projects" => array(
                array(
                    "href" => "",
                    "title" => "",
                ),
            ),
        ),
*/
    );

    /**
     * @return array
     */
    public function getTools() {
        return $this->tools;
    }

    /**
     * @param $name
     * @return array|null
     */
    public function getTool($name) {
        if (!isset($this->tools[$name]))
            return null;
        return $this->tools[$name];
    }

    /**
     * @param array $tools
     * @return $this
     */
    public function setTools($tools) {
        $this->tools = $tools;
        return $this;
    }

}