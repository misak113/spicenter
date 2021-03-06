<?php

class Methodologies {
    /** @var array */
    protected $methodologies = array(
        // RUP
        "rup" => array(
            "name" => "RUP",
            "desc" => "Rational Unified Process: komplexní metodika pro řízení vývoje",
            "parameters" => array(
                "generality" => 9, // řízení projektů (1) x vývoj software (10)
                "formality" => 4, // formální (1) x volné (10)
                "agility" => 7, // agilní (1) x robustní (10)
                "waterfall" => 7, // vodopádové (1) x iterativní (10)
                "usability" => 9, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 1997, // rok kdy byla hitem resp. vytvoření
                "openness" => 'paid', // open, free, paid
            ),
            "info" => array(
                "Metodika vznikal v roce 1995 spojením přístupu Rational a metodiky Objectory Process. Díky své podrobnosti se původně řadila do kategorie rigorózních metodik. Od roku 2003 je však doplňována o agilní praktiky. RUP je deskriptivní a proto se často používá pro vývoj systémů založených na objektových a komponentových technologiích. Jedná se o komerční metodiku, ale existuje i volně dostupná verze Unified Process (UP). Ta byla posléze zeštíhlena a vznikla OpenUP.",
                "Poslední verzí je RUPv7, který je postaven na konceptu Unified Method Architecture (UMA) /resource/works/Kufner-Obecny_koncept_UMA.pdf. ",
                "RUP stanovuje klíčové praktiky a procesy a vede uživatele k vytváření pouze toho, co je opravdu potřeba, minimalizaci papírové dokumentace, poučení se z chyb, prověřování rizik, definovaní cílů a metrik pokroku.",
                "Celkem je definováno 6 praktik:",
                array(
                    "Iterativní a inkrementální vývoj",
                    '<a href="/resource/works/Stas-Sprava_poziadaviek_ako_disciplina_RUP.pdf" target="_blank">Správa požadavků</a>',
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
                    "href" => "/resource/works/Kocura-Business_modeling_podle_metodiky_RUP.pdf",
                    "l" => 5,
                    "t" => 17,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Správa požadavků",
                    "href" => "/resource/works/Noskova-RUP_-_requirements.pdf",
                    "l" => 5,
                    "t" => 25,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Analýza a návrh",
                    "href" => "/resource/works/Soukup-4IT421_RUP_Analysis_and_Design.pdf",
                    "l" => 5,
                    "t" => 33,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Implementace",
                    "href" => "/resource/works/Bazala-RUP_Implementation_Bazala_Guhl.pdf",
                    "l" => 5,
                    "t" => 40,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Testování",
                    "href" => "/resource/works/Kastner-xkasv10_RUP_test.pdf",
                    "l" => 5,
                    "t" => 48,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Nasazení",
                    "href" => "/resource/works/Koroleva-RUP_disciplina_Deployment_xkorj35.pdf",
                    "l" => 5,
                    "t" => 56,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Konfigurace a změny",
                    "href" => "/resource/works/Majer-4IT421CMMIConfig.pdf",
                    "l" => 5,
                    "t" => 64,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Řízení projektu",
                    "href" => "/resource/works/Hanusova-4IT421-Seminarni_prace_Hanusova_Kuliskova.pdf",
                    "l" => 5,
                    "t" => 71,
                    "w" => 27,
                    "h" => 7,
                ),
                array(
                    "title" => "Správa prostředí",
                    "href" => "/resource/works/RUP_Environment.pdf",
                    "l" => 5,
                    "t" => 79,
                    "w" => 27,
                    "h" => 7,
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
                            "href" => "/resource/works/Kocura-Business_modeling_podle_metodiky_RUP.pdf",
                            "author" => "Petr Kocura",
                            "year" => "2011",
                            "desc" => "Práce popisuje disciplínu Byznys modelování podle ve verzi 7 pro velké projekty. Detailněji popisuje proces modelování a jednotlivé metodické prvky – role, artefakty a související návody.",
                        ),
                        array(
                            "title" => "RUP disciplína Requirements",
                            "href" => "/resource/works/Noskova-RUP_-_requirements.pdf",
                            "author" => "Michaela Nosková",
                            "year" => "2011",
                            "desc" => "Práce popisuje disciplínu Správa požadavků z manažerského pohledu. Práce charakterizuje úkoly, aktivity, artefakty a role, které se v této disciplíně využívají.",
                        ),
                        array(
                            "title" => "RUP disciplína Analysis & Design",
                            "href" => "/resource/works/Roman-RUP_disciplina_Analysis_Design.pdf",
                            "author" => "Martin Roman",
                            "year" => "2011",
                            "desc" => "Práce popisuje disciplínu Analýza a návrh, uvádí jednotlivé role pracovníků, popisuje činnosti, které se mají vykonat a uvádí jaké by měly být výsledné produkty této fáze.",
                        ),
                        array(
                            "title" => "RUP – Disciplína implementation",
                            "href" => "/resource/works/Bazala-RUP_Implementation_Bazala_Guhl.pdf",
                            "author" => "Jan Bazala",
                            "year" => "2012",
                            "desc" => "Práce popisuje role, činnosti, produkty a návody disciplíny Implementace. Dále porovnává využití této disciplíny velkými a malými projekty.",
                        ),
                        array(
                            "title" => "RUP - disciplína Test",
                            "href" => "/resource/works/Kucera-KUCERA-RUP-TEST.pdf",
                            "author" => "Antonín Kučera",
                            "year" => "2011",
                            "desc" => "Práce se detailně zabývá disciplínou Testování, uvádí jednotlivé role pracovníků, detailněji specifikuje úkoly, které mají být řešeny a jednotlivé vstupy a výstupy.",
                        ),
                        array(
                            "title" => "RUP – disciplína Deployment",
                            "href" => "/resource/works/Koroleva-RUP_disciplina_Deployment_xkorj35.pdf",
                            "author" => "Julie Koroleva",
                            "year" => "2011",
                            "desc" => "Práce se detailně zabývá disciplínou Nasazení, uvádí jednotlivé role pracovníků, detailněji specifikuje úkoly, které mají být řešeny a jednotlivé vstupy a výstupy.",
                        ),
                        array(
                            "title" => "RUP disciplína Configuration & Change Management",
                            "href" => "/resource/works/Majer-4IT421CMMIConfig.pdf",
                            "author" => "Patrik Majer, Filip Mikschik",
                            "year" => "2012",
                            "desc" => "Práce charakterizuje disciplínu Konfigurace a změny, jednotlivé role pracovníků, činnosti, produkty a návody.",
                        ),
                        array(
                            "title" => "RUP disciplína Project management",
                            "href" => "/resource/works/Hanusova-4IT421-Seminarni_prace_Hanusova_Kuliskova.pdf",
                            "author" => "Lucie Hanusová, Romana Kulíšková",
                            "year" => "2012",
                            "desc" => "Práce popisuje disciplínu řízení projektu, životní cyklus projektu, činnosti, které by měly být vykonávány a výhody a nevýhody metodiky RUP.",
                        ),
                        array(
                            "title" => "RUP disciplína Environment",
                            "href" => "/resource/works/RUP_Environment.pdf",
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
                            "href" => "/resource/works/Stas-Sprava_poziadaviek_ako_disciplina_RUP.pdf",
                            "author" => "Jakub Staš",
                            "year" => "2011",
                            "desc" => "Práce shrnuje manažerské shrnutí disciplíny správa požadavků. Stručný popis disciplíny, popis významu požadavků, dopady na use case modelování, popis cyklu správy požadavků a popis rolí a artefaktů.",
                        ),
                        array(
                            "title" => "RUP disciplína Deployment",
                            "href" => "/resource/works/Sich-4IT421_xsicj03_RUP_deployement.pdf",
                            "author" => "Jan Šich",
                            "year" => "2011",
                            "desc" => "Práce se detailně zabývá disciplínou Nasazení, uvádí jednotlivé role pracovníků a detailněji specifikuje úkoly, které mají být řešeny.",
                        ),
                        array(
                            "title" => "RUP – disciplína Analysis & Design",
                            "href" => "/resource/works/Soukup-4IT421_RUP_Analysis_and_Design.pdf",
                            "author" => "Petr Soukup",
                            "year" => "2011",
                            "desc" => "Práce se zaměřuje na detailní popis procesu disciplíny Analýza a Design v metodice Rational Unified Process ver.: 7.5.1 ve variantě metodiky pro menší projekty.",
                        ),
                        array(
                            "title" => "RUP disciplína Test",
                            "href" => "/resource/works/Kastner-xkasv10_RUP_test.pdf",
                            "author" => "Vojtěch Kastner",
                            "year" => "2011",
                            "desc" => "Práce je zaměřena na praktické přiblížení disciplíny Testování, kterou teoreticky popisuje práce RUP - disciplína Test (Antonín Kučera), 2011",
                        ),
                        array(
                            "title" => "RUP: Service oriented modeling architecture",
                            "href" => "/resource/works/Neumann-4IT421_RUP_-_SOMA_v5.pdf",
                            "author" => "Marek Jansa, Martin Neumann",
                            "year" => "2011",
                            "desc" => "Práce podrobně rozebírá metodu RUP – Service-Oriented Modeling and Architecture (SOMA). Metodiku vymezuje, rozebírá jednotlivé fáze SOMA a popisuje činnosti a podčinnosti. V závěru je stručný výčet rolí.",
                        ),
                        array(
                            "title" => "RUP pro malé a velké projekty – Rozdíly",
                            "href" => "/resource/works/Pacourek-RUP_Rozdily_Pacourek_Nespor.pdf",
                            "author" => "Jan Nešpor, Kryštof Pacourek",
                            "year" => "2012",
                            "desc" => "Práce srovnává využití metodiky RUP pro malé a velké projekty. Pro názornost práce obsahuje reálné využití metodiky v prostředí malého projektu.",
                        ),
                        array(
                            "title" => "Popis konceptu Unified Method Architecture (UMA) a jeho použití v RUPv.7",
                            "href" => "/resource/works/Kufner-Obecny_koncept_UMA.pdf",
                            "author" => "Jiří Kűfner, Ondřej Andr",
                            "year" => "2012",
                            "desc" => "Práce uvádí vznik a popis konceptu UMA. Dále jsou definovány jednotlivé elementy a klíčové vlastnosti. Práce obsahuje několik příkladů a také porovnání RUPv7 s RUPv2003.",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "eclipse",
                    "title" => "IDE Eclipse",
                    "desc" => "Integrované vývojové prostředí",
                ),
                array(
                    "href" => "visual-studio",
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
                    "desc" => "",
                ),
                array(
                    "href" => "up",
                    "title" => "Unified Process (UP) – nekomerční verze RUP",
                    "desc" => "",
                ),
                array(
                    "href" => "open-up",
                    "title" => "OpenUP – zeštíhlená metodika UP",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Lean
        "lean" => array(
            "name" => "Lean",
            "desc" => "Metodika Lean Software Development je štíhlý přístup k vývoji software dle základních principů Lean",
            "parameters" => array(
                "generality" => 4, // řízení projektů (1) x vývoj software (10)
                "formality" => 9, // formální (1) x volné (10)
                "agility" => 1, // agilní (1) x robustní (10)
                "waterfall" => 9, // vodopádové (1) x iterativní (10)
                "usability" => 4, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2010, // rok kdy byla hitem resp. vytvoření
                "openness" => 'open', // open, free, paid
            ),
            "info" => array(
                "Termín Lean software development vznikl v Japonsku a do světa tento pojem pronikl v 80. letech 20. století. Do češtiny tento pojem můžeme volně přeložit jako lehký, či štíhlý softwarový vývoj, což v praxi znamená uplatnění a aplikování lean principů týkajících se vývoje software. Metodika je převážně zaměřena na vývoj softwaru a analýzu rizik. Nemůžeme jí však chápat pouze jako řízení nebo rozvoj metodologie, ale jedná se převážně o principy, které usnadňují konkrétní vývoj a návrh software. Silný důraz je kladen na využívání zdrojů, času a rozpočtového plánu, kde konkrétně Lean software development pracuje s třetinovým časem, třetinovými zdroji a třetinovým rozpočtovým plánem. Výhodou metodiky také je, že se relativně snadno dá kombinovat s ostatními agilními metodikami.",
                "Hlavní myšlenkou je soustředit se na snížení objemu odpadu. Tento přístup vychází z předpokladu, že každý prostředek využívaný při vývoji a v jednotlivých procesech se spojených s vývojem má potenciál být promarněný, proto je potřeba identifikovat oblast úniku zdrojů a zamezit opakovaného úniku zdrojů. Tento způsob vymezení je patrný prakticky ve všech oblastech a činnostech spojených s vývojem např. od získávání informací a požadavků od zákazníků, až po vytvoření produktu. Rozlišují se činnosti s efektem pro organizaci a zákazníka a činnosti, které žádný efekt v procesu nepřináší. Činnosti, které nepřináší žádný efekt a nejsou v souladu s konečným cílem a efektem pro zákazníka se většinou snaží podnik eliminovat a tyto činnosti se považují za odpad. Tímto stylem řízení lze dostat řízení zdrojů projektu vývoje pod kontrolu.",
                "Mezi jednotlivé principy metodiky patří odstranění odpadu, minimalizace zásob, maximalizace toků, zlepšování kvality, vytváření poznatků a učení se v týmu, rozhodovat se co nejpozději, zpětná vazba, doručit nejrychleji, jak je to možné, budovat integritu a optimalizace celku.",
                "Metodika se dále skládá ze 7 praktik, mezi které patří vidění odpadu, mapování a zlepšování procesů pro vývoj, Set-Based development, pull systém, teorie hromadné obsluhy, motivace a metrika měření.",
            ),
            "principleImage" => "lean.png",
            "principleLinks" => array(
                array(
                    "title" => "Lean Software Development",
                    "href" => "/resource/works/Filipcik-Seminarni_prace_Lean_Software_Development.pdf",
                    "l" => 5,
                    "t" => 5,
                    "w" => 90,
                    "h" => 90,
                ),
            ),
            "principleDesc" => "Přehled praktik a principů, které využívá Lean Software Development",
            "specifications" => array(
                array(
                    "title" => "Tom and Marry Poppendieck - Lean Software Development : An Agile Toolkit",
                    "href" => "http://www.amazon.com/exec/obidos/ASIN/0321150783/poppendieckco-20",
                ),
                array(
                    "title" => "Lean Software Development - Homepage metodiky",
                    "href" => "http://www.poppendieck.com/",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Základní",
                    "works" => array(
                        array(
                            "title" => "Lean Software Development",
                            "href" => "/resource/works/Filipcik-Seminarni_prace_Lean_Software_Development.pdf",
                            "author" => "Jan Filipčík",
                            "year" => "2011",
                            "desc" => "Úvod do problematiky Lean SW development",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "vision-flow",
                    "title" => "Vision Flow",
                    "http" => "http://www.visionflow.com",
                    "desc" => "Webový nástroj pro implementaci Lean",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "lean-startup",
                    "title" => "Lean Startup",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Lean startup
        "lean-startup" => array(
            "name" => "Lean Startup",
            "desc" => "Metodika, která pomáhá dodat nový produkt na trh s minimálním rizikem",
            "parameters" => array(
                "generality" => 4, // řízení projektů (1) x vývoj software (10)
                "formality" => 8, // formální (1) x volné (10)
                "agility" => 1, // agilní (1) x robustní (10)
                "waterfall" => 10, // vodopádové (1) x iterativní (10)
                "usability" => 3, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2011, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                "Termín Lean Startup označuje metodiku, která pomáhá dodat úplně nový produkt nebo službu na trh s minimálním rizikem. Kombinuje v sobě principy agilního vývoje, customer development a lean thinking. Jeho zakladatelem je Eric Ries. Na rozdíl od klasických metodik, které jsou vytvořeny pro řešení konkrétního problému s předem specifikovanými problémy, tato metodika je vytvořena pro prostředí starupů, které velmi často vytváří produkt pouze na základě domněnek a neotestovaných hypotéz. Jejím cílem je minimalizovat riziko, v kterém se začínající startup nachází. Je založena na třech pilířích - agilního vývoje, customer development proces a lean thinking a celý proces se dělí na tři základní fáze - Problem/Solution Fit, Product/Market Fit, Scale.  Při prvních dvou fázích by se měl startup soustředit na kontinuální učení se a přizpůsobování se trhu pomocí pivotů. V případě poslední fáze je nutné se soustředit na kontinuální růst, který by měl v případě úspěchu vykreslit proslulou hokejovou hůl na grafu nárostu počtu uživatelů a tržeb."
            ),
            "principleImage" => "lean-startup.jpg",
            "principleLinks" => array(
                array(
                    "title" => "Princip - Lean startup",
                    "href" => "/resource/works/Hejl-LeanStartup-xhejd08-xjerm11.pdf",
                    "l" => 5,
                    "t" => 5,
                    "w" => 90,
                    "h" => 90,
                ),
            ),
            "principleDesc" => "Diagram základního principu procesu Lean Startup",
            "specifications" => array(
                array(
                    "title" => "The Lean Startup - Eric Ries",
                    "href" => "http://theleanstartup.com/book",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Základní",
                    "works" => array(
                        array(
                            "title" => "Lean Startup – Revoluční přístup v agilních metodikách",
                            "href" => "/resource/works/Hejl-LeanStartup-xhejd08-xjerm11.pdf",
                            "author" => "Daniel Hejl",
                            "year" => "2011",
                            "desc" => "Průvodce revoluční metodikou na podporu startupů",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "validation-board",
                    "title" => "Validation Board",
                    "http" => "https://www.leanstartupmachine.com/validationboard/",
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
                    "href" => "lean",
                    "title" => "Lean",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // DAD
        "dad" => array(
            "name" => "DAD",
            "desc" => "metodiky pro postupy a způsoby dodání IT řešení zákazníkovi",
            "parameters" => array(
                "generality" => 6, // řízení projektů (1) x vývoj software (10)
                "formality" => 7, // formální (1) x volné (10)
                "agility" => 3, // agilní (1) x robustní (10)
                "waterfall" => 7, // vodopádové (1) x iterativní (10)
                "usability" => 9, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2008, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                "Disciplined Agile Delivery je poměrně nová metodika pro postupy a způsoby dodání určitého IT řešení zákazníkovi. Scott W. Ambler na jejím konceptu začal pracovat v roce 2007. Z velké části vychází z již známých agilních metodik (Scrum, Extrémní programování, Agilní modelování a dalších) a staví tedy na základních principech Manifestu agilního programování z roku 2001. Zároveň však tyto rozšiřuje a upřesňuje a přidává například popis celého životního cyklu dodávky IT řešení. Důvodem vzniku DAD byla především absence metodiky, která by umožnila používat agilní přístup zodpovědně i ve větších organizacích a týmech. Následky v případě neúspěchu by tam totiž byly mnohem závažnější než u týmu malého. Pokud jde o charakteristiku DAD, dala by se popsat jako hybridní agilní metodika, která klade důraz na jedinečnou úlohu lidí v agilním vývojářském týmu, na význam jejich ochoty a schopnosti se učit, na skutečnou hodnotu vyvíjeného řešení a na životní cyklus dodávky řízený cíli. Dalšími charakteristickými vlastnostmi metodiky je její škálovatelnost a zohledňování okolních podmínek v podniku u každé dodávky IT řešení."
            ),
            "principleImage" => "dad.jpg",
            "principleLinks" => array(
                array(
                    "title" => "Disciplined agile delivery",
                    "href" => "/resource/works/Koudelka-4it421_DAD.pdf",
                    "l" => 5,
                    "t" => 5,
                    "w" => 90,
                    "h" => 90,
                ),
            ),
            "principleDesc" => "Základní životní cyklus vývoje pomocí Disciplined Agile Delivery",
            "specifications" => array(
                array(
                    "title" => "Základní příručka pro Disciplined Agile Delivery",
                    "href" => "http://public.dhe.ibm.com/common/ssi/ecm/en/raw14261usen/RAW14261USEN.PDF",
                ),
                array(
                    "title" => "IBM Software -  Disciplined agile delivery: a practitioner's guide to agile software delivery in the enterprise",
                    "href" => "http://www.amazon.com/Disciplined-Agile-Delivery-Practitioners-Enterprise/dp/0132810131",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Základní",
                    "works" => array(
                        array(
                            "title" => "Disciplined Agile Delivery (DAD) framework",
                            "href" => "/resource/works/dad.pdf",
                            "author" => "Radim Klepetko",
                            "year" => "2011",
                            "desc" => "Základní informace o DAD a podrobný popis jeho principů",
                        ),
                        array(
                            "title" => "Disciplined Agile Delivery (DAD) framework",
                            "href" => "/resource/works/Podpora-DAD-v-RTC.pdf",
                            "author" => "Tomáš Svoboda",
                            "year" => "2011",
                            "desc" => "Spojení metodiky DAD a IBM platformy Jazz",
                        ),
                    ),
                ),
                array(
                    "title" => "Podrobné",
                    "works" => array(
                        array(
                            "title" => "Disciplined Agile Delivery",
                            "href" => "/resource/works/Koudelka-4it421_DAD.pdf",
                            "author" => "Tomáš Koudelka, Ondřej Sklenář",
                            "year" => "2012",
                            "desc" => "Podrobný popis metodiky DAD",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "platforma-jazz",
                    "title" => "Platforma Jazz od IBM",
                    "desc" => "",
                    "http" => "http://www-01.ibm.com/software/rational/jazz/",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "xp",
                    "title" => "XP",
                    "desc" => "",
                ),
                array(
                    "href" => "scrum",
                    "title" => "Scrum",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Kanban
        "kanban" => array(
            "name" => "Kanban",
            "desc" => "Jednoduché principy pro vývoj software (původně výrobu)",
            "parameters" => array(
                "generality" => 3, // řízení projektů (1) x vývoj software (10)
                "formality" => 10, // formální (1) x volné (10)
                "agility" => 1, // agilní (1) x robustní (10)
                "waterfall" => 10, // vodopádové (1) x iterativní (10)
                "usability" => 3, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 1985, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                "Kanban byl původně vyvinut ve čtyřicátých letech japonskou automobilkou Toyota. Pří jeho vývoji se Toyota zabývala se především myšlenkou toho, aby zákazníci dostali to, co chtějí a ve správný okamžik a množství, které oni vyžadují. Poznatky načerpané studiem retailového prodeje se pak Toyota snažila implementovat na vnitřní procesy vlastní firmy. Podobně jako v supermarketech byly vývěsní štítky, dle kterých se zboží opět naskladňovalo do regálu, používá Kanban karty dle kterých se řídí nejenom tok materiálu ale i práce. Slovo Kanban vzniklo spojením „Kan“, a „ban“, což lze do češtiny přeložit jako vizualizační tabule. Jde tedy především o vizualizaci výroby pomocí takzvaných Kanban karet a tabulí. Je to jednoduchá technologie koordinující pohyb materiálu a práce při využití vizuálních prvků, usnadňující řízení plánování výroby a řízení zásob. ",
                "Vývoj softwaru a výrobní činnost není to samé. Z tohoto vyplývají i rozdíly mezi Kanbanem výrobním a vývojovým. Softwaroví inženýři vytváří pokaždé jiné věci, zatím co při výrobě produkujeme stejné věci pokaždé dokola. Kanban pro IT přebírá jen určité techniky jak organizovat práci v týmech a soustředí se především na vizualizaci průběhu procesu.  Každá jednotlivá funkcionalita výsledného programu musí být nejdříve zanalyzována, navrhnuta. Po těchto krocích následuje samotné naprogramování, testování a implementace do většího celku. V obou dvou případech lze jednotlivé úkony generalizovat a řetězce rozdrobit na jednotlivé činnosti.",
            ),
            "principleImage" => "kanban.png",
            "principleLinks" => array(
                array(
                    "title" => "Kanban a jeho využití při vývoji SW",
                    "href" => "/resource/works/Filipcik-xfilz02-kanban.pdf",
                    "l" => 5,
                    "t" => 5,
                    "w" => 90,
                    "h" => 90,
                ),
            ),
            "principleDesc" => "Ukázka názorného příkladu Kanban boardu",
            "specifications" => array(
                array(
                    "title" => "Kenji Hiranabe - Kanban Applied to Software Development: from Agile to Lean",
                    "href" => "http://www.infoq.com/articles/hiranabe-lean-agile-kanban",
                ),
                array(
                    "title" => "Kanban for software engineering",
                    "href" => "http://leanandkanban.files.wordpress.com/2009/04/kanban-for-software-engineering-apr-242.pdf",
                ),
                array(
                    "title" => "How to get started with Kanban in software development",
                    "href" => "http://lostechies.com/derickbailey/2009/08/05/how-to-get-started-with-kanban-in-software-development/",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Základní",
                    "works" => array(
                        array(
                            "title" => "Kanban a jeho využití při vývoji SW",
                            "href" => "/resource/works/Filipcik-xfilz02-kanban.pdf",
                            "author" => "Zdeněk Filipčík",
                            "year" => "2011",
                            "desc" => "Popis Kanbanu a jeho implementace na SW projekty",
                        ),
                    ),
                ),
                array(
                    "title" => "Nástroje",
                    "works" => array(
                        array(
                            "title" => "Prehľad a porovnanie nástrojov metodiky Kanban",
                            "href" => "/resource/works/Podpora-DAD-v-RTC.pdf",
                            "author" => "Richard Nagrant",
                            "year" => "2011",
                            "desc" => "Spojení metodiky DAD a IBM platformy Jazz",
                        ),
                    ),
                ),
                array(
                    "title" => "Porovnání metodik",
                    "works" => array(
                        array(
                            "title" => "Porovnání Scrum a Kanban",
                            "href" => "/resource/works/Uridil-xurim00.pdf",
                            "author" => "Martin Uřídil",
                            "year" => "2012",
                            "desc" => "Práce shrnuje obě metodiky a porovnává rozdíly v jejich pojetí vývoje SW ",
                        ),
                        array(
                            "title" => "Kanban a jeho využití při vývoji softwaru",
                            "href" => "/resource/works/Krejci-Kanban_a_jeho_vyuziti_pri_vyvoji_softwaru_xkrej44.pdf",
                            "author" => "Jiří Krejčí",
                            "year" => "2011",
                            "desc" => "Představení metodiky Kanban a její porovnání z metodikou Scrum",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "lean-kit-kanban",
                    "title" => "LeankitKanban",
                    "desc" => "Webová aplikace pro podporu projektů řízených pomocí Kanban.",
                ),
                array(
                    "href" => "kanbanize",
                    "title" => "Kanbanize",
                    "desc" => "Webová aplikace pro podporu projektů řízených pomocí Kanban.",
                ),
                array(
                    "href" => "kanbanery",
                    "title" => "Kanbanery",
                    "desc" => "Nástroj určený pro podporu práce větších týmu v reálném čase při vysoké mobilitě.",
                ),
                array(
                    "href" => "trello",
                    "title" => "Trello",
                    "desc" => "",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "lean",
                    "title" => "",
                    "desc" => "",
                ),
                array(
                    "href" => "lean-startup",
                    "title" => "",
                    "desc" => "",
                ),
                array(
                    "href" => "scrum",
                    "title" => "",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // XP
        "xp" => array(
            "name" => "XP",
            "desc" => "eXtrémní Programování",
            "parameters" => array(
                "generality" => 10, // řízení projektů (1) x vývoj software (10)
                "formality" => 4, // formální (1) x volné (10)
                "agility" => 1, // agilní (1) x robustní (10)
                "waterfall" => 7, // vodopádové (1) x iterativní (10)
                "usability" => 4, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2003, // rok kdy byla hitem resp. vytvoření
                "openness" => 'open', // open, free, paid
            ),
            "info" => array(
                "Extrémní programování je metodika, kterou zavedl Kent Back. Jejím základem je jednoduchý, realistický způsob myšlení, používání poměrně standardních principů a postupů, jako psaní kódu, testování, apod.  Principem a XP a důvodem, proč se jmenuje extrémní, jsou myšlenky dotažené do extrémů. Díky tomu je možné dosáhnout vyšší kvality a pružněji reagovat na změny klientových požadavků během vývoje. Manažeři, zákazníci i vývojáři tvoří jeden tým.  Každý vyvíjený projekt Extrémního programování lze rozdělit na 5 oblastí, které mají svá neměnná pravidla. Jsou to Plánování, Řízení, Design, Programování a Testování.  Extrémní programování také na hodnotách, které je třeba během procesu vývoje dodržovat. Tyto hodnoty jsou jednoduchost, komunikace, zpětná vazba.",
                "Vše začíná plánováním. Během plánování se na základě požadavků vytvoří Users stories. Jednotlivé User strories se následně ohodnotí z hlediska náročnosti. Na základě toho zákazník vybírá, které Stories budou implementovány v další iteraci. Ty jsou následně podrobněji rozebrány v Iteračním plánu po technické stránce do jednotlivých programových úkolů a opět na základě Stories jsou navrženy akceptační testy. Vyskytne-li se nějaký náročný technický problém, využívá se takzvaných Spike Solutions. Jedná se o krátké experimentální kódy, které stojí mimo produkční kód a dávají rychlou odpověď na daný problém. Výsledkem Release planningu je definování projektu pomocí čtyř proměnných: Velikost, Čas, Zdroje a Kvalita. Tyto proměnné nemůže nikdo určit nezávisle, protože každý stakeholder má povědomí o parametrech jiné proměnné, ale zároveň jedna proměnná ovlivňuje druhou.",
            ),
            "principleImage" => "xp.jpg",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "/resource/works/Podpora-DAD-v-RTC.pdf",
                    "l" => 5,
                    "t" => 16,
                    "w" => 11,
                    "h" => 18,
                ),
            ),
            "principleDesc" => "Životní cyklus vývoje software s pomocí metodiky Extreme programing",
            "specifications" => array(
                array(
                    "title" => "Oficiální stránka, sloužící také jako rozcestník, se vším podstatným",
                    "href" => "http://www.extremeprogramming.org/",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Problematika user stories",
                    "works" => array(
                        array(
                            "title" => "User story požadavky dle XP",
                            "href" => "/resource/works/Jesuta-SP_User_Stories_Martin_Jesuta.pdf",
                            "author" => "Martin Ješuta",
                            "year" => "2011",
                            "desc" => "Praktické rady ke tvorbě a dokumentování User strories",
                        ),
                        array(
                            "title" => "User story (požadavky dle XP)",
                            "href" => "/resource/works/Podpora-DAD-v-RTC.pdf",
                            "author" => "Jakub Resl",
                            "year" => "2011",
                            "desc" => "Charakteristika, jak psát dobré user stories, formát zápisu, odhadování",
                        ),
                    ),
                ),
                array(
                    "title" => "Nástroje",
                    "works" => array(
                        array(
                            "title" => "Prehľad a porovnanie nástrojovna podporu metodiky XP",
                            "href" => "/resource/works/Slapka-Porovnanie_nastrojov_XP.pdf",
                            "author" => "Miroslav Šlapka",
                            "year" => "2011",
                            "desc" => "Přehled nástrojů pro podporu metodiky XP",
                        ),
                        array(
                            "title" => "Přehled a porovnání nástrojů na podporu metodiky Scrum a XP",
                            "href" => "/resource/works/Cizek-Nastroje_na_podporu_metodiky_SCRUM_a_XP.pdf",
                            "author" => "Michal Čížek",
                            "year" => "2011",
                            "desc" => "Přehled a porovnání nástrojů pro metodiky XP a Scrum",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "version-one",
                    "title" => "Version One",
                    "desc" => "Software pro řízení agilních projektů",
                ),
                array(
                    "href" => "extreme-planner",
                    "title" => "Extreme Planner",
                    "desc" => "Užitečný nástroj pro sledování a podporu agilních projektů",
                ),
                array(
                    "href" => "sprintometer",
                    "title" => "Sprintometer",
                    "desc" => "Sprintometer je jednoduchý a silný agilní nástroj pro řízení projektů  XP",
                ),
                array(
                    "href" => "xplanner",
                    "title" => "XPlanner",
                    "desc" => "XPlanner+ je open source nástroj na správu projektů a sledovaní defektů",
                ),
                array(
                    "href" => "mingle",
                    "title" => "Mingle",
                    "desc" => "Mingle je produkt  zaměřený na agilní řízení projektů",
                ),
                array(
                    "href" => "spira-plan",
                    "title" => "SpiraPlan",
                    "desc" => "SpiraPlanv je silný nástroj na podporu agilních metodik",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "scrum",
                    "title" => "",
                    "desc" => "",
                ),
                array(
                    "href" => "dad",
                    "title" => "",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Scrum
        "scrum" => array(
            "name" => "Scrum",
            "desc" => "moderní agilní metodika projektového řízení",
            "parameters" => array(
                "generality" => 2, // řízení projektů (1) x vývoj software (10)
                "formality" => 9, // formální (1) x volné (10)
                "agility" => 3, // agilní (1) x robustní (10)
                "waterfall" => 9, // vodopádové (1) x iterativní (10)
                "usability" => 10, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2002, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
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
            "principleDesc" => "Životní cyklus vývoje software s pomocí projektové metodiky Scrum",
            "specifications" => array(
                array(
                    "title" => "Oficíální příručka pro metodiku Scrum - Scrum Guide™",
                    "href" => "https://www.scrum.org/Portals/0/Documents/Scrum%20Guides/2013/Scrum-Guide-CS.pdf#zoom=100",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Velké distribuce a distribuované projekty",
                    "works" => array(
                        array(
                            "title" => "Agilní metodiky pro distribuované projekty",
                            "href" => "/resource/works/Palus-xpalm29-agilne_metodiky_v_distribuovanych_projektech.pdf",
                            "author" => "Matej Paluš",
                            "year" => "2011",
                            "desc" => "Problematika distribuovaných projektů a možnosti využití distribuovaného Scrumu",
                        ),
                        array(
                            "title" => "Využití metodiky Scrum pro velké projekty - Scrum of Scrums pro Energy Software",
                            "href" => "/resource/works/Host-SCRUM_pro_velke_projekty_Daniel_Host.pdf",
                            "author" => "Daniel Host",
                            "year" => "2011",
                            "desc" => "Případová studie využití Metodiky Scrum na velkých projektech ve firmě Energy Software",
                        ),
                        array(
                            "title" => "Využití metodiky Scrum pro velké projekty – Scrum of Scrums",
                            "href" => "/resource/works/Krena-ScrumOfScrums.pdf",
                            "author" => "Martin Křena",
                            "year" => "2011",
                            "desc" => "Práce ukazuju adaptaci jednotlivých fází životního cyklu Scrumu na velké projekty",
                        ),
                    ),
                ),
                array(
                    "title" => "Nástroje",
                    "works" => array(
                        array(
                            "title" => "Přehled a porovnání nástrojů na podporu metodiky Scrum aXP",
                            "href" => "/resource/works/Cizek-Nastroje_na_podporu_metodiky_SCRUM_a_XP.pdf",
                            "author" => "Michal Čížek",
                            "year" => "2011",
                            "desc" => "Přehled a porovnání nástrojů pro metodiky XP a Scrum",
                        ),
                    ),
                ),
                array(
                    "title" => "Porovnání metodik",
                    "works" => array(
                        array(
                            "title" => "Porovnání Scrum a Kanban",
                            "href" => "/resource/works/Uridil-xurim00.pdf",
                            "author" => "Martin Uřídil",
                            "year" => "2012",
                            "desc" => "Práce shrnuje obě metodiky a porovnává rozdíly v jejich pojetí vývoje SW ",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "polarion-alm",
                    "title" => "Polarion ALM",
                    "desc" => "Agilní projektový SW, který díky podpoře dodavatele umožňuje dosáhnout vysoké ergonomie a použitelnosti",
                ),
                array(
                    "href" => "version-one",
                    "title" => "Version One",
                    "desc" => "Software pro řízení agilních projektů",
                ),
                array(
                    "href" => "extreme-planner",
                    "title" => "Extreme Planner ",
                    "desc" => "Užitečný nástroj pro sledování a podporu agilních projektů",
                ),
                array(
                    "href" => "trello",
                    "title" => "Trello",
                    "desc" => "Jednoduchý webový nástroj na podporu řízení projektů",
                ),
                array(
                    "href" => "scrum-do",
                    "title" => "ScrumDo",
                    "desc" => "Rozšířený nástroj vyvinutý pro podporuju projektů řízených Scrumem",
                ),
                array(
                    "href" => "scrumwise",
                    "title" => "Scrumwise",
                    "desc" => "Jedoduchý, ale efektivní webový nástroj pro podporu Scumu",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "xp",
                    "title" => "",
                    "desc" => "",
                ),
                array(
                    "href" => "dad",
                    "title" => "",
                    "desc" => "",
                ),
                array(
                    "href" => "kanban",
                    "title" => "",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),


        // Plannig poker
        "planning-poker" => array(
            "name" => "Plannig poker",
            "desc" => "Nástroj a metodika pro vytváření odhadů náročnosti během vývoje",
            "parameters" => array(
                "generality" => 5, // řízení projektů (1) x vývoj software (10)
                "formality" => 5, // formální (1) x volné (10)
                "agility" => 3, // agilní (1) x robustní (10)
                "waterfall" => 8, // vodopádové (1) x iterativní (10)
                "usability" => 10, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2010, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                "Planning poker, je nástroj, který umožňuje vytvářet velmi přesné odhady náročnosti během vývoje softwaru. Je založený na technice známé jako Wideband Delphi, která byla vytvořena společností RAND ve 40. letech minulého století. Hlavní myšlenka této metody spočívá v aplikaci známého přísloví, že více hlav víc více ví. Metoda kombinuje znalecké posudky, analogii a zábavný přístup, který vede k rychlým, ale velice spolehlivým odhadům. Plannig pokeru se vždy účastní všichni členové týmu, který by ale neměl být větší než deset lidí. V takovém případě pak dochází k jeho rozdělení. Meetingu by se měl účastnit také Product owner, který ale sám odhadovat nebude, Jeho hlavní rolí, je přesný popis produktu a požadavků na jednotlivé funkcionality, aby umožnil členům týmu co nejlepší odhad.  Každý jednotlivý člen týmu odhaduje samostatně. Každý člen týmu dostane na začátku karty, které na sobě mají napsány určité hodnoty, označující náročnost. Následně zvolený moderátor přečte popis produktu, na jehož základě dochází k hodnocení náročnosti. Každý člen týmu si vybere kartu, ale neukazuje jí, dokud si jí nevyberou i všichni ostatní. Pak dojde k odhalení. Pokud se jednotlivé odhady liší, což je pravděpodobné, následuje diskuze. Následuje další kolo odhadu. Tento proces pokračuje, dokud se tým nedohodne na použitelném odhadu."
            ),
            "principleImage" => "planning-poker.png",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "/resource/works/Tvrdikova-planning_poker_xtvrl05.pdf",
                    "l" => 5,
                    "t" => 5,
                    "w" => 90,
                    "h" => 90,
                ),
            ),
            "principleDesc" => "Ukázka procesu odhadování pomocí Planning poker",
            "specifications" => array(
                array(
                    "title" => "James Grenning – How to avoid analisys paralysis while release planning",
                    "href" => "http://renaissancesoftware.net/files/articles/PlanningPoker-v1.1.pdf",
                ),
                array(
                    "title" => "Bob Hartman - An Introduction to Planning Poker",
                    "href" => "http://agile.dzone.com/articles/introduction-planning-poker",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Popis Planning poker",
                    "works" => array(
                        array(
                            "title" => "Planning poker",
                            "href" => "/resource/works/Tvrdikova-planning_poker_xtvrl05.pdf",
                            "author" => "Lucie Tvrdíková",
                            "year" => "2011",
                            "desc" => "Práce představuje metodu Planning poker a postup při její realizaci",
                        ),
                    ),
                ),
                array(
                    "title" => "Nástroje",
                    "works" => array(
                        array(
                            "title" => "Planning poker",
                            "href" => "/resource/works/Planning-poker-Danek.pdf",
                            "author" => "Michal Daněk",
                            "year" => "2011",
                            "desc" => "Popis metody, přehled SW nástrojů na její podporu",
                        ),
                    ),
                ),
            ),
            "tools" => array(
                array(
                    "href" => "planning-poker-mgs",
                    "title" => "Planning Poker od Mountain Goat Software",
                    "desc" => "Jedná se o online nástroj, který je obzvláště vhodný pro  distribuované týmy.",
                ),
                array(
                    "href" => "ice-scrum",
                    "title" => "IceScrum",
                    "desc" => "Nástroj pro metodiku Scrum, který podporuje i Planning poker nebo Kanban",
                ),
                array(
                    "href" => "planning-poker-bbv",
                    "title" => "Planning Poker od BBV Software Services AG",
                    "desc" => "Mobilní aplikace pro iPhone",
                ),
                array(
                    "href" => "planning-poker-plus-plus",
                    "title" => "Planning Poker ++",
                    "desc" => "Mobilní aplikace pro iPhone",
                ),
                array(
                    "href" => "planning-poker-kanjih-droid",
                    "title" => "Planning Poker Android od KanjihDroid",
                    "desc" => "Mobilní aplikace pro Android",
                ),
                array(
                    "href" => "planning-poker-unboxed-consulting",
                    "title" => "Planning Poker od Unboxed Consulting",
                    "desc" => "Mobilní aplikace pro Android",
                ),
            ),
            "similar" => array(
                array(
                    "href" => "scrum",
                    "title" => "",
                    "desc" => "",
                ),
                array(
                    "href" => "kanban",
                    "title" => "",
                    "desc" => "",
                ),
            ),
            "projects" => array(
            ),
        ),

        // CMMI
        "cmmi" => array(
            "name" => "CMMI",
            "desc" => "model kvality organizace práce určený pro vývojové týmy",
            "parameters" => array(
                "generality" => 3, // řízení projektů (1) x vývoj software (10)
                "formality" => 1, // formální (1) x volné (10)
                "agility" => 7, // agilní (1) x robustní (10)
                "waterfall" => 4, // vodopádové (1) x iterativní (10)
                "usability" => 4, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 1995, // rok kdy byla hitem resp. vytvoření
                "openness" => 'paid', // open, free, paid
            ),
            "info" => array(
                "Capability Maturity Model Integration(for Development) je metodika tvořená pod záštitou Software Engineering Institute na univerzitě Carnegie Mellon. Její první verze (1.1) byla vydána roku 2002 a nahradila původní zastaralý koncept Capability Maturity Model (CMM) vyvíjený v letech 1987 - 1997 tamtéž. (Wikipedia contributors, 2011)",
                "Aktuálně je CMMI ve verzi 1.3 a představuje kolekci průmyslových best practice pro tvorbu a implementaci organizačních procesů na takové úrovni, aby byla zajištěna plná podpora celého životního cyklu produktů a služeb organizace. Cílovou skupinu metodiky tak tvoří všechny organizace, které by buďto rády zlepšily své procesy a zefektivnily tvorbu svých produktů a poskytování svých služeb, nebo již na zlepšování procesů pracují a hledají referenční model, se kterým by srovnaly aktuální stav svých procesů. Samotná metodika sestává z celkem 22 procesních oblastí, přičemž 16 z nich tvoří tzv. jádro metodiky, které je sdíleno napříč všemi implementačními modely CMMI.",
                "CMMI-DEV obecně pokrývá tři základní oblasti – lidi, postupy a metody a nástroje – jež jsou spojeny procesy v jeden konzistentní celek. Zaměřením se na popsané postupy a metody umožnuje zvýšit společnosti konkurenceschopnost prostřednictvím maximalizace produktivity lidí a lepším využitím dostupných nástrojů a technologií. (Kasse, 2008 )",
            ),
            "principleImage" => "cmmi.png",
            "principleLinks" => array(
                array(
                    "title" => "OPD",
                    "href" => "/resource/works/Paulech_CMMI_OPF_OPD_OT.pdf",
                    "l" => 30,
                    "t" => 45,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "OT",
                    "href" => "/resource/works/Paulech_CMMI_OPF_OPD_OT.pdf",
                    "l" => 30,
                    "t" => 66,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "OPP",
                    "href" => "/resource/works/stross_CMMI_DEV_OPP_OPM.pdf",
                    "l" => 53,
                    "t" => 24,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "OPM",
                    "href" => "/resource/works/stross_CMMI_DEV_OPP_OPM.pdf",
                    "l" => 75,
                    "t" => 24,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "PI",
                    "href" => "/resource/works/Kovar-CMMI_Productintegration.pdf",
                    "l" => 30,
                    "t" => 77,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "PMC",
                    "href" => "/resource/works/Hendrich-xhenm07_project_monitoring_and_control.pdf",
                    "l" => 8,
                    "t" => 45,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "PP",
                    "href" => "/resource/works/Matas-xmatr21_CMMI_project_planning.pdf",
                    "l" => 8,
                    "t" => 56,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "PPQA",
                    "href" => "/resource/works/Rumplikova-CMMI_PPQA.pdf",
                    "l" => 8,
                    "t" => 66,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "QPM",
                    "href" => "/resource/works/Verner-zajisteni_kvality_cmmi.pdf",
                    "l" => 53,
                    "t" => 34,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "RD",
                    "href" => "/resource/works/xsubz02.pdf",
                    "l" => 30,
                    "t" => 87,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "RM",
                    "href" => "/resource/works/Vachalec-CMMIReqMan.pdf",
                    "l" => 8,
                    "t" => 77,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "RSKM",
                    "href" => "/resource/works/Karkoskova-CMMI_RSKM_Karkoskova_xkars05.pdf",
                    "l" => 53,
                    "t" => 45,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "TS",
                    "href" => "/resource/works/Hrdinka-CMMI_Technical_Solution___Hrdinka__Taborsky.pdf",
                    "l" => 53,
                    "t" => 56,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "VAL",
                    "href" => "/resource/works/Mlejnek-xmlep03_4it421_cmmi_validation.pdf",
                    "l" => 53,
                    "t" => 66,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "VER",
                    "href" => "/resource/works/Andilova-CMMI_DEV_Verification_xanda07.pdf",
                    "l" => 53,
                    "t" => 77,
                    "w" => 20,
                    "h" => 7,
                ),
                array(
                    "title" => "OPF",
                    "href" => "/resource/works/Paulech_CMMI_OPF_OPD_OT.pdf",
                    "l" => 30,
                    "t" => 56,
                    "w" => 20,
                    "h" => 7,
                ),
            ),
            "principleDesc" => "",
            "images" => array(
                "cmmi-similar.jpg"
            ),
            "specifications" => array(
                array(
                    "title" => "dokument CMMI® for Development, Version 1.3",
                    "href" => "http://www.sei.cmu.edu/reports/10tr033.pdf",
                    "desc" => "Základní definice CMMI-DEV v1.3 vydaná SEI (Software Engineering Institute) (ENG)",
                ),
                array(
                    "title" => "Wikipedia - CMMI",
                    "href" => "http://cs.wikipedia.org/wiki/CMMI",
                    "desc" => "Obecnější popis CMMI na Wikipedii (CZ)",
                ),
                array(
                    "title" => "Wikipedia - Capability Maturity Model",
                    "href" => "http://en.wikipedia.org/wiki/Capability_Maturity_Model",
                    "desc" => "Podrobnější popis oproti české verzi na Wikipedii (ENG)",
                ),
                array(
                    "title" => "SEI CMU",
                    "href" => "http://www.sei.cmu.edu",
                    "desc" => "Oficiální webové stránky SEI (Software Engineering Institute) - autoři CMMI",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Generic goals and generic practicies (GGGP)",
                    "works" => array(
                        array(
                            "title" => "CMMI for dev 1.3 GG and GP",
                            "href" => "/resource/works/xfeit03-CMMI_for_Dev_v_1_3-GG_and_GP-paper.pdf",
                            "author" => "Tomáš Feige",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "968 KB",
                        ),
                        array(
                            "title" => "Generické cíle a praktiky",
                            "href" => "/resource/works/Polakovic-genericke-cile-a-praktiky-CMMI.pdf",
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
                            "href" => "/resource/works/Paulech_CMMI_OPF_OPD_OT.pdf",
                            "author" => "Bc. Matej Paulech",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "1,1 MB",
                        ),
                        array(
                            "title" => "CMMI dev OPP OPM",
                            "href" => "/resource/works/stross_CMMI_DEV_OPP_OPM.pdf",
                            "author" => "Pavel Štross",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "264 KB",
                        ),
                        array(
                            "title" => "CMMI Product integration",
                            "href" => "/resource/works/Kovar-CMMI_Productintegration.pdf",
                            "author" => "Martin Kovář",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "383 KB",
                        ),
                        array(
                            "title" => "Project monitoring and control",
                            "href" => "/resource/works/Hendrich-xhenm07_project_monitoring_and_control.pdf",
                            "author" => "Michal Hendrich",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "636 KB",
                        ),
                        array(
                            "title" => "CMMI Project planning",
                            "href" => "/resource/works/Matas-xmatr21_CMMI_project_planning.pdf",
                            "author" => "Radek Matas",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "664 KB",
                        ),
                        array(
                            "title" => "CMMI PPQA",
                            "href" => "/resource/works/Rumplikova-CMMI_PPQA.pdf",
                            "author" => "Blanka Rumplíková",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "231 KB",
                        ),
                        array(
                            "title" => "Zajištění kvality CMMI",
                            "href" => "/resource/works/Verner-zajisteni_kvality_cmmi.pdf",
                            "author" => "Tomáš Verner",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "772 KB",
                        ),
                        array(
                            "title" => "Requirements Development",
                            "href" => "/resource/works/xsubz02.pdf",
                            "author" => "Zdeněk Šubr",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "1,2 MB",
                        ),
                        array(
                            "title" => "Requirements Management",
                            "href" => "/resource/works/Vachalec-CMMIReqMan.pdf",
                            "author" => "Vachalec Vladan",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "572 KB",
                        ),
                        array(
                            "title" => "CMMI Risk Management",
                            "href" => "/resource/works/Karkoskova-CMMI_RSKM_Karkoskova_xkars05.pdf",
                            "author" => "Soňa Karkošková",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "503 KB",
                        ),
                        array(
                            "title" => "CMMI Technical Solution",
                            "href" => "/resource/works/Hrdinka-CMMI_Technical_Solution___Hrdinka__Taborsky.pdf",
                            "author" => "Jan Hrdinka, Tomáš Táborský",
                            "year" => "2012",
                            "desc" => "",
                            "size" => "710 KB",
                        ),
                        array(
                            "title" => "CMMI Validation",
                            "href" => "/resource/works/Mlejnek-xmlep03_4it421_cmmi_validation.pdf",
                            "author" => "Bc. Petr Mlejnek",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "1,1 MB",
                        ),
                        array(
                            "title" => "CMMI dev Verification",
                            "href" => "/resource/works/Andilova-CMMI_DEV_Verification_xanda07.pdf",
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
                            "title" => "Adrian Harston přednáší o změnách, které přineslo CMMI v1.3 (45 min - ENG)",
                            "href" => "http://www.youtube.com/watch?v=8h622dpHB10",
                            "author" => "Trinity Management Consulting",
                            "year" => "2011",
                            "desc" => "",
                            "size" => "",
                        ),
                        array(
                            "title" => "Představení CMMI (8 min - ENG)",
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
                    "href" => "visual-studio",
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
                    "href" => "agile",
                    "http" => "http://en.wikipedia.org/wiki/Agile_software_development",
                    "title" => "Agile",
                    "desc" => "skupina metod vývoje SW založená na iterativním a inkrementálním principu.",
                ),
                array(
                    "href" => "team-software-process",
                    "http" => "http://en.wikipedia.org/wiki/Team_Software_Process",
                    "title" => "Team Software process",
                    "desc" => "procesní rámec jak pro produkci tak vývoj s účelem zlepšování kvality a produktivity.",
                ),
                array(
                    "href" => "iso-15504",
                    "http" => "http://en.wikipedia.org/wiki/ISO/IEC_15504",
                    "title" => "ISO 15504",
                    "desc" => "Nazývaný též SPICE (Software Process Improvement and Capability Determination) - rámec vývoje SW používající některé přístupy k zralosti jako CMMI.",
                ),
                array(
                    "href" => "iso-9000-2000",
                    "http" => "http://en.wikipedia.org/wiki/ISO_9000#2000_version",
                    "title" => "ISO 9000:2000",
                    "desc" => "Norma týkající se kvality, efektivity a neustálemu zlepšování procesů.",
                ),
                array(
                    "href" => "iso-20000",
                    "http" => "http://www.eiso.cz/poradenstvi/zavadeni-systemu/ISO-20000/",
                    "title" => "ISO 20000",
                    "desc" => "Norma týkající se managementu IT služeb - zlepšování kvality, zvyšování efektivity atp.",
                ),
                array(
                    "href" => "pdca",
                    "http" => "http://en.wikipedia.org/wiki/PDCA",
                    "title" => "PDCA",
                    "desc" => "Tzv. Demingův model pro zdokonalování procesů.",
                ),
                array(
                    "href" => "total-quality-management",
                    "http" => "http://en.wikipedia.org/wiki/Total_quality_management",
                    "title" => "Total quality management",
                    "desc" => "TQM je komplexní přístup k řízení s důrazem na kvalitu ve všech aspektech organizace.",
                ),
            ),
            "projects" => array(
            ),
        ),

        // Ostatní témata
        "other" => array(
            "name" => "Ostatní témata",
            "desc" => "metodiky a nástroje, jejichž téma nepatří mezi ostatní",
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
                "V této časti naleznete uveřejněné semestrální práce předmětu 4IT421 Zlepšování procesů budování IS, které nespadají svým tématem pod žádnou specifickou metodiku. Jedná se tedy o práce, které řeší přesahy jednotlivých metodik nebo se jedná o popis různých SW nástrojů na podporu vývoje a týmové spolupráce. Případně se může jednat o minoritní metodiky, které se snaží rozvinout známější a používanější metodiky. ",
                "Momentálně zde můžete nalézt práce, které se zabývají především monitoringem a správou chyb aplikací a změnových řízení při vývoji SW. Dále se zde uvedené práce zabývají vývojem počítačových her a metodickým rámcem vývoje od společnosti Microsoft.",
            ),
            "principleImage" => "other.png",
            "principleLinks" => array(
                array(
                    "title" => "Nástroj na sledování chyb",
                    "href" => "/resource/works/Zmatlik-nastrojeNaSledovaniChyb.pdf",
                    "l" => 0,
                    "t" => 1,
                    "w" => 50,
                    "h" => 24,
                ),
                array(
                    "title" => "Implementace RUP",
                    "href" => "/resource/works/Hanus-4it421_hanus_meszaros.pdf",
                    "l" => 1,
                    "t" => 29,
                    "w" => 27,
                    "h" => 20,
                ),
                array(
                    "title" => "MSF",
                    "href" => "/resource/works/Smahel-smahel_MSF.pdf",
                    "l" => 1,
                    "t" => 85,
                    "w" => 63,
                    "h" => 14,
                ),
                array(
                    "title" => "PC games",
                    "href" => "/resource/works/Kotlaba-Metodiky_pro_vyvoj_pocitacovych_her.pdf",
                    "l" => 30,
                    "t" => 33,
                    "w" => 69,
                    "h" => 17,
                ),
                array(
                    "title" => "Bugzilla",
                    "href" => "/resource/works/Zmatlik-nastrojeNaSledovaniChyb.pdf",
                    "l" => 6,
                    "t" => 53,
                    "w" => 48,
                    "h" => 29,
                ),
                array(
                    "title" => "",
                    "href" => "/resource/works/Smahel-smahel_MSF.pdf",
                    "l" => 50,
                    "t" => 4,
                    "w" => 50,
                    "h" => 14,
                ),
                array(
                    "title" => "",
                    "href" => "/resource/works/Smahel-smahel_MSF.pdf",
                    "l" => 54,
                    "t" => 19,
                    "w" => 29,
                    "h" => 12,
                ),
                array(
                    "title" => "",
                    "href" => "/resource/works/Hanus-4it421_hanus_meszaros.pdf",
                    "l" => 57,
                    "t" => 60,
                    "w" => 33,
                    "h" => 17,
                ),
                array(
                    "title" => "",
                    "href" => "/resource/works/Hanus-4it421_hanus_meszaros.pdf",
                    "l" => 74,
                    "t" => 78,
                    "w" => 23,
                    "h" => 21,
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
                array(
                    "title" => "SPEM 2.0",
                    "href" => "http://www.omg.org/spec/SPEM/2.0/",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Bug tracking",
                    "works" => array(
                        array(
                            "title" => "Porovnání nástrojů na sledování chyb",
                            "href" => "/resource/works/Zmatlik-nastrojeNaSledovaniChyb.pdf",
                            "author" => "Rostislav Zmátlík",
                            "year" => "2011",
                            "desc" => "Srovnání tří nástrojů na sledování chyb.",
                            "keywords" => "bug tracking, sledování chyb, Bug tracker, Mantis bug tracker, Bugzilla",
                        ),
                        array(
                            "title" => "Srovnání issue a bug tracking komerčních nástrojů",
                            "href" => "/resource/works/BugTracking.pdf",
                            "author" => "Jakub Houžvička",
                            "year" => "2011",
                            "desc" => "Metodické srovnání tří komerčních Bug tracking řešení. ",
                            "keywords" => "issue tracking, bug tracking, Pivotal Tracker, Gemini, JIRA",
                        ),
                    ),
                ),
                array(
                    "title" => "Nezařazené",
                    "works" => array(
                        array(
                            "title" => "Metodiky pro vývoj počítačových her",
                            "href" => "/resource/works/Kotlaba-Metodiky_pro_vyvoj_pocitacovych_her.pdf",
                            "author" => "Josef Kotlaba",
                            "year" => "2011",
                            "desc" => "Popis metodik pro vývoj počítačových her.",
                            "keywords" => "vývoj počítačových her, životní cyklus, sběr požadavků, testování",
                        ),
                        array(
                            "title" => "Implementace metodiky Rational Unified Process v systému Unicorn Universe",
                            "href" => "/resource/works/Hanus-4it421_hanus_meszaros.pdf",
                            "author" => "Mészáros Maroš, Oldřich Hanuš",
                            "year" => "2012",
                            "desc" => "Vývoj SW dle RUP v Unicorn Universe",
                            "keywords" => "RUP, Unicorn Universe, metodika, agilní, tradiční, projektový management",
                        ),
                        array(
                            "title" => "Microsoft Solutions Framework ",
                            "href" => "/resource/works/Smahel-smahel_MSF.pdf",
                            "author" => "Martin Šmahel",
                            "year" => "2012",
                            "desc" => "Představení metodického rámce MFS od společnosti Microsoft. ",
                            "keywords" => "Microsoft Solutions Framework, metodický rámec, agilní vývoj, CMMI, týmový model, governance model, řízení projektu",
                        ),
                        array(
                            "title" => "SPEM 2.0 úvod, účel (kap. 6.2, 6.3)",
                            "href" => "/resource/works/Hyblbauer_4it421_xhybj00_spem.pdf",
                            "author" => "Jan Hyblbauer",
                            "year" => "2013",
                            "desc" => "Představení a specifika procesního metamodelu SPEM 2.0.",
                            "keywords" => "SPEM, procesní metamodel, proces, UML, Enterprise Architect",
                        ),
                        array(
                            "title" => "Přehled rolí v jednotlivých metodikách",
                            "href" => "/resource/works/Langrova_4IT421_Langrova_Kamila_xlank10.pdf",
                            "author" => "Bc. Kamila Langrová",
                            "year" => "2013",
                            "desc" => "Porovnání projektových rolí podle konkrétní metodiky – RUP, XP, OpenUP, MMSP, Scrum.",
                            "keywords" => "RUP, Extrémní programování, Scrum, OpenUP, MMSP, projekt, projektová role, metodika",
                        ),
                        array(
                            "title" => "SPEM 2.0 úvod, účel",
                            "href" => "/resource/works/Matouskova_Matouskova_Sona_SPEM.pdf",
                            "author" => "Matoušková Soňa",
                            "year" => "2013",
                            "desc" => "Práce popisuje účel a užití metamodelu SPEM 2.0",
                            "keywords" => "SPEM, proces, UML, Object Management Group, modelování procesů, metamodel",
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
                        array(
                            "title" => "SPEM",
                            "href" => "http://www.slideshare.net/fdgiraldo/introduction-to-rup-spem",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                    ),
                ),
            ),
            "tools" => array(
            ),
            "similar" => array(
            ),
            "projects" => array(
                array(
                    "href" => "http://www.iiitd.edu.in/~ashish/APSEC-2012.pdf",
                    "title" => "Bug tracking při vývoji Google Chrome",
                ),
                array(
                    "href" => "http://www.netresultstracker.com/product/apps/cs_games_software.html",
                    "title" => "Implementace NetResults tracker",
                ),
                array(
                    "href" => "https://www.google.cz/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0CC8QFjAA&url=http%3A%2F%2Fwww.lifesize.com%2F~%2Fmedia%2FDocuments%2FCase%2520Studies%2FCompanies%2520A%2520Through%2520L%2FActivision%2520Case%2520Study%2520EN.ashx&ei=4vakUrfMDYbW7Qaq6IHoDQ&usg=AFQjCNGBK2DN14mtqBhdJq-tDGkeI85c3Q&sig2=ip8grRxEB2-nKpL0D_t6vg&bvm=bv.57752919,d.ZGU",
                    "title" => "Case study popisující spolupráci vývojářů ve společnosti Activision",
                ),
                array(
                    "href" => "http://www.omg.org/spec/SPEM/2.0/",
                    "title" => "Case study SPEM",
                ),
            ),
        ),



        // ISO 29110
        "iso-29110" => array(
            "name" => "ISO 29110",
            "desc" => "Standard pro malé entity",
            "parameters" => array(
                "generality" => 2, // řízení projektů (1) x vývoj software (10)
                "formality" => 1, // formální (1) x volné (10)
                "agility" => 7, // agilní (1) x robustní (10)
                "waterfall" => 5, // vodopádové (1) x iterativní (10)
                "usability" => 8, // v praxi využívané (1) x nevyužívané (10)
                "enveloped" => 2010, // rok kdy byla hitem resp. vytvoření
                "openness" => 'free', // open, free, paid
            ),
            "info" => array(
                "Mezinárodní norma ISO/IEC 29110 Life-Cycle Profiles for Very Small Entities je vytvářena pracovní skupinou WG24, která je součástí ISO/IEC JTC1/SC07, pro posuzování a zlepšování procesů ve velmi malých podnicích.",
                "Zavádění standardů a norem v oblasti softwarových procesů je náročné na zdroje, a tak je realizují spíše větší organizace. Přitom podíl malých firem je v oblasti vývoje softwaru velmi vysoký. Navíc malé podniky vyvíjí životně důležité systémy, systémy kritické pro poslání organizace, anebo systémy pro státní správu. To podtrhuje význam, který má pro tyto podniky certifikace. Průzkum realizovaný v roce 2006 [Laporte, 2006] ukázal zajímavé rozdíly v počtu certifikovaných firem ve vztahu k velikosti firmy. V kategorii velmi malých podniků bylo certifikováno méně než 18% firem. Naproti tomu u firem s více než 25 zaměstnanci bylo certifikováno už 53% firem. Certifikované firmy používají v 55% ISO normy a v 47% modely CMM, respektive CMMI [Octaba, 2008]. Protože se u velmi malých podniků předpokládala menší míra používání standardů, obsahoval průzkum také otázku, z jakého důvodu firma standardy a normy nepoužívá. Jako nejčastější důvody byly uváděny nedostatek zdrojů (28%) a skutečnost, že standardy nejsou vyžadovány (24%). 15% respondentů uvedlo, že standardy jsou příliš byrokratické a nejsou k dispozici návody na jejich aplikaci. Na druhé straně ale převážná většina velmi malých podniků (74%) uvedla, že je pro ně velmi důležité získat certifikaci.",
            ),
            "principleImage" => "iso-29110.jpg",
            "principleLinks" => array(
                array(
                    "title" => "",
                    "href" => "http://spicenter.vse.cz/wp-content/uploads/Konstrukce_a_Jednotkove_testovani.pdf",
                    "l" => 10,
                    "t" => 0,
                    "w" => 25,
                    "h" => 30,
                ),
                array(
                    "title" => "",
                    "href" => "http://spicenter.vse.cz/wp-content/uploads/DP_V_V_CZ_v3.pdf",
                    "l" => 37,
                    "t" => 0,
                    "w" => 25,
                    "h" => 30,
                ),
                array(
                    "title" => "",
                    "href" => "",
                ),
                array(
                    "title" => "",
                    "href" => "http://spicenter.vse.cz/wp-content/uploads/Basic_Profile-DP-Project_Management_cz.pdf",
                    "l" => 3,
                    "t" => 33,
                    "w" => 30,
                    "h" => 30,
                ),
                array(
                    "title" => "",
                    "href" => "",
                ),
                array(
                    "title" => "",
                    "href" => "http://spicenter.vse.cz/wp-content/uploads/Deployment_Package-_Product_Delivery_CZ.pdf",
                    "l" => 66,
                    "t" => 33,
                    "w" => 25,
                    "h" => 30,
                ),
                array(
                    "title" => "",
                    "href" => "http://spicenter.vse.cz/wp-content/uploads/4it421_dp-software-requirements-analysis-v1_2_cs_xlozp02_preklad_v18.pdf",
                    "l" => 3,
                    "t" => 66,
                    "w" => 30,
                    "h" => 30,
                ),
                array(
                    "title" => "",
                    "href" => "http://spicenter.vse.cz/wp-content/uploads/Dufek-Implementacni_balicek___Sprava_verzi___CZ_lokalizace_v1.4.pdf",
                    "l" => 37,
                    "t" => 66,
                    "w" => 25,
                    "h" => 30,
                ),
                array(
                    "title" => "",
                    "href" => "",
                ),
            ),
            "principleDesc" => array(
                "Pracovní skupina WG24 připravuje množinu dokumentů, technických zpráv (TR) a mezinárodních standardizovaných profilů (ISP) pod obecným názvem Life-Cycle Profiles for Very Small Entities (VSEP), která obsahuje:",
                array(
                    "TR 29110-1 Overview",
                    "ISP 29110-2 Framework and Taxonomy",
                    "TR 29110-3 Profile Assesment Guide",
                    "TR 29110-4.1 Basic Profile Specification",
                    "TR 29110-5.1 Management and Engineering Guide for Basic Profile",
                ),
                "Základní profil se skládá ze dvou skupin procesů – Implementace softwaru a Řízení projektu. Na obrázku 1 jsou znázorněny jednotlivé procesy, jejich vstupy a výstupy. Skupina WG24 počítá s tím, že vytvoří další profily, které umožní organizaci dosáhnout vyšší úrovně způsobilosti procesů a umožní jí postupně se dopracovat k certifikaci na ISO 9001. Součástí normy je také návod, jak implementovat softwarové procesy a pro každý proces obsažený v základním profilu je vytvořen tzv. balíček nasazení, který vysvětluje smysl procesu, cíl jeho zavedení, způsob jeho zavedení, doporučuje techniky a metody, které slouží k realizaci procesu a obsahuje šablony dokumentů, které je třeba při realizaci procesu vytvářet. Norma TR 29110 je ve stádiu vytváření, ale pracovní verze dokumentů a některé balíčky nasazení jsou již k dispozici. Pracovní skupina nyní zvažuje, v jaké formě bude postupy publikovat. Jako možné řešení se jeví využít nástroj pro správu obsahu Eclipse Process Framework Composer (EPF Composer), který je volně dostupný a umožňuje snadnou konfiguraci a přizpůsobení postupů.",
                "Zdroje:" => array(
                    "BASL a kol., 2011 Inovace podnikových informačních systémů, 1. vyd. Praha : PROFESSIONAL PUBLISHING, 2011. 151 s. ISBN 978-80-7431-045-4.",
                    "OCTABA, H.; PIETINI, M. 2008. Software Process Improvement for Small and Medium Enterprises: Techniques and case studies. Information Science Reference, Hershey, New York, 2008, ISBN 978-1-59904-906-9.",
                    "LAPORTE, C. Y.; APRIL, A.; RENAULT, A. 2006. Applying ISO/IEC software engineering standards in small settings, Historical perspectives and initial achievements. In Proceedings of the SPICE conference, Luxembourg (pp.57-62), May 2006.",
                    "MÄKINEN, T.; VARKOI, T. 2008. Analyzing a Process Profile for Very Small Software Enterprises. In Proceedings of the SPICE 2008 conference, Norimberk, 2008.",
                ),
                "Cíle normy:" => "Při vytváření normy byly stanoveny následující cíle:",
                array(
                    "pomoci velmi malým podnikům produkovat kvalitní softwarové systémy bez počátečních nákladů pro zavedení a udržování celé sady norem a systémů softwarového inženýrství či provádění komplexních hodnocení procesů",
                    "poskytnout snadno pochopitelné, dostupné a použitelné návody pro velmi malé podniky",
                    "vytvořit sadu profilů, které umožní zavést a zlepšovat procesy ve velmi malých podnicích",
                    "poskytnout velmi malým podnikům doménově specifické profily",
                    "poskytnout velmi malým podnikům příklady, které pomohou při zavádění a dodržování procesů podporujících vytváření kvalitního softwaru a odpovídajících jejich specifickým potřebám, problémům a rizikům",
                    "poskytnout základnu pro spolupráci více velmi malých podniků u projektů, které jsou pro jeden podnik příliš složité",
                    "vytvořit škálovatelné profily a návody, které umožní velmi malým podnikům dosažení shody s normami ISO/IEC 12207 a/nebo ISO/IEC 9001 a posouzení procesů s nutností jejich minimálního přepracování."
                ),
                "Zdroje normy:" => "Norma ISO/IEC 29110 byla založena na modelu Mexického standardu MoProSoft a vychází z následujících zdrojů (jejich návaznost a produkty, pro které byly použity, zachycuje obrázek níže):",
                array(
                    "SW-CMM (Software Capability Maturity Model)",
                    "CMMI (Capability Maturity Model Integration)",
                    "ISO/IEC 12207",
                    "ISO/IEC 15288",
                    "ISO/IEC 15504",
                    "ISO/IEC 90003.",
                ),
                "Struktury normy:" => "Pro pokrytí potřeb celého spektra velmi malých podniků a projektů(VMP) jsou definovány čtyři profily :",
                array(
                    "vstupní (Entry): Je určen pro začínající VMP nebo VMP pracu-jící na malých projektech. Je odrazovým můstkem pro zavedení procesů z dalšího profilu,",
                    "základní (Basic): dokumenty pro základní profil byly schváleny v listopadu 2010. Byly publikovány začátkem roku 2011,",
                    "střední (Intermediate): dosud není specifikován,",
                    "pokročilý (Advanced): dosud není specifikován.",
                ),
                "Norma je rozdělena do pěti základních částí a skládá se z technických zpráv (TR) a mezinárodních standardizovaných profilů (ISP) – viz obrázek 2-3. Části 1, 2 a 3 jsou obecnými dokumenty aplikovatelnými pro všechny profily, části 4 a 5 jsou pak vytvářeny zvlášť pro jednotlivé profily. Dokumenty mají následující strukturu :",
                array(
                    "Část 1: Přehled (TR), určena pro VMP – Malé a střední podniky, posuzovatelé, producenti norem, prodejci nástrojů a metodologií,",
                    "Část 2: Framework a taxonomie (ISP) – Producenti norem, prodejci nástrojů a metodologií. Není určeno pro malé a střední podniky,",
                    "Část 3: Příručka pro posuzování procesů (TR) – Posuzovatelé,",
                    "Část 4: Specifikace profilů – Producenti norem, prodejci nástrojů a metodologií. Není určeno pro malé a střední podniky,",
                    "Část 5: Příručka pro řízení a implementaci – Malé a střední podniky:",
                    "Část 5-1: Příručka pro řízení a implementaci 1 (TR),",
                    "Část 5-n: Příručka pro řízení a implementaci n (TR).",
                ),
                "Nyní jsou schváleny následující dokumenty (části 1, 3 a 5-1 budou po zveřejnění ze strany ISO volně dostupné):",
                array(
                    "TR 29110-1 Overview: představuje koncepty nezbytné pro pochopení celé sady dokumentů normy, základní charakteristiky a požadavky VMP.",
                    "ISP 29110-2 Framework and Taxonomy: definuje prvky společné pro všechny profily a uvádí hierarchii profilů.",
                    "TR 29110-3 Profile Assessment Guide: popisuje postup pro posouzení zralosti procesů organizace a jejich úrovně, může být použit třetí stranou hodnotící organizaci nebo organizací samotnou pro samoposouzení procesů (Self-assessment).",
                    "ISP 29110-4.1 Specification – Basic VSE Profile: definuje složení procesů základního profilu, povinné a informativní odkazy na další normy a modely.",
                    "TR 29110-5.1 Management and Engineering Guide – Basic VSE Profile: poskytuje návod pro implementaci a použití základního profilu pro VMP. Je detailněji popsán v následující kapitole.",
                ),
                "Co to jsou Implementační balíčky?" => "„Implementační balíček je sada artefaktů vytvořených pro usnadnění implementace souboru praktik vybraného rámce“",
                "Balíčky jsou navrhovány pro jednotlivé aktivity procesů základního profilu tak, aby bylo možné zavedení jejich obsahu bez nutnosti implementace všech procesů daného profilu – zavedení implementačního balíčku Testování softwaru by tak mělo být proveditelné bez úprav dalších aktivit, do kterých tento balíček ne-zasahuje. Implementační balíček by měl obsahovat definici pokrytí normy ISO/IEC 29110 (přesné určení dokumentu normy a jeho částí, které jsou zpracovány v implementačním balíčku), přehled a popis jednotlivých procesů (aktivity, úkoly, vstupy, výstupy, role), šablony, příklady, kontrolní seznam (checklist), seznam nástrojů a odkazy na další standardy a modely (ISO/IEC 9001, ISO/IEC 12207, CMMI).",
                "V současné době jsou na webových stránkách projektu pro základní profil dostupné následující implementační balíčky:",
                array(
                    "Analýza požadavků systému (Requirement Analysis)",
                    "Architektura a detailní návrh systému (Architecture and Detailed Design)",
                    "Konstrukce a testování jednotek (Construction and Unit testing)",
                    "Testování softwaru (Software testing) – lokalizace balíčku do českého jazyka viz příloha 1",
                    "Dodání produktu (Product Delivery)",
                    "Správa verzí (Version Control)",
                    "Verifikace a validace (Verification and Validation)",
                    "Samohodnocení (Self-assessment).",
                ),
                "Průvodce: Základní profil VMP" => "Detailnější informace o základním profilu se dozvíte v práci Basic Profile (Holý Michal, Moravcová Jana, Vodička Petr)",
                "Management a Engineering guide" => "Tento dokument, který je z celé sady dokumentů pro VMP(Velmi Malé Podniky) nejdůležitější, poskytuje návod pro implementaci a použití procesů základního profilu. Popisuje souvislosti jednotlivých procesů, jejich účel, cíle, vstupy, výstupy a jednotlivé činnosti procesů a jejich úkoly. Uvádí rovněž detailní popis všech rolí, produktů a požadavky na nástroje nutné pro vykonání jednotlivých aktivit.",
                "Cílovou skupinou pro použití této technické zprávy jsou VMP, které jsou charakterizo-vány jako podniky, organizace, oddělení nebo projekty do 25 osob, věnující se vývoji softwaru7 [13, s. 1]. Pro použití této příručky pak musí VMP splňovat následující podmínky [13, s. 5]:",
                array(
                    "zdokumentovaná Specifikace prací (Statement of work),",
                    "před začátkem projektu byla ověřena jeho proveditelnost,",
                    "projekt má přiřazen vyškolený projektový tým, včetně projektového manažera,",
                    "jsou dostupné zdroje, služby a infrastruktura pro zahájení projektu.",
                ),
                "Základní profil pro VMP se skládá ze dvou hlavních procesů:",
                array(
                    "Řízení projektu,",
                    "Implementace softwaru",
                ),
                "Pilotní projekty" => "Za účelem ověření implementačních balíčků a získání informací k jejich zlepšení jsou realizovány pilotní projekty v různých prostředích. Výsledky projektů v odlišných podmín-kách by měly ukázat, zda jsou vytvořené artefakty aplikovatelné v celém spektru VMP. Jelikož jsou pilotní projekty koordinovány členy skupiny WG24 (z různých zemí světa), mo-hou být výsledky ověřeny i v různých kulturních prostředích. V současné době (prosinec 2010) probíhají pilotní projekty v Belgii, Francii, Irsku a Kanadě.",
                "Pro provedení pilotního projektu jsou dostupné podklady na stránkách skupiny. Konkrétně se jedná o tyto dokumenty:",
                array(
                    "implementační balíček Výběr a provedení pilotních projektů,",
                    "návod pro posuzování procesů (Assessment tool),",
                    "šablona plánu pilotního projektu,",
                    "šablona zprávy o pilotním projektu,",
                    "šablona dohody o důvěrnosti poskytovaných informací (confidentiality agree-ment).",
                ),
            ),
            "images" => array(
                "http://www.youtube.com/watch?v=viP7WLaFC8E",
                "iso-29110-zdroje.png",
            ),
            "specifications" => array(
                array(
                    "title" => "Stránka profesora Claude Y. Laporteho",
                    "href" => "http://profs.etsmtl.ca/claporte/English/VSE/index.html",
                ),
                array(
                    "title" => "ISO/IEC 29110 na wikipedii",
                    "href" => "http://cs.wikipedia.org/wiki/ISO_29110",
                ),
            ),
            "works" => array(
                array(
                    "title" => "Struktura normy",
                    "works" => array(
                        array(
                            "title" => "Vstupni profil – Příručka pro řízení a implementaci",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/ISO_TR_29110_Entry_Profile.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Základní profil – Příručka pro řízení a implementaci",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/ISO_TR_29110_Basic_Profile.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                    ),
                ),
                array(
                    "title" => "Implementační balíčky",
                    "works" => array(
                        array(
                            "title" => "Vstupni profil – Implementace SW",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Entry_Profile_DP_Software_Implementation_final.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Základní profil – Řízení projektu",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Basic_Profile-DP-Project_Management_cz.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Základní profil – Analýza požadavků na SW",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/4it421_dp-software-requirements-analysis-v1_2_cs_xlozp02_preklad_v18.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Základní profil – Konstrukce a jednotkové testování",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Konstrukce_a_Jednotkove_testovani.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Základní profil – Dodání produktu",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Deployment_Package-_Product_Delivery_CZ.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Základní profil – Správa verzí",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Dufek-Implementacni_balicek___Sprava_verzi___CZ_lokalizace_v1.4.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Základní profil – Verifikace a Validace",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/DP_V_V_CZ_v3.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                    ),
                ),
                array(
                    "title" => "Ostatní",
                    "works" => array(
                        array(
                            "title" => "Profily životního cyklu pro velmi malé podniky část 1",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Tomcova-ISOIEC_TR_29110_-_1_2011_Overview_CZ.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Profily životního cyklu pro velmi malé podniky část 2",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Preklad_Software_engineering___Lifecycle_profiles_for_VSEs__Part_3__Assessment_guide.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Zlepšování SW procesů ve velmi malých podnicích",
                            "href" => "http://nb.vse.cz/~buchalc/clanky/procesy.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                        array(
                            "title" => "Aplikace agilních metodik v rámci ISO/IEC 29110",
                            "href" => "http://spicenter.vse.cz/wp-content/uploads/Sindelarova-xsins02.pdf",
                            "author" => "",
                            "year" => "",
                            "desc" => "",
                        ),
                    ),
                ),
            ),
            "tools" => array(
            ),
            "similar" => array(
            ),
            "projects" => array(
            ),
        ),

    );

    /**
     * @return array
     */
    public function getMethodologies() {
        return $this->methodologies;
    }

    /**
     * @param string $name
     * @return array|null
     */
    public function getMethodology($name) {
        if (!isset($this->methodologies[$name]))
            return null;
        return $this->methodologies[$name];
    }

    /**
     * @param array $methodologies
     * @return $this
     */
    public function setMethodologies($methodologies) {
        $this->methodologies = $methodologies;
        return $this;
    }
}