<?php

class Methodologies {
    /** @var array */
    protected $methodologies = array(
        // RUP
        "rup" => array(
            "name" => "RUP",
            "desc" => "Rational Unified Process: komplexní metodika pro řízení vývoje",
            "parameters" => array(
                "generality" => 0.9, // řízení projektů (1) x vývoj software (10)
                "formality" => 0.4, // formální (1) x volné (10)
                "agility" => 0.7, // agilní (1) x robustní (10)
                "waterfall" => 0.7, // vodopádové (1) x iterativní (10)
                "usability" => 0.9, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 1997, // rok kdy byla hitem resp. vytvoření
                "openness" => 'paid', // open, free, paid
            ),
            "info" => array(
                "Metodika vznikal v roce 1995 spojením přístupu Rational a metodiky Objectory Process. Díky své podrobnosti se původně řadila do kategorie rigorózních metodik. Od roku 2003 je však doplňována o agilní praktiky. RUP je deskriptivní a proto se často používá pro vývoj systémů založených na objektových a komponentových technologiích. Jedná se o komerční metodiku, ale existuje i volně dostupná verze Unified Process (UP). Ta byla posléze zeštíhlena a vznikla OpenUP.",
                "Poslední verzí je RUPv7, který je postaven na konceptu Unified Method Architecture (UMA) http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Kufner-Obecny_koncept_UMA.pdf. ",
                "RUP stanovuje klíčové praktiky a procesy a vede uživatele k vytváření pouze toho, co je opravdu potřeba, minimalizaci papírové dokumentace, poučení se z chyb, prověřování rizik, definovaní cílů a metrik pokroku.",
                "Celkem je definováno 6 praktik:",
                array(
                    "Iterativní a inkrementální vývoj",
                    "Správa požadavků - http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Stas-Sprava_poziadaviek_ako_disciplina_RUP.pdf",
                    "Použití komponentové architektury",
                    "Vizuální modelování",
                    "Kontrola a ověřování kvality",
                    "Řízení změn",
                ),
            ),
            "principleImage" => "rup.png",
            "principleLinks" => array(
                array(
                    "title" => "Tvorba podnikového modelu",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Kocura-Business_modeling_podle_metodiky_RUP.pdf",
                ),
                array(
                    "title" => "Správa požadavků",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Noskova-RUP_-_requirements.pdf",
                ),
                array(
                    "title" => "Analýza a návrh",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Soukup-4IT421_RUP_Analysis_and_Design.pdf",
                ),
                array(
                    "title" => "Implementace",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Bazala-RUP_Implementation_Bazala_Guhl.pdf",
                ),
                array(
                    "title" => "Testování",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Kastner-xkasv10_RUP_test.pdf",
                ),
                array(
                    "title" => "Nasazení",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Koroleva-RUP_disciplina_Deployment_xkorj35.pdf",
                ),
                array(
                    "title" => "Konfigurace a změny",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Majer-4IT421CMMIConfig.pdf",
                ),
                array(
                    "title" => "Řízení projektu",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Hanusova-4IT421-_Seminarni_prace_-_Hanusova_Kuliskova.pdf",
                ),
                array(
                    "title" => "Správa prostředí",
                    "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2013/01/RUP_Environment.pdf",
                ),
            ),
            "principleDesc" => "Proces vývoje SW je popsán v rámci dvou dimenzí – osy na obrázku níže. Horizontální osa představuje dynamický pohled na proces, který je vyjádřen pomocí cyklů, fází, iterací a milníků. Vertikální reprezentuje statické hledisko procesu, popis činností, artefaktů, pracovníků a prachovních toků. Tato osa zahrnuje 9 disciplín, které představují logické seskupení činností.Životní cyklus SW je rozdělen na cykly. Předmětem každého cyklu je nová verze produktu. Jeden vývojový cyklus je rozdělen do čtyř fází uvedených níže.",
            "specifications" => array(
                array(
                    "title" => "Základní informace o RUP",
                    "href" => "http://testovanisoftwaru.cz/manualni-testovani/modely-zivotniho-cyklu-softwaru/rup/",
                ),
                array(
                    "title" => "RUP – best practices for SW development teams",
                    "href" => "http://www.ibm.com/developerworks/rational/library/content/03July/1000/1251/1251_bestpractices_TP026B.pdf",
                ),
                array(
                    "title" => "Metodika a SW testování",
                    "href" => "http://www.swtestovani.cz/index.php?option=com_content&view=article&id=43:metodika-rup-a-testovani&catid=3:zaklady&Itemid=11",
                ),
                array(
                    "title" => "Kdy zvolit metodiku RUP",
                    "href" => "http://www.systemonline.cz/clanky/kvalitni-metodika.htm",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Základní disciplíny",
                    "works" => array(
                        array(
                            "title" => "Business modeling podle metodiky RUP",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Kocura-Business_modeling_podle_metodiky_RUP.pdf",
                            "author" => "Petr Kocura",
                            "year" => "2011",
                            "desc" => "Práce popisuje disciplínu Byznys modelování podle ve verzi 7 pro velké projekty. Detailněji popisuje proces modelování a jednotlivé metodické prvky – role, artefakty a související návody.",
                        ),
                        array(
                            "title" => "RUP disciplína Requirements",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Noskova-RUP_-_requirements.pdf",
                            "author" => "Michaela Nosková",
                            "year" => "2011",
                            "desc" => "Práce popisuje disciplínu Správa požadavků z manažerského pohledu. Práce charakterizuje úkoly, aktivity, artefakty a role, které se v této disciplíně využívají.",
                        ),
                        array(
                            "title" => "RUP disciplína Analysis & Design",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Roman-RUP_disciplina_Analysis__Design.pdf",
                            "author" => "Martin Roman",
                            "year" => "2011",
                            "desc" => "Práce popisuje disciplínu Analýza a návrh, uvádí jednotlivé role pracovníků, popisuje činnosti, které se mají vykonat a uvádí jaké by měly být výsledné produkty této fáze.",
                        ),
                        array(
                            "title" => "RUP – Disciplína implementation",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Bazala-RUP_Implementation_Bazala_Guhl.pdf",
                            "author" => "Jan Bazala",
                            "year" => "2012",
                            "desc" => "Práce popisuje role, činnosti, produkty a návody disciplíny Implementace. Dále porovnává využití této disciplíny velkými a malými projekty.",
                        ),
                        array(
                            "title" => "RUP - disciplína Test",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Kucera-KUCERA-RUP-TEST.pdf",
                            "author" => "Antonín Kučera",
                            "year" => "2011",
                            "desc" => "Práce se detailně zabývá disciplínou Testování, uvádí jednotlivé role pracovníků, detailněji specifikuje úkoly, které mají být řešeny a jednotlivé vstupy a výstupy.",
                        ),
                        array(
                            "title" => "RUP – disciplína Deployment",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Koroleva-RUP_disciplina_Deployment_xkorj35.pdf",
                            "author" => "Julie Koroleva",
                            "year" => "2011",
                            "desc" => "Práce se detailně zabývá disciplínou Nasazení, uvádí jednotlivé role pracovníků, detailněji specifikuje úkoly, které mají být řešeny a jednotlivé vstupy a výstupy.",
                        ),
                        array(
                            "title" => "RUP disciplína Configuration & Change Management",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Majer-4IT421CMMIConfig.pdf",
                            "author" => "Patrik Majer, Filip Mikschik",
                            "year" => "2012",
                            "desc" => "Práce charakterizuje disciplínu Konfigurace a změny, jednotlivé role pracovníků, činnosti, produkty a návody.",
                        ),
                        array(
                            "title" => "RUP disciplína Project management",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Hanusova-4IT421-_Seminarni_prace_-_Hanusova_Kuliskova.pdf",
                            "author" => "Lucie Hanusová, Romana Kulíšková",
                            "year" => "2012",
                            "desc" => "Práce popisuje disciplínu řízení projektu, životní cyklus projektu, činnosti, které by měly být vykonávány a výhody a nevýhody metodiky RUP.",
                        ),
                        array(
                            "title" => "RUP disciplína Environment",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2013/01/RUP_Environment.pdf",
                            "author" => "Richard Günzl",
                            "year" => "2012",
                            "desc" => "Práce charakterizuje disciplínu Enviroment, jednotlivé role pracovníků, činnosti, produkty, návody a rozdíly v disciplíně při aplikaci na malé projekty.",
                        ),
                    ),
                ),
                array(
                    "title" => "Další",
                    "works" => array(
                        array(
                            "title" => "Správa požiadaviek ako disciplína RUP",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Stas-Sprava_poziadaviek_ako_disciplina_RUP.pdf",
                            "author" => "Jakub Staš",
                            "year" => "2011",
                            "desc" => "Práce shrnuje manažerské shrnutí disciplíny správa požadavků. Stručný popis disciplíny, popis významu požadavků, dopady na use case modelování, popis cyklu správy požadavků a popis rolí a artefaktů.",
                        ),
                        array(
                            "title" => "RUP disciplína Deployment",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Sich-4IT421_xsicj03_RUP_deployement.pdf",
                            "author" => "Jan Šich",
                            "year" => "2011",
                            "desc" => "Práce se detailně zabývá disciplínou Nasazení, uvádí jednotlivé role pracovníků a detailněji specifikuje úkoly, které mají být řešeny.",
                        ),
                        array(
                            "title" => "RUP – disciplína Analysis & Design",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Soukup-4IT421_RUP_Analysis_and_Design.pdf",
                            "author" => "Petr Soukup",
                            "year" => "2011",
                            "desc" => "Práce se zaměřuje na detailní popis procesu disciplíny Analýza a Design v metodice Rational Unified Process ver.: 7.5.1 ve variantě metodiky pro menší projekty.",
                        ),
                        array(
                            "title" => "RUP disciplína Test",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Kastner-xkasv10_RUP_test.pdf",
                            "author" => "Vojtěch Kastner",
                            "year" => "2011",
                            "desc" => "Práce je zaměřena na praktické přiblížení disciplíny Testování, kterou teoreticky popisuje práce RUP - disciplína Test (Antonín Kučera), 2011",
                        ),
                        array(
                            "title" => "RUP: Service oriented modeling architecture",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011RUP-Neumann-4IT421_RUP_-_SOMA_v5.pdf",
                            "author" => "Marek Jansa, Martin Neumann",
                            "year" => "2011",
                            "desc" => "Práce podrobně rozebírá metodu RUP – Service-Oriented Modeling and Architecture (SOMA). Metodiku vymezuje, rozebírá jednotlivé fáze SOMA a popisuje činnosti a podčinnosti. V závěru je stručný výčet rolí.",
                        ),
                        array(
                            "title" => "RUP pro malé a velké projekty – Rozdíly",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Pacourek-RUP_Rozdily_Pacourek_Nespor.pdf",
                            "author" => "Jan Nešpor, Kryštof Pacourek",
                            "year" => "2012",
                            "desc" => "Práce srovnává využití metodiky RUP pro malé a velké projekty. Pro názornost práce obsahuje reálné využití metodiky v prostředí malého projektu.",
                        ),
                        array(
                            "title" => "Popis konceptu Unified Method Architecture (UMA) a jeho použití v RUPv.7",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Kufner-Obecny_koncept_UMA.pdf",
                            "author" => "Jiří Kűfner, Ondřej Andr",
                            "year" => "2012",
                            "desc" => "Práce uvádí vznik a popis konceptu UMA. Dále jsou definovány jednotlivé elementy a klíčové vlastnosti. Práce obsahuje několik příkladů a také porovnání RUPv7 s RUPv2003.",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "ide-eclipse",
                    "title" => "IDE Eclipse",
                    "desc" => "Integrované vývojové prostředí",
                ),
                array(
                    "href" => "ide-visual-studio",
                    "title" => "IDE Visual Studio",
                    "desc" => "Integrované vývojové prostředí",
                ),
                array(
                    "href" => "rational-requisite-pro",
                    "title" => "Rational Requisite Pro",
                    "desc" => "Nástroj pro správu požadavků",
                ),
                array(
                    "href" => "jira",
                    "title" => "Jira",
                    "desc" => "Nástroj pro správu požadavků",
                ),
                array(
                    "href" => "magic-draw",
                    "title" => "Magic Draw",
                    "desc" => "Vizuální modelovací nástroj",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "rup-v7",
                    "title" => "RUPv7 postaven na konceptu UMA",
                ),
                array(
                    "href" => "up",
                    "title" => "Unified Process (UP) – nekomerční verze RUP",
                ),
                array(
                    "href" => "open-up",
                    "title" => "OpenUP – zeštíhlená metodika UP",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Lean
        "lean" => array(
            "name" => "Lean",
            "desc" => "",
            "info" => array(
                "Termín Lean software development vznikl v Japonsku a do světa tento pojem pronikl v 80. letech 20. století. Do češtiny tento pojem můžeme volně přeložit jako lehký, či štíhlý softwarový vývoj, což v praxi znamená uplatnění a aplikování lean principů týkajících se vývoje software. Metodika je převážně zaměřena na vývoj softwaru a analýzu rizik. Nemůžeme jí však chápat pouze jako řízení nebo rozvoj metodologie, ale jedná se převážně o principy, které usnadňují konkrétní vývoj a návrh software. Silný důraz je kladen na využívání zdrojů, času a rozpočtového plánu, kde konkrétně Lean software development pracuje s třetinovým časem, třetinovými zdroji a třetinovým rozpočtovým plánem. Výhodou metodiky také je, že se relativně snadno dá kombinovat s ostatními agilními metodikami.",
                "Hlavní myšlenkou je soustředit se na snížení objemu odpadu. Tento přístup vychází z předpokladu, že každý prostředek využívaný při vývoji a v jednotlivých procesech se spojených s vývojem má potenciál být promarněný, proto je potřeba identifikovat oblast úniku zdrojů a zamezit opakovaného úniku zdrojů. Tento způsob vymezení je patrný prakticky ve všech oblastech a činnostech spojených s vývojem např. od získávání informací a požadavků od zákazníků, až po vytvoření produktu. Rozlišují se činnosti s efektem pro organizaci a zákazníka a činnosti, které žádný efekt v procesu nepřináší. Činnosti, které nepřináší žádný efekt a nejsou v souladu s konečným cílem a efektem pro zákazníka se většinou snaží podnik eliminovat a tyto činnosti se považují za odpad. Tímto stylem řízení lze dostat řízení zdrojů projektu vývoje pod kontrolu.",
                "Mezi jednotlivé principy metodiky patří odstranění odpadu, minimalizace zásob, maximalizace toků, zlepšování kvality, vytváření poznatků a učení se v týmu, rozhodovat se co nejpozději, zpětná vazba, doručit nejrychleji, jak je to možné, budovat integritu a optimalizace celku.",
                "Metodika se dále skládá ze 7 praktik, mezi které patří vidění odpadu, mapování a zlepšování procesů pro vývoj, Set-Based development, pull systém, teorie hromadné obsluhy, motivace a metrika měření.",
            ),
            "principleImage" => "lean.png",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "",
                ),
            ),
            "principleDesc" => "",
            "specifications" => array(
                array(
                    "title" => "Tom and Marry Poppendieck - Lean Software Development : An Agile Toolkit",
                    "href" => "http://www.amazon.com/exec/obidos/ASIN/0321150783/poppendieckco-20",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Práce",
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

        // Lean startup
        "lean-startup" => array(
            "name" => "Lean Startup",
            "desc" => "",
            "info" => array(
                "Termín Lean Startup označuje metodiku, která pomáhá dodat úplně nový produkt nebo službu na trh s minimálním rizikem. Kombinuje v sobě principy agilního vývoje, customer development a lean thinking. Jeho zakladatelem je Eric Ries. Na rozdíl od klasických metodik, které jsou vytvořeny pro řešení konkrétního problému s předem specifikovanými problémy, tato metodika je vytvořena pro prostředí starupů, které velmi často vytváří produkt pouze na základě domněnek a neotestovaných hypotéz. Jejím cílem je minimalizovat riziko, v kterém se začínající startup nachází. Je založena na třech pilířích - agilního vývoje, customer development proces a lean thinking a celý proces se dělí na tři základní fáze - Problem/Solution Fit, Product/Market Fit, Scale.  Při prvních dvou fázích by se měl startup soustředit na kontinuální učení se a přizpůsobování se trhu pomocí pivotů. V případě poslední fáze je nutné se soustředit na kontinuální růst, který by měl v případě úspěchu vykreslit proslulou hokejovou hůl na grafu nárostu počtu uživatelů a tržeb."
            ),
            "principleImage" => "lean-startup.jpg",
            "principleLinks" => array(
                array(
                    "title" => "Princip - Lean startup",
                    "href" => "http://theleanstartup.com/principles",
                ),
            ),
            "principleDesc" => "",
            "specifications" => array(
                array(
                    "title" => "The Lean Startup - Eric Ries",
                    "href" => "http://theleanstartup.com/book",
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
                    "href" => "validation-board",
                    "title" => "Validation Board",
                    "desc" => "",
                ),
                array(
                    "href" => "trello",
                    "title" => "Trello",
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

        // DAD
        "dad" => array(
            "name" => "DAD",
            "desc" => "",
            "info" => array(
                "Disciplined Agile Delivery je poměrně nová metodika pro postupy a způsoby dodání určitého IT řešení zákazníkovi. Scott W. Ambler na jejím konceptu začal pracovat v roce 2007. Z velké části vychází z již známých agilních metodik (Scrum, Extrémní programování, Agilní modelování a dalších) a staví tedy na základních principech Manifestu agilního programování z roku 2001. Zároveň však tyto rozšiřuje a upřesňuje a přidává například popis celého životního cyklu dodávky IT řešení. Důvodem vzniku DAD byla především absence metodiky, která by umožnila používat agilní přístup zodpovědně i ve větších organizacích a týmech. Následky v případě neúspěchu by tam totiž byly mnohem závažnější než u týmu malého. Pokud jde o charakteristiku DAD, dala by se popsat jako hybridní agilní metodika, která klade důraz na jedinečnou úlohu lidí v agilním vývojářském týmu, na význam jejich ochoty a schopnosti se učit, na skutečnou hodnotu vyvíjeného řešení a na životní cyklus dodávky řízený cíli. Dalšími charakteristickými vlastnostmi metodiky je její škálovatelnost a zohledňování okolních podmínek v podniku u každé dodávky IT řešení."
            ),
            "principleImage" => "dad.jpg",
            "principleLinks" => array(
                array(
                    "title" => "Disciplined agile delivery: a practitioner's guide to agile software delivery in the enterprise. ISBN 978-013-2810-135.",
                    "href" => "http://public.dhe.ibm.com/common/ssi/ecm/en/raw14261usen/RAW14261USEN.PDF",
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
                    "title" => "Platforma Jazz od IBM",
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

        // Kanban
        "kanban" => array(
            "name" => "Kanban",
            "desc" => "",
            "info" => array(
                "Kanban byl původně vyvinut ve čtyřicátých letech japonskou automobilkou Toyota. Pří jeho vývoji se Toyota zabývala se především myšlenkou toho, aby zákazníci dostali to, co chtějí a ve správný okamžik a množství, které oni vyžadují. Poznatky načerpané studiem retailového prodeje se pak Toyota snažila implementovat na vnitřní procesy vlastní firmy. Podobně jako v supermarketech byly vývěsní štítky, dle kterých se zboží opět naskladňovalo do regálu, používá Kanban karty dle kterých se řídí nejenom tok materiálu ale i práce. Slovo Kanban vzniklo spojením „Kan“, a „ban“, což lze do češtiny přeložit jako vizualizační tabule. Jde tedy především o vizualizaci výroby pomocí takzvaných Kanban karet a tabulí. Je to jednoduchá technologie koordinující pohyb materiálu a práce při využití vizuálních prvků, usnadňující řízení plánování výroby a řízení zásob. ",
                "Vývoj softwaru a výrobní činnost není to samé. Z tohoto vyplývají i rozdíly mezi Kanbanem výrobním a vývojovým. Softwaroví inženýři vytváří pokaždé jiné věci, zatím co při výrobě produkujeme stejné věci pokaždé dokola. Kanban pro IT přebírá jen určité techniky jak organizovat práci v týmech a soustředí se především na vizualizaci průběhu procesu.  Každá jednotlivá funkcionalita výsledného programu musí být nejdříve zanalyzována, navrhnuta. Po těchto krocích následuje samotné naprogramování, testování a implementace do většího celku. V obou dvou případech lze jednotlivé úkony generalizovat a řetězce rozdrobit na jednotlivé činnosti.",
            ),
            "principleImage" => "kanban.png",
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
                    "href" => "http://www.infoq.com/articles/hiranabe-lean-agile-kanban",
                ),
                array(
                    "title" => "",
                    "href" => "http://leanandkanban.files.wordpress.com/2009/04/kanban-for-software-engineering-apr-242.pdf",
                ),
                array(
                    "title" => "",
                    "href" => "http://lostechies.com/derickbailey/2009/08/05/how-to-get-started-with-kanban-in-software-development/",
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
                    "href" => "lean-kit-kanban",
                    "title" => "LeankitKanban",
                    "desc" => "",
                ),
                array(
                    "href" => "kanbanize",
                    "title" => "Kanbanize",
                    "desc" => "",
                ),
                array(
                    "href" => "kanbanery",
                    "title" => "Kanbanery",
                    "desc" => "",
                ),
                array(
                    "href" => "trello",
                    "title" => "Trello",
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

        // XP
        "xp" => array(
            "name" => "XP",
            "desc" => "eXtrémní Programování",
            "info" => array(
                "Extrémní programování je metodika, kterou zavedl Kent Back. Jejím základem je jednoduchý, realistický způsob myšlení, používání poměrně standardních principů a postupů, jako psaní kódu, testování, apod.  Principem a XP a důvodem, proč se jmenuje extrémní, jsou myšlenky dotažené do extrémů. Díky tomu je možné dosáhnout vyšší kvality a pružněji reagovat na změny klientových požadavků během vývoje. Manažeři, zákazníci i vývojáři tvoří jeden tým.  Každý vyvíjený projekt Extrémního programování lze rozdělit na 5 oblastí, které mají svá neměnná pravidla. Jsou to Plánování, Řízení, Design, Programování a Testování.  Extrémní programování také na hodnotách, které je třeba během procesu vývoje dodržovat. Tyto hodnoty jsou jednoduchost, komunikace, zpětná vazba.",
                "Vše začíná plánováním. Během plánování se na základě požadavků vytvoří Users stories. Jednotlivé User strories se následně ohodnotí z hlediska náročnosti. Na základě toho zákazník vybírá, které Stories budou implementovány v další iteraci. Ty jsou následně podrobněji rozebrány v Iteračním plánu po technické stránce do jednotlivých programových úkolů a opět na základě Stories jsou navrženy akceptační testy. Vyskytne-li se nějaký náročný technický problém, využívá se takzvaných Spike Solutions. Jedná se o krátké experimentální kódy, které stojí mimo produkční kód a dávají rychlou odpověď na daný problém. Výsledkem Release planningu je definování projektu pomocí čtyř proměnných: Velikost, Čas, Zdroje a Kvalita. Tyto proměnné nemůže nikdo určit nezávisle, protože každý stakeholder má povědomí o parametrech jiné proměnné, ale zároveň jedna proměnná ovlivňuje druhou.",
            ),
            "principleImage" => "xp.jpg",
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
                    "href" => "http://www.extremeprogramming.org/",
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
                    "href" => "polarion-alm",
                    "title" => "Polarion ALM",
                    "desc" => "",
                ),
                array(
                    "href" => "version-one",
                    "title" => "Version One",
                    "desc" => "",
                ),
                array(
                    "href" => "extreme-planner",
                    "title" => "Extreme Planner",
                    "desc" => "",
                ),
                array(
                    "href" => "sprintometer",
                    "title" => "Sprintometer",
                    "desc" => "",
                ),
                array(
                    "href" => "xplanner",
                    "title" => "XPlanner",
                    "desc" => "",
                ),
                array(
                    "href" => "mingle",
                    "title" => "Mingle",
                    "desc" => "",
                ),
                array(
                    "href" => "spira-plan",
                    "title" => "SpiraPlan",
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

        // Scrum
        "scrum" => array(
            "name" => "Scrum",
            "desc" => "",
            "info" => array(
                "Scrum je moderní metodika projektového řízení. Spíše než konkrétní proces, je Srum procesní rámec, který umožňuje využívání různých technik a vývojových procesů. Scrum je koncipovaný jako jednoduchá a srozumitelná metodika, kterou lze rychle implementovat a jejíž pomocí je možné zvládnout složité adaptivní problémy a zároveň vytvářet produkty vysoké kvality. Přesto je ale dokonalé zvládnutí této metodiky považováno za velmi obtížné. Scrum využívá iterační a inkrementální přístup k optimalizaci řízení a řízení rizik. Teorie Scrumu je postavena na třech piliřích – transparentnosti, kontrole a adaptaci. Tyto pilíře mají zaručit, že během vývoje nebude docházet k nedorozuměním a že výsledný produkt bude plně splňovat požadované vlastnosti a nároky na kvalitu. Scrum také definuje složení týmu a týmové role, činnosti a artefakty, nezbytné pro zajištění optimální řízení projektu."
            ),
            "principleImage" => "scrum.jpg",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "",
                ),
            ),
            "principleDesc" => "",
            "specifications" => array(
                array(
                    "title" => "Scrum Guide™",
                    "href" => "https://www.scrum.org/Portals/0/Documents/Scrum%20Guides/2013/Scrum-Guide-CS.pdf#zoom=100",
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
                    "href" => "polarion-alm",
                    "title" => "Polarion ALM",
                    "desc" => "",
                ),
                array(
                    "href" => "version-one",
                    "title" => "Version One",
                    "desc" => "",
                ),
                array(
                    "href" => "extreme-planner",
                    "title" => "Extreme Planner ",
                    "desc" => "",
                ),
                array(
                    "href" => "trello",
                    "title" => "Trello",
                    "desc" => "",
                ),
                array(
                    "href" => "scrum-do",
                    "title" => "ScrumDo",
                    "desc" => "",
                ),
                array(
                    "href" => "scrumwise",
                    "title" => "Scrumwise",
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


        // Plannig poker
        "planning-poker" => array(
            "name" => "Plannig poker",
            "desc" => "",
            "info" => array(
                "Planning poker, je nástroj, který umožňuje vytvářet velmi přesné odhady náročnosti během vývoje softwaru. Je založený na technice známé jako Wideband Delphi, která byla vytvořena společností RAND ve 40. letech minulého století. Hlavní myšlenka této metody spočívá v aplikaci známého přísloví, že více hlav víc více ví. Metoda kombinuje znalecké posudky, analogii a zábavný přístup, který vede k rychlým, ale velice spolehlivým odhadům. Plannig pokeru se vždy účastní všichni členové týmu, který by ale neměl být větší než deset lidí. V takovém případě pak dochází k jeho rozdělení. Meetingu by se měl účastnit také Product owner, který ale sám odhadovat nebude, Jeho hlavní rolí, je přesný popis produktu a požadavků na jednotlivé funkcionality, aby umožnil členům týmu co nejlepší odhad.  Každý jednotlivý člen týmu odhaduje samostatně. Každý člen týmu dostane na začátku karty, které na sobě mají napsány určité hodnoty, označující náročnost. Následně zvolený moderátor přečte popis produktu, na jehož základě dochází k hodnocení náročnosti. Každý člen týmu si vybere kartu, ale neukazuje jí, dokud si jí nevyberou i všichni ostatní. Pak dojde k odhalení. Pokud se jednotlivé odhady liší, což je pravděpodobné, následuje diskuze. Následuje další kolo odhadu. Tento proces pokračuje, dokud se tým nedohodne na použitelném odhadu."
            ),
            "principleImage" => "planning-poker.png",
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
                    "href" => "http://renaissancesoftware.net/files/articles/PlanningPoker-v1.1.pdf",
                ),
                array(
                    "title" => "",
                    "href" => "http://agile.dzone.com/articles/introduction-planning-poker",
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
                    "href" => "planning-poker-mgs",
                    "title" => "Planning Poker od Mountain Goat Software",
                    "desc" => "",
                ),
                array(
                    "href" => "ice-scrum",
                    "title" => "IceScrum",
                    "desc" => "",
                ),
                array(
                    "href" => "planning-poker-bbv",
                    "title" => "Planning Poker od BBV Software Services AG",
                    "desc" => "",
                ),
                array(
                    "href" => "planning-poker-plus-plus",
                    "title" => "Planning Poker ++",
                    "desc" => "",
                ),
                array(
                    "href" => "planning-poker-kanjih-droid",
                    "title" => "Planning Poker Android od KanjihDroid",
                    "desc" => "",
                ),
                array(
                    "href" => "planning-poker-unboxed-consulting",
                    "title" => "Planning Poker od Unboxed Consulting",
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

        // CMMI
        "cmmi" => array(
            "name" => "CMMI",
            "desc" => "",
            "info" => array(
                "Capability Maturity Model Integration(for Development) je metodika tvořená pod záštitou Software Engineering Institute na univerzitě Carnegie Mellon. Její první verze (1.1) byla vydána roku 2002 a nahradila původní zastaralý koncept Capability Maturity Model (CMM) vyvíjený v letech 1987 - 1997 tamtéž. (Wikipedia contributors, 2011)",
                "Aktuálně je CMMI ve verzi 1.3 a představuje kolekci průmyslových best practice pro tvorbu a implementaci organizačních procesů na takové úrovni, aby byla zajištěna plná podpora celého životního cyklu produktů a služeb organizace. Cílovou skupinu metodiky tak tvoří všechny organizace, které by buďto rády zlepšily své procesy a zefektivnily tvorbu svých produktů a poskytování svých služeb, nebo již na zlepšování procesů pracují a hledají referenční model, se kterým by srovnaly aktuální stav svých procesů. Samotná metodika sestává z celkem 22 procesních oblastí, přičemž 16 z nich tvoří tzv. jádro metodiky, které je sdíleno napříč všemi implementačními modely CMMI.",
                "CMMI-DEV obecně pokrývá tři základní oblasti – lidi, postupy a metody a nástroje – jež jsou spojeny procesy v jeden konzistentní celek. Zaměřením se na popsané postupy a metody umožnuje zvýšit společnosti konkurenceschopnost prostřednictvím maximalizace produktivity lidí a lepším využitím dostupných nástrojů a technologií. (Kasse, 2008 )",
            ),
            "principleImage" => "cmmi.png",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "",
                ),
            ),
            "principleDesc" => "",
            "specifications" => array(
                array(
                    "title" => "dokument CMMI® for Development, Version 1.3",
                    "href" => "http://www.sei.cmu.edu/reports/10tr033.pdf",
                ),
                array(
                    "title" => "Wikipedia - CMMI",
                    "href" => "http://cs.wikipedia.org/wiki/CMMI",
                ),
                array(
                    "title" => "Wikipedia - Capability Maturity Model",
                    "href" => "http://en.wikipedia.org/wiki/Capability_Maturity_Model",
                ),
                array(
                    "title" => "SEI CMU",
                    "href" => "http://www.sei.cmu.edu",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Generic goals and generic practicies (GGGP)",
                    "works" => array(
                        array(
                            "title" => "CMMI for dev 1.3 GG and GP",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/xfeit03-CMMI_for_Dev_v_1_3-GG_and_GP-paper.pdf",
                            "author" => "Tomáš Feige",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "968 KB",
                        ),
                        array(
                            "title" => "Generické cíle a praktiky",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/Polakovic-genericke-cile-a-praktiky-CMMI.pdf",
                            "author" => "Robert Polakovič",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "705 KB",
                        ),
                    ),
                ),
                array(
                    "title" => "Procesní oblasti  CMMI 1.3 dev",
                    "works" => array(
                        array(
                            "title" => "CMMI OPF OPD OT",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Paulech_CMMI_OPF_OPD_OT.pdf",
                            "author" => "Bc. Matej Paulech",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "1,1 MB",
                        ),
                        array(
                            "title" => "CMMI dev OPP OPM",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2013/01/stross_CMMI_DEV_OPP_OPM.pdf",
                            "author" => "Pavel Štross",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "264 KB",
                        ),
                        array(
                            "title" => "CMMI Product integration",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Kovar-CMMI_Productintegration.pdf",
                            "author" => "Martin Kovář",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "383 KB",
                        ),
                        array(
                            "title" => "Project monitoring and control",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/Hendrich-xhenm07_project_monitoring_and_control.pdf",
                            "author" => "Michal Hendrich",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "636 KB",
                        ),
                        array(
                            "title" => "CMMI Project planning",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/Matas-xmatr21_CMMI_project_planning.pdf",
                            "author" => "Radek Matas",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "664 KB",
                        ),
                        array(
                            "title" => "CMMI PPQA",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/Rumplikova-CMMI_PPQA.pdf",
                            "author" => "Blanka Rumplíková",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "231 KB",
                        ),
                        array(
                            "title" => "Zajištění kvality CMMI",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/Verner-zajisteni_kvality_cmmi.pdf",
                            "author" => "Tomáš Verner",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "772 KB",
                        ),
                        array(
                            "title" => "Requirements Development",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2013/01/xsubz02.pdf",
                            "author" => "Zdeněk Šubr",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "1,2 MB",
                        ),
                        array(
                            "title" => "Requirements Management",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Vachalec-CMMIReqMan.pdf",
                            "author" => "Vachalec Vladan",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "572 KB",
                        ),
                        array(
                            "title" => "CMMI Risk Management",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/Karkoskova-CMMI_RSKM_Karkoskova_xkars05.pdf",
                            "author" => "Soňa Karkošková",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "503 KB",
                        ),
                        array(
                            "title" => "CMMI Technical Solution",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Hrdinka-CMMI_Technical_Solution___Hrdinka__Taborsky.pdf",
                            "author" => "Jan Hrdinka, Tomáš Táborský",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "710 KB",
                        ),
                        array(
                            "title" => "CMMI Validation",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/Mlejnek-xmlep03_4it421_cmmi_validation.pdf",
                            "author" => "Bc. Petr Mlejnek",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "1,1 MB",
                        ),
                        array(
                            "title" => "CMMI dev Verification",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Andilova-CMMI_DEV_Verification_xanda07.pdf",
                            "author" => "Bc. Alexandra Andiľová",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "734 KB",
                        ),
                    ),
                ),
                array(
                    "title" => "Zajímavé",
                    "works" => array(
                        array(
                            "title" => "delší přenáška o CMMI",
                            "href" => "http://www.youtube.com/watch?v=8h622dpHB10",
                            "author" => "Trinity",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "",
                        ),
                        array(
                            "title" => "kratší přednáška o CMMI",
                            "href" => "http://www.youtube.com/watch?v=2DLS-HuC6pU",
                            "author" => "",
                            "year" => "2008",
                            "desc" => "",
                            "size" => "",
                        ),
                        array(
                            "title" => "ukázka použití placeného nástroje",
                            "href" => "http://www.youtube.com/watch?v=IbXzqjpc-yg",
                            "author" => "Knowladge Hut",
                            "year" => "2013",
                            "desc" => "",
                            "size" => "",
                        ),
                        array(
                            "title" => "přednáška ukazující použití a měření organizací celosvětově",
                            "href" => "http://cmmiinstitute.com/assets/2010SepCMMI.pdf",
                            "author" => "Software Engineering Institute",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "ms-visual-studio",
                    "title" => "MS Visual Studio",
                    "desc" => "",
                ),
                array(
                    "href" => "centre",
                    "title" => "Centre",
                    "desc" => "",
                ),
                array(
                    "href" => "cmm-assistant",
                    "title" => "CMMI Assistant",
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

        // Ostatní témata
        "other" => array(
            "name" => "Ostatní témata",
            "desc" => "",
            "info" => array(
                "V této časti naleznete uveřejněné semestrální práce předmětu 4IT421 Zlepšování procesů budování IS, které nespadají svým tématem pod žádnou specifickou metodiku. Jedná se tedy o práce, které řeší přesahy jednotlivých metodik nebo se jedná o popis různých SW nástrojů na podporu vývoje a týmové spolupráce. Případně se může jednat o minoritní metodiky, které se snaží rozvinout známější a používanější metodiky. ",
                "Momentálně zde můžete nalézt práce, které se zabývají především monitoringem a správou chyb aplikací a změnových řízení při vývoji SW. Dále se zde uvedené práce zabývají vývojem počítačových her a metodickým rámcem vývoje od společnosti Microsoft.",
            ),
            "principleImage" => "other.png",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "",
                ),
            ),
            "principleDesc" => "",
            "specifications" => array(
                array(
                    "title" => "Microsoft Solutions Framework",
                    "href" => "http://technet.microsoft.com/en-us/library/cc506049.aspx",
                ),
                array(
                    "title" => "Bug tracking",
                    "href" => "http://en.wikipedia.org/wiki/Bug_tracking_system",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Bug tracking",
                    "works" => array(
                        array(
                            "title" => "Porovnání nástrojů na sledování chyb",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011O-Zmatlik-nastrojeNaSledovaniChyb.pdf",
                            "author" => "Rostislav Zmátlík",
                            "year" => "2011",
                            "desc" => "Keywords: bug tracking, sledování chyb, Bug tracker, Mantis bug tracker, Bugzilla",
                        ),
                        array(
                            "title" => "Srovnání issue a bug tracking komerčních nástrojů",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011O-BugTracking.pdf",
                            "author" => "Jakub Houžvička",
                            "year" => "2011",
                            "desc" => "Keywords: issue tracking, bug tracking, Pivotal Tracker, Gemini, JIRA",
                        ),
                    ),
                ),
                array(
                    "title" => "Nezařazené",
                    "works" => array(
                        array(
                            "title" => "Metodiky pro vývoj počítačových her",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/10/2011O-Kotlaba-Metodiky_pro_vyvoj_pocitacovych_her.pdf",
                            "author" => "Josef Kotlaba",
                            "year" => "2011",
                            "desc" => "Keywords: vývoj počítačových her, životní cyklus, sběr požadavků, testování",
                        ),
                        array(
                            "title" => "Implementace metodiky Rational Unified Process v systému Unicorn Universe",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Hanus-4it421_hanus_meszaros.pdf",
                            "author" => "Mészáros Maroš, Oldřich Hanuš",
                            "year" => "2012",
                            "desc" => "Keywords: RUP, Unicorn Universe, metodika, agilní, tradiční, projektový management",
                        ),
                        array(
                            "title" => "Microsoft Solutions Framework ",
                            "href" => "http://filipmartin.cz/4IT421/wp-content/uploads/2012/12/Smahel-smahel_MSF.pdf",
                            "author" => "Martin Šmahel",
                            "year" => "2012",
                            "desc" => "Keywords: Microsoft Solutions Framework, metodický rámec, agilní vývoj, CMMI, týmový model, governance model, řízení projektu",
                        ),
                    ),
                ),
                array(
                    "title" => "Zajímavé",
                    "works" => array(
                        array(
                            "title" => "Bug tracking - Fogbugz",
                            "href" => "http://www.fogcreek.com/Fogbugz/",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Bug tracking",
                            "href" => "http://www.mantisbt.org/",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Bug tracking system",
                            "href" => "http://en.wikipedia.org/wiki/Bug_tracking_system",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "PC Gaming is Big and Getting Bigger: Good Time to Be a Developer",
                            "href" => "http://software.intel.com/en-us/blogs/2013/03/28/pc-gaming-is-big-and-getting-bigger-good-time-to-be-a-developer",
                            "author" => " Wendy Boswell",
                            "year" => "2013",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Microsoft's First-Party PC Game Development Being Expanded",
                            "href" => "http://www.ign.com/articles/2013/11/07/microsofts-first-party-pc-game-development-being-expanded",
                            "author" => "Chris Pereira",
                            "year" => "2013",
                            "desc" => "",
                        ),
                        array(
                            "title" => "GameDev",
                            "href" => "http://www.gamedev.net/page/index.html",
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

    public function getMethodologies() {
        return $this->methodologies;
    }

    public function getMethodology($name) {
        if (!isset($this->methodologies[$name]))
            return null;
        return $this->methodologies[$name];
    }
}