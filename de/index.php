<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="Wir schaffen moderne produkte aus recycelten materialien. Wir sind der Branchenführer bei U-Liner-, Bootle-Neck- und Open-Top-Taschen.">
    <title>HEAD4TECH</title>

    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" async></script>
    <?php include 'sentMail.php';?>
</head>
<body>
    <!-- HEADER -->
    <header id="header-top">
        <div id="navbar">
            <!-- LOGO -->
            <a href="#">
                <img src="../img/logo-h4t-horizontal.svg" id="logo-top" alt="HEAD4TECH">
            </a>

            <!-- NAVIGATION -->
            <nav>
                <ul id="navigation-links" data-visible="false">
                    <li>
                        <a href="#production">
                            Production
                        </a>
                    </li>
                    <li>
                        <a href="#trading">
                            Trading
                        </a>
                    </li>
                    <li>
                        <a href="#was-wir-machen">
                            Was&nbsp;wir&nbsp;machen?
                        </a>
                    </li>
                    <li>
                        <a href="#die-8-schritte-methode-fur-die-perfekte-sackform">
                            Laboratorium
                        </a>
                    </li>
                    <li>
                        <a href="#aktuelles">
                            Aktuelles
                        </a>
                    </li>
                    <li>
                        <a href="#kontakt">Kontakt</a>
                    </li>
                    <li>
                        <ul id="lang-menu-mobile">
                            <li>
                                <a href="../index.php">Polski</a>
                            </li>
                            <li>
                                <a href="../en">English</a>
                            </li>
                            <li class="active-lang">
                                Deutsch
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- BUTTON HAMBURGER ON MOBILE -->
                <button id="nav-mobile" aria-controls="navigation-links" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="menu-line line1"></span>
                    <span class="menu-line line2"></span>
                    <span class="menu-line line3"></span>
                </button>
            </nav>
            <div id="lang-menu">
                <div id="selected-lang">Deutsch</div>
                <ul>
                    <li>
                        <a href="../index.html">Polski</a>
                    </li>
                    <li>
                        <a href="../en">English</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- MAIN SECTION -->
    <section id="main-section">
        <h1 id="main-headline">WIR SCHAFFEN MODERNE PRODUKTE<br> AUS RECYCELTEN MATERIALIEN</h1>
        <div id="button-down-container">
            <span>Lernen Sie unsere Arbeitsweise kennen</span>
            <a href="#menu"><img id="button-down-arrow" src="../img/button-down-arrow.svg" alt=""></a>
        </div>
    </section>

    <!-- CIRCULAR MENU SECTION -->
    <span id="menu" class="hidden-mark-for-navigation"></span>

    <div id="circular-menu-section">
        <nav id="circular-nav">
            <div id="sector-middle"></div>
            <ul id="circular-menu">
                <li class="button" id="sector-one">
                    <a class="button-link" href="#folienrecycling">
                        KENNEN DEN ABLAUF <span class="sr-only">FOLIENRECYCLING</span>
                    </a>
                </li>
                <li class="button" id="sector-two">
                    <a class="button-link" href="#ankauf-von-abfallen">
                        KENNEN DEN ABLAUF <span class="sr-only">ANKAUF VON ABFÄLLEN</span>
                    </a>
                </li>
                <li class="button" id="sector-three">
                    <a class="button-link" href="#">
                        KENNEN DEN ABLAUF <span class="sr-only">FOLIENLIEFERUNG</span>
                    </a>
                </li>
                <li class="button" id="sector-four">
                    <a class="button-link" href="#folienschweissen">
                        KENNEN DEN ABLAUF <span class="sr-only">FOLIENSCHWEISSEN</span>
                    </a>
                </li>
                <li class="button" id="sector-five">
                    <a class="button-link" href="#folienproduktion">
                        KENNEN DEN ABLAUF <span class="sr-only">FOLIENPRODUKTION</span>
                    </a>
                </li>
                <li id="sector-outside">

                    <!-- PATH FOR TEXT ON OUTSIDE OF CIRCLE -->
                    <svg viewBox="0 0 100 100" id="text-on-circle-outside-de">
                        <defs>
                            <path id="circle" d="M 50, 50
                                                 m -37, 0
                                                 a 37,37 0 1,1 74,0
                                                 a 37,37 0 1,1 -74,0"/>
                        </defs>
                        <text>
                            <textPath xlink:href="#circle">
                            FOLIENPRODUKTION &nbsp;&nbsp;&#8594;&nbsp;&nbsp; FOLIENSCHWEISSEN &nbsp;&nbsp;&nbsp;&#8594;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FOLIENLIEFERUNG &nbsp;&nbsp;&nbsp;&nbsp;&#8594;
                            &nbsp;ANKAUF VON ABFÄLLEN &nbsp;&#8594;&nbsp;&nbsp;&nbsp; FOLIENRECYCLING &nbsp;&nbsp;&#8594;
                            </textPath>
                        </text>
                    </svg>
                </li>
            </ul>
        </nav>

        <!-- PATH FOR EACH SECTOR -->
        <svg width="0" height="0">
            <clipPath id="sector-path" clipPathUnits="objectBoundingBox"> 
                <path d="M .5 .5
                         L .5 0
                         C .283 0 .091 .139 .024 .345
                         z"/>
            </clipPath>
        </svg>
    </div>

    <!-- PRODUCTION SECTION -->
    <span id="production" class="hidden-mark-for-navigation"></span>
    <span id="folienproduktion" class="hidden-mark-for-navigation"></span>

    <section id="production" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">FOLIENPRODUKTION</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/produkcja-folii.jpg" alt="Queens-Linie zum Blasen von Dreischichtfolie">
        <div class="section-container-for-text">
            <ol id="ol-production-container" class="ol-container">
                <li><h3 class="list-item-headline">WER SIND WIR?</h3>
                    <ul>
                        <li>
                            <b>Ein führendes Unternehmen in der Branche der U-Liner-, Bootle Neck- und Open-Top-Säcke.</b> Wir bieten auch Produkte für die Möbel-, Chemieund Lebensmittelindustrie an.
                        </li>
                        <li>
                            Bis heute schenken uns die meisten Hersteller von BIG-BAG-Verpackungen in Polen ihr Vertrauen.
                        </li>
                        <li>
                            Unsere Produkte sind in Deutschland, Schweden, Serbien, Frankreich und Litauen zu finden.
                        </li>
                        <li>
                            Bis Dezember 2022 haben wir 17 Millionen Säcke mit einem Gesamtgewicht von 8 Millionen Kilogramm verkauft.
                        </li>
                        <li>
                            Ununterbrochen seit mehreren Jahren sind unsere Produkte für die Kunden ein Synonym für Präzision und Qualität.
                        </li>
                    </ul>
                </li>
                <span id="was-wir-machen" class="hidden-mark-for-navigation"></span>
                <li><h3 class="list-item-headline">WAS WIR MACHEN?</h3>
                    <ul>
                        <li>
                            <b>Zuverlässige Verpackung mit komplizierten Namen, U-Liner, Bootle-Neck, Open Top.</b> Das sind nichts anderes als riesige Plastiksäcke, die sich perfekt als Barriere gegen Feuchtigkeit, Wasser, Sonne, Schmutz, Staub und alle Arten von Unrat eignen.
                        </li>
                        <li>
                            Unsere Produkte richten sich hauptsächlich (aber nicht ausschließlich) an Hersteller von flexiblen Behältern des Typs BIG-BAG aus dem englischen FIBC.
                        </li>
                        <div class="technical-image-container">
                            <div class="technical-image">
                                <span class="technical-data">Technische Zeichnung von U-Liner:</span>
                                <img src="../img/technical-u-liner.png" alt="Technische Zeichnung von U-Liner">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Technische Zeichnung von Bootle-Neck:</span>
                                <img src="../img/technical-bootle-neck.png" alt="Technische Zeichnung von Bootle-Neck">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Technische Zeichnung von Open Top:</span>
                                <img src="../img/technical-open-top.png" alt="Technische Zeichnung von Open Top">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Technische Zeichnung von Open Top + Seitenlaschen:</span>
                                <img src="../img/technical-open-top-zakladki-boczne.png" alt="Technische Zeichnung von Open Top + Seitenlaschen">
                            </div>
                        </div>
                    </ul>
                </li> 
                <li><h3 class="list-item-headline">WAS UNS AUSZEICHNET?</h3> 
                    <ul>
                        <li>
                            Wir bilden ein Team, das stolz ist auf jeden einzelnen Kunden, auf die gebrochenen Rekorde, auf die Kundenbesuche in unserem Unternehmen, auf alle laufenden und neuen Aufträge, auf jede noch so kleine Verringerung der Produktionsabfälle! Gemeinsam arbeiten wir, vom Bediener bis zum Geschäftsführer, daran, dass unsere Mission, <b>DER LIEFERANT DER ERSTEN WAHL ZU SEIN</b>, nicht nur ein Schlagwort ist, sondern eine Idee, die dazu beiträgt, den Kunden hochwertige Säcke-, Lager-, Inventar- und Technologielösungen für ihr Unternehmen zu bieten.
                        </li>    
                        <li>
                            Im Jahr 2014 waren wir die ersten in Polen, die eine ULiner-Folienschweißmaschine mit Impulsschweißen gekauft haben. Und eine Dreischichtlinie zur Herstellung von LDPE-Folie. <b>Dank diesem Gerät können wir bis zu 500.000.000 Säcke pro Monat für Sie herstellen. Mit diesem Ergebnis belegen wir den ersten Platz im Segment der Herstellung von Folieneinlagen in der BIG-BAG (FIBC)-Industrie.</b>
                        </li>
                        <li>
                            Wir nutzen die Prinzipien der Kreislaufwirtschaft. Wir haben die Zusammensetzung der Produkte so gestaltet, dass technologische Abfälle ein zweites Leben erhalten können. Zu diesem Zweck haben wir eine eigene Recyclinganlage für PE-Verpackungen eingerichtet. Wir sammeln auch unbenutzte und defekte Verpackungen, die bei unseren Kunden anfallen. In diesem Jahr haben wir ALS ERSTE IN POLEN einen Folieneinsatz aus 100% PPR und PCR-Recyclat mit einem Beschickungskamin vom Typ Uliner eingeführt. mit ähnlichen Parametern wie der Einsatz aus dem Original. 
                        </li>
                    </ul>
                </li>
            </ol>
            <h3 class="list-item-headline center-text">EIN MASSGESCHNEIDERTES PRODUKT</h3>
                <p>
                    Haben Sie Schwierigkeiten, einen ungewöhnlichen Sack zu finden? Oder müssen Sie einem Kunden ein Produktmuster im Eiltempo zukommen lassen? Wünschen Sie eine bestimmte Farbe oder Größe des Sackes? Plötzlich, an einem späten Freitagnachmittag, bestellt ein Auftragnehmer eine unvorhergesehene Charge mit kurzer Vorlaufzeit? Hat der alte Lieferant versagt? Suchen Sie einen neuen Lieferanten? Wer von uns kennt solche Probleme nicht? Nehmen Sie Kontakt mit uns auf, gemeinsam werden wir auch das schwierigste Problem lösen.
                </p>
            <h3 class="list-item-headline center-text">INTERNATIONALE ZUSAMMENARBEIT</h3>
                <p>             
                    Wir verfügen über umfangreiche Geschäftserfahrungen mit Unternehmen aus der Europäischen Union und aus Ländern außerhalb der Gemeinschaft. Dank unserer leistungsfähigen und qualifizierten Mitarbeiter sind wir in der Lage, unsere Produkte auf die individuellen Bedürfnisse abzustimmen.
                </p>
        </div>

        <!-- FORM FOR PRODUCTION -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Nehmen Sie Kontakt auf</span>
            <input type="text" name="name-production" class="form-name" placeholder="Name" autocomplete="on">
            <input type="email" name="email-production" class="form-email" placeholder="E-Mail-Addresse*" autocomplete="on" required>
            <input type="tel" name="tel-production" class="form-phone" placeholder="Telefonnummer" autocomplete="on">
            <textarea name="message-production" class="form-message" placeholder="Eine Nachricht schreiben*" required></textarea>
            <button type="submit" name="submit-production" class="form-submit">Senden</button>
        </form>
    </section>

    <!-- WELDING SECTION -->
    <span id="folienschweissen" class="hidden-mark-for-navigation"></span>

    <section id="welding" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">FOLIENSCHWEISSEN</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/zgrzewanie-folii.jpg" alt="Eine Linie zum Schweißen von Folie in der Größe des Folieneinsatzes U-Liner, Bootle Neck, Open Top">
        <div class="section-container-for-text">
            <p>
                <b>Die für BIG BAGs geeigneten Kunststoffeinsätze sind wiederverwendbare Produkte.</b> BIG BAG-Einsätze werden häufig in der Landwirtschaft, der Lebensmittelindustrie und im Transportwesen verwendet. Einsätze aus Folie werden häufig für die Lagerung von Düngemitteln, staubigen Stoffen sowie für die Silierung von Lebensmitteln verwendet. Ein Einsatz im BIG BAG-Behälter bietet zusätzlichen Schutz für gelagerte oder transportierte Güter. Er schützt die Ware vor Feuchtigkeit und dient gleichzeitig als Nahtabdichtung. 
            </p>
            <ol id="ol-welding-container" class="ol-container">
                <li><h3 class="list-item-headline">U-liner</h3>
                    <ul>
                        <li>
                            <b>U-Liner-Folieneinlagen für Big-Bags</b> sind die ideale Lösung für Hersteller dieser Art von flexiblen Behältern. Dank des präzisen "U"-Schnitts erhalten wir die überschüssige Folienhülse an den Seiten des Trichters, die zum sicheren Einnähen des Big-Bags notwendig ist.
                        </li>
                        <li>
                            Erhältlich mit und ohne schräge Nähte und Belüftungsperforationen.
                        </li>
                        <li>
                            <span class="technical-data">Technische Daten:</span>
                            <ul>
                                <li>Dicke der Folie: 30-120 Mikron</li>
                                <li>Höhe: maximal 3500 mm</li>
                                <li>Breite: maximal 1500 mm</li>
                                <li>Breite des Trichters: maximal 1100 mm</li>
                                <li>Höhe des Trichters: maximal 700 mm</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Bitte kontaktieren</a> Sie uns für weitere Informationen. Nach eingehender Beratung führen wir auch Nicht-Standard-Aufträge aus, die eine Aufrüstung der Maschinen erfordern.
                        </li>
                    </ul>
                </li>
                <li><h3 class="list-item-headline">Bottle Bag</h3>
                    <ul>
                        <li>
                            <b>Bottle Bag Big-Bag-Folieneinsätze</b> sind die ideale Lösung für Hersteller dieser Art von flexiblen Behältern. Ein auf diese Weise hergestellter Sack hat nur einen Einfülltrichter. Eignet sich gut als Einsatz, wo zusätzliche Befestigungen überflüssig sind.
                        </li>
                        <li>
                            Erhältlich mit und ohne schräge Nähte und Belüftungsperforationen.
                        </li>
                        <li>
                            <span class="technical-data">Technische Daten:</span>
                            <ul>
                                <li>Dicke der Folie: 30-120 Mikron</li>
                                <li>Höhe: maximal 3500 mm</li>
                                <li>Breite: maximal 1500 mm</li>
                                <li>Breite des Trichters: maximal 1100 mm</li>
                                <li>Höhe des Trichters: maximal 700 mm</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Bitte kontaktieren</a> Sie uns für weitere Informationen. Nach eingehender Beratung führen wir auch Nicht-Standard-Aufträge aus, die eine Aufrüstung der Maschinen erfordern.
                        </li>
                    </ul>
                </li>
                <li><h3 class="list-item-headline">Open Top</h3>
                    <ul>
                        <li>
                            <b>Kunststoffeinsätze für Big-Bags vom Typ OPEN TOP</b> sind die ideale Lösung für Hersteller dieser Art von flexiblen Behältern. Der Sack hat eine starke und präzise Bodennaht. Schützt vor Feuchtigkeit. Es kann auch als schützende "Haube" verwendet werden.
                        </li>
                        <li>
                            Wir stellen diesen Sacktyp auch aus Folie mit Überlappungen her - dadurch wird die maximale Breite auf ein Maximum erhöht. 2900 mm.
                        </li>
                        <li>
                            Technische Daten:
                            <ul>
                                <li>Dicke der Folie: 30-120 Mikron</li>
                                <li>Höhe: maximal 3500 mm</li>
                                <li>Breite: maximal 1500 mm (ohne Überlappungen in der Mitte der Hülse)</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Bitte kontaktieren</a> Sie uns für weitere Informationen. Nach eingehender Beratung führen wir auch Nicht-Standard-Aufträge aus, die eine Aufrüstung der Maschinen erfordern.
                        </li>
                    </ul>
                </li>
            </ol>
            <span id="die-8-schritte-methode-fur-die-perfekte-sackform" class="hidden-mark-for-navigation"></span>
            <div id="cutoff-text" data-visible="false">
                <h3 class="list-item-headline center-text">DIE 8-SCHRITTE-METHODE FÜR DIE PERFEKTE SACKFORM</h3>
                <p>
                    Die Herstellung eines Sacks, der auch den härtesten Tests standhält, erfordert eine Kontrolle in jeder Phase der Produktion. Wir haben ein System entwickelt, das uns hilft, Produktionsfehler zu vermeiden. Wir laden Sie zum Reisen ein.
                </p>
                <ol id="ol-welding-container-steps" class="list-expanded">
                    <li><h4 class="list-item-headline">SCHRITT EINS - HERSTELLUNG DER HÜLSE</h4>
                        <ul>
                            <li>dreischichtige Folienblasformanlage</li>
                            <li>automatisches Dickenkontrollsystem</li>
                            <li>gravimetrisches Dosiersystem für Granulat</li>
                            <li>Farbbandsteuerung</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">SCHRITT ZWEI - DICKENPRÜFUNG</h4>
                        <ul>
                            <li>wir messen die durchschnittliche Schichtdicke unter Laborbedingungen an jeder Rolle</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">SCHRITT DREI - LÄNGS- UND QUERDEHNUNGSPRÜFUNG</h4>
                        <ul>
                            <li>jede hergestellte Rolle wird auf Zusammensetzung und Dehnbarkeit geprüft</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">SCHRITT VIER - AUFPRALLPRÜFUNG</h4>
                        <ul>
                            <li>auf dem DART DROP Testgerät testen wir, wie viel Kraft unsere Folie bei einem Durchstoßtest aushalten kann</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">SCHRITT FÜNF - VERSCHLIESSEN DER SÄCKE</h4>
                        <ul>
                            <li>Sackproduktion auf einer Impulsschweißmaschine mit einer Kapazität von bis zu 20.000 U-Liner- und Bootle Neck-Säcken pro Tag</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">SCHRITT SECHS - FESTIGKEIT DER SCHWEISSNAHT</h4>
                        <ul>
                            <li>Prüfung auf einer von unseren Spezialisten entwickelten Schweißnahtprüfmaschine</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">SCHRITT SIEBEN - QUALITÄTSKONTROLLE</h4>
                        <ul>
                            <li>jede unserer Säcke wird von unseren Mitarbeitern der Qualitätskontrolle geprüft</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">SCHRITT ACHT - GEEIGNETE VERPACKUNG</h4>
                        <ul>
                            <li>unsere Säcke werden in speziell entworfenen Kartonboxen transportiert, wodurch Beschädigungen, Verschmutzungen, Abrieb und Nässe vermieden werden</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <!-- <span class="triangle-to-expand-list">&#x25BC;</span> -->
            <!-- <input class="expand-button" type="checkbox" aria-hidden="true"> -->
            <button id="expand-button" class="expand-button-de" href="#die-8-schritte-methode-fur-die-perfekte-sackform"></button>
        </div>

        <!-- FORM FOR WELDING -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Nehmen Sie Kontakt auf</span>
            <input type="text" name="name-welding" class="form-name" placeholder="Name" autocomplete="on">
            <input type="email" name="email-welding" class="form-email" placeholder="E-Mail-Addresse*" autocomplete="on" required>
            <input type="tel" name="tel-welding" class="form-phone" placeholder="Telefonnummer" autocomplete="on">
            <textarea name="message-welding" class="form-message" placeholder="Eine Nachricht schreiben*" required></textarea>
            <button type="submit" name="submit-welding" class="form-submit">Senden</button>
        </form>
    </section>

    <!-- RECYCLING SECTION -->
    <span id="folienrecycling" class="hidden-mark-for-navigation"></span>

    <section id="recycling" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">FOLIENRECYCLING</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/recykling-folii.jpg" alt="">
        <div class="section-container-for-text">
            <p>
                Beim Kunststoffrecycling geht es um die ordnungsgemäße Aufbereitung des Rohmaterials für die Wiederverwendung. Bei diesem Verfahren werden verschiedene Kunststoffarten getrennt, gereinigt und so aufbereitet, dass sie für die Wiederverwendung geeignet sind. Die auf diese Weise hergestellten Halbfertigprodukte - Regranulate - werden wiederverwendet. Der Hauptvorteil des Einsatzes von hochwertigen Regranulaten aus Kunststoffabfällen aus der Nachproduktion liegt darin, dass sie ein sehr hohes Potenzial bieten, um daraus neue, fertige Produkte herzustellen, deren Qualität den hohen Anforderungen der Kunden entspricht.
            </p>
            <p>
                Im Rahmen unserer Aktivitäten sind wir an Abfällen aus der Nachproduktion von PE, PP, PET und technischen Kunststoffen ABS, PC, PS interessiert. Die Erfahrung, das qualifizierte Personal und die Qualitätskontrolle ermöglichen es uns, Regranulate mit Qualitätsparametern zu erhalten, die eine Verwendung bei der Herstellung neuer Produkte ermöglichen.
            </p>
            <p>
                Interessieren Sie sich für den Kauf von Nachproduktions-Regranulaten, Mahlgütern? Produzieren Sie Folien, Werkzeuge, Kisten, Fässer usw.? Fühlen Sie sich frei uns zu kontaktieren.
            </p>
        </div>

        <!-- FORM FOR RECYCLING -->
         <form action="index.php" method="post">
             <span class="contact-form-headline">Nehmen Sie Kontakt auf</span>
             <input type="text" name="name-recycling" class="form-name" placeholder="Name" autocomplete="on">
             <input type="email" name="email-recycling" class="form-email" placeholder="E-Mail-Addresse*" autocomplete="on" required>
             <input type="tel" name="tel-recycling" class="form-phone" placeholder="Telefonnummer" autocomplete="on">
             <textarea name="message-recycling" class="form-message" placeholder="Eine Nachricht schreiben*" required></textarea>
             <button type="submit" name="submit-recycling" class="form-submit">Senden</button>
         </form>
    </section>

    <!-- BUY WASTE SECTION -->
    <span id="trading" class="hidden-mark-for-navigation"></span>
    <span id="ankauf-von-abfallen" class="hidden-mark-for-navigation"></span>

    <section id="buy-waste" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-trading-horizontal.svg" alt="HEAD4TECH Trading">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">ANKAUF VON ABFÄLLEN</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/zakup-odpadu.jpg" alt="">
        <div class="section-container-for-text">
            <p>
                Wir beliefern Produktionsbetriebe, in denen wir Kunststoffe sammeln und verwalten, die zunächst recycelt und dann in der Technologie von Fertigprodukten wie Säcken, Einlagen, Folienhüllen usw. verwendet werden. 
            </p>
            <p>
                Wir sind an Abfällen in der Postproduktion interessiert: <b>LDPE, LLDPE, HDPE, PP, BOPP, OPP.</b>
            </p>
        </div>

        <!-- FORM FOR BUY WASTE -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Nehmen Sie Kontakt auf</span>
            <input type="text" name="name-buy-waste" class="form-name" placeholder="Name" autocomplete="on">
            <input type="email" name="email-buy-waste" class="form-email" placeholder="E-Mail-Addresse*" autocomplete="on" required>
            <input type="tel" name="tel-buy-waste" class="form-phone" placeholder="Telefonnummer" autocomplete="on">
            <textarea name="message-buy-waste" class="form-message" placeholder="Eine Nachricht schreiben*" required></textarea>
            <button type="submit" name="submit-buy-waste" class="form-submit">Senden</button>
        </form>
    </section>

        <!-- NEWS SECTION -->
    <span id="aktuelles" class="hidden-mark-for-navigation"></span>

    <section id="news" class="section-container">
        <header class="headline-clear">
            <div class="line line-both"></div>
            <h2 class="headline">AKTUELLES</h2>
            <div class="line line-both"></div>
        </header>
        <p>
            Die neuesten Nachrichten in Kürze.
        </p>
        <!-- START ARTICLES 
        <article class="article-container">
            <time datetime="2022-12-03 19:00">3.12.2022</time>
            <h4>Tytuł artykułu</h4>
            <div class="article-content">
                <p class="cutoff-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
            </div>
            <span class="expand-article-link">Rozwiń &#9660;</span>
        </article>
         END ARTICLES -->
    </section>


    <!-- CONTACT SECTION -->
    <span id="kontakt" class="hidden-mark-for-navigation"></span>

    <section id="contact">
        <header class="headline-clear">
            <div class="line line-both"></div>
            <h2 class="headline">KONTAKT</h2>
            <div class="line line-both"></div>
        </header>
        <div class="contact-data">
            <div>
                <span class="contact-form-headline">Produktion:</span>
                <p class="name">Rafał Dąbek</p>
                <p><a href="tel:+48794010386">+48 794 010 386</a></p>
                <p><a href="mailto:produkcja@h4t.com.pl">produkcja@h4t.com.pl</a></p>
            </div>
            <div>
                <span class="contact-form-headline">Einkaufsabteilung:</span>
                <p class="name">Krzysztof Rudziński</p>
                <p><a href="tel:+48664926413">+48 664 926 413</a></p>
                <p><a href="mailto:biuro@h4t.com.pl">biuro@h4t.com.pl</a></p>
                <p class="name pt">Maciej Kłos</p>
                <p><a href="tel:+48664926413">+48 503 478 223</a></p>
                <p><a href="mailto:biuro@h4t.com.pl">biuro@h4t.com.pl</a></p>
            </div>
            <div>
                <span class="contact-form-headline">Buchhaltung:</span>
                <p class="name">Monika Sucholewska</p>
                <p><a href="tel:+48530861292">+48 530 861 292</a></p>
                <p><a href="mailto:ksiegowosc@h4t.com.pl">ksiegowosc@h4t.com.pl</a></p>
            </div>
            <div class="line">
            </div>
            <div>
                <span class="contact-form-headline">Werk Nr. 1:</span>
                <p>Stara Dębowa Wola 25A</p>
                <p>27-400 Stara Dębowa Wola</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.2338691346063!2d21.42174468209811!3d50.9949745441264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47180bb6556a4495%3A0x9b2058c93ccfeacf!2sStara%20D%C4%99bowa%20Wola%2025A%2C%2027-400%20Stara%20D%C4%99bowa%20Wola!5e0!3m2!1spl!2spl!4v1669134645164!5m2!1spl!2spl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="google-map"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Werk Nr. 2:</span>
                <p>Batalionów Chłopskich 71</p>
                <p>25-671 Kielce</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.573996609573!2d20.594757015955576!3d50.89459446314277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4718286fc3074b59%3A0xa737f48705394d61!2sBatalion%C3%B3w%20Ch%C5%82opskich%2071%2C%2025-671%20Kielce!5e0!3m2!1spl!2spl!4v1669134720338!5m2!1spl!2spl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="google-map"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Handelsbüro Pommern:</span>
                <p>ul. Kalinowa 29</p>
                <p>83-031 Kleszczewko</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div id="footer-container">
            <div>
                <span>
                    Copyright <span class="copy-symbol">&copy;</span> <span id="current-year"></span> HEAD4TECH Sp. z o. o. 
                </span>
            </div>
            <div>
                <span>
                    NIP: 6040228072
                </span>
                <span>
                    KRS: 0000943944
                </span>
            </div>
        </div> 
    </footer>

    <script src="../js/propeller.min.js" async></script>

</body>
</html>