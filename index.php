<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="Tworzymy nowoczesne produkty z materiałów pochodzących z recyklingu. Jesteśmy liderem w branży worków U-Liner, Bootle Neck, Open Top.">
    <title>HEAD4TECH</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" async></script>

    <link rel="alternate" hreflang="x-deafult" href="http://www.h4t.com.pl">
    <link rel="alternate" hreflang="pl" href="http://www.h4t.com.pl">
    <link rel="alternate" hreflang="en" href="http://www.h4t.com.pl/en">
    <link rel="alternate" hreflang="de" href="http://www.h4t.com.pl/de">
    <?php include 'sentMail.php';?>
</head>
<body>
    <!-- HEADER -->
    <header id="header-top">
        <div id="navbar">
            <!-- LOGO -->
            <a href="#">
                <img src="img/logo-h4t-horizontal.svg" id="logo-top" alt="HEAD4TECH">
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
                        <a href="#co-robimy">
                            Co robimy
                        </a>
                    </li>
                    <li>
                        <a href="#metoda-8-krokow-do-uzyskania-perfekcyjnego-worka">
                            Laboratorium
                        </a>
                    </li>
                    <li>
                        <a href="#aktualnosci">
                            Aktualności
                        </a>
                    </li>
                    <li>
                        <a href="#kontakt">Kontakt</a>
                    </li>
                    <li>
                        <ul id="lang-menu-mobile">
                            <li class="active-lang">
                                Polski
                            </li>
                            <li>
                                <a href="./en">English</a>
                            </li>
                            <li>
                                <a href="./de">Deutsch</a>
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
                <div id="selected-lang">Polski</div>
                <ul>
                    <li>
                        <a href="./en">English</a>
                    </li>
                    <li>
                        <a href="./de">Deutsch</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- MAIN SECTION -->
    <section id="main-section">
        <h1 id="main-headline">Tworzymy nowoczesne produkty<br> z materiałów pochodzących z&nbsp;recyklingu</h1>
        <div id="button-down-container">
            <span>Poznaj nasz sposób działania</span>
            <a href="#menu"><img id="button-down-arrow" src="img/button-down-arrow.svg" alt=""></a>
        </div>
    </section>

    <!-- CIRCULAR MENU SECTION -->
    <span id="menu" class="hidden-mark-for-navigation"></span>

    <div id="circular-menu-section">
        <nav id="circular-nav">
            <div id="sector-middle"></div>
            <ul id="circular-menu">
                <li class="button" id="sector-one">
                    <a class="button-link" href="#recykling-folii">
                        POZNAJ PROCES <span class="sr-only">RECYKLINGU FOLII</span>
                    </a>
                </li>
                <li class="button" id="sector-two">
                    <a class="button-link" href="#zakup-odpadu">
                        POZNAJ PROCES <span class="sr-only">ZAKUPU ODPADU</span>
                    </a>
                </li>
                <li class="button" id="sector-three">
                    <a class="button-link" href="#">
                        POZNAJ PROCES <span class="sr-only">DOSTAWY FOLII</span>
                    </a>
                </li>
                <li class="button" id="sector-four">
                    <a class="button-link" href="#zgrzewanie-folii">
                        POZNAJ PROCES <span class="sr-only">ZGRZEWANIA FOLII</span>
                    </a>
                </li>
                <li class="button" id="sector-five">
                    <a class="button-link" href="#produkcja-folii">
                        POZNAJ PROCES <span class="sr-only">PRODUKCJI FOLII</span>
                    </a>
                </li>
                <li id="sector-outside">

                    <!-- PATH FOR TEXT ON OUTSIDE OF CIRCLE -->
                    <svg viewBox="0 0 100 100" id="text-on-circle-outside">
                        <defs>
                            <path id="circle" d="M 50, 50
                                                 m -37, 0
                                                 a 37,37 0 1,1 74,0
                                                 a 37,37 0 1,1 -74,0"/>
                        </defs>
                        <text>
                            <textPath xlink:href="#circle">
                            PRODUKCJA FOLII &nbsp;&nbsp;&#8594;&nbsp;&nbsp; ZGRZEWANIE FOLII &nbsp;&nbsp;&#8594;&nbsp;&nbsp;&nbsp;&nbsp; DOSTAWA FOLII &nbsp;&nbsp;&nbsp;&nbsp;&#8594;
                            &nbsp;&nbsp;&nbsp;&nbsp; ZAKUP ODPADU &nbsp;&nbsp;&nbsp;&nbsp;&#8594;&nbsp;&nbsp;&nbsp; RECYKLING FOLII &nbsp;&nbsp;&#8594;
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
    <span id="produkcja-folii" class="hidden-mark-for-navigation"></span>

    <section id="production" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">PRODUKCJA FOLII</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="img/produkcja-folii.jpg" alt="Linia Queens do rozdmuchu folii trzy-warstwowej">
        <div class="section-container-for-text">
            <ol id="ol-production-container" class="ol-container">
                <li><h3 class="list-item-headline">KIM JESTEŚMY</h3>
                    <ul>
                        <li>
                            <b>Liderem w branży worków U-Liner, Bootle Neck, Open Top.</b> W swojej ofercie mamy również produkty opakowaniowe dla branży meblarskiej, chemicznej, spożywczej.
                        </li>
                        <li>
                            Do tej pory zaufało nam większość producentów opakowań BIG-BAG w Polsce.
                        </li>
                        <li>
                            Nasze produkty można spotkać w Polsce, Niemczech, Szwecji, Serbii, Francji, Litwie.
                        </li>
                        <li>
                            Do grudnia 2022 roku sprzedaliśmy 17 mln worków o łącznej wadze 8 mln kilogramów.
                        </li>
                        <li>
                            Nieprzerwanie od kilku lat dla odbiorców nasze produkty są synonimem precyzji i jakości.
                        </li>
                    </ul>
                </li>
                <span id="co-robimy" class="hidden-mark-for-navigation"></span>
                <li><h3 class="list-item-headline">CO ROBIMY</h3>
                    <ul>
                        <li>
                            <b>Niezawodne opakowania o skomplikowanych nazwach, U-Liner, Bootle-Neck, Open Top.</b> To nic innego jak ogromne worki foliowe doskonałe jako bariera przed wilgocią, wodą, słońcem, brudem, pyłem i różnego rodzaju zanieczyszczeniami.
                        </li>
                        <li>
                            Nasze produkty skierowane są głównie (ale nie tylko) do producentów kontenerów elastycznych typu BIG-BAG z angielskiego FIBC.
                        </li>
                        <div class="technical-image-container">
                            <div class="technical-image">
                                <span class="technical-data">Rysunek techniczny U-Liner:</span>
                                <img src="img/technical-u-liner.png" alt="Rysunek techniczny U-Liner">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Rysunek techniczny Bootle-Neck:</span>
                                <img src="img/technical-bootle-neck.png" alt="Rysunek techniczny Bootle-Neck">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Rysunek techniczny Open Top:</span>
                                <img src="img/technical-open-top.png" alt="Rysunek techniczny Open Top">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Rysunek techniczny Open Top + zakładki boczne:</span>
                                <img src="img/technical-open-top-zakladki-boczne.png" alt="Rysunek techniczny Open Top z zakładkami bocznymi">
                            </div>
                        </div>
                    </ul>
                </li> 
                <li><h3 class="list-item-headline">CO NAS WYRÓŻNIA</h3> 
                    <ul>
                        <li>
                            Tworzymy team, w którym jesteśmy dumni z każdego klienta, z pobitych rekordów, z wizyt klientów w naszej firmie, ze wszystkich stałych i nowych zleceń, z nawet najmniejszej redukcji odpadu produkcyjnego! Wspólnie, począwszy od Pomocnika Operatora skończywszy na Dyrektorze Generalnym, pracujemy, by nasza misja <b>STANIA SIĘ DOSTAWCĄ PIERWSZEGO WYBORU</b>, była nie tylko hasłem, ale ideą, która pomaga dostarczać klientom dobrej jakości worki, rozwiązania magazynowe, ewidencyjne i technologiczne z zakresu prowadzonej działalności.
                        </li>    
                        <li>
                            W 2014 roku pierwsi w Polsce zakupiliśmy zgrzewarkę foliową ULiner z zastosowaniem zgrzewania impulsowego. Oraz trójwarstwową linię do produkcji folii LDPE. <b>To dzięki temu urządzeniu możemy zrobić dla Was do 500.000 tys. worków miesięcznie. Wynik ten plasuje nas na pierwszym miejscu w segmencie produkcji wkładów foliowych branży BIG-BAG (FIBC).</b>
                        </li>
                        <li>
                            Wykorzystujemy zasady Gospodarki Obiegu Zamkniętego. Skład wyrobów zaprojektowaliśmy w taki sposób, by odpady technologiczne mogły zyskać drugie życie. W tym celu uruchomiliśmy własną linię do recyklingu opakowań PE. Prowadzimy również odbiór niezużytych i wadliwych opakowań powstałych u naszych klientów. W tym roku wprowadziliśmy JAKO PIERWSI W POLSCE wykonaną w 100% z recyklatu PPR oraz PCR wkładkę foliową z kominem zasypowym typu Uliner. o parametrach zbliżonych do wkładki wykonanej z oryginału. 
                        </li>
                    </ul>
                </li>
            </ol>
            <h3 class="list-item-headline center-text">PRODUKT SKROJONY NA MIARĘ</h3>
                <p>
                    Masz problem z realizacją nietypowego worka? A może w ekspresowym tempie musisz dostarczyć próbę produktu do klienta? Chcesz specyficzny kolor lub rozmiar worka? Nagle w piątek późnym popołudniem kontrahent zamówił nieprzewidzianą partię z krótkim terminem realizacji? Stary dostawca zawiódł? Poszukujesz nowego dostawcy? Któż z nas nie boryka się z takimi problemami? Skontaktuj się z nami, wspólnie rozwiążemy nawet najtrudniejszy problem.
                </p>
            <h3 class="list-item-headline center-text">WSPÓŁPRACA MIĘDZYNARODOWA</h3>
                <p>             
                    Mamy bogate doświadczenie biznesowe z firmami z Unii Europejskiej, jak i państw poza wspólnotą. Dzięki sprawnej i wykwalifikowanej kadrze jesteśmy w stanie dopasować nasze produkty do indywidualnych potrzeb.
                </p>
        </div>

        <!-- FORM FOR PRODUCTION -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Skontaktuj się</span>
            <input type="text" name="name-production" class="form-name" placeholder="Imię" autocomplete="on">
            <input type="email" name="email-production" class="form-email" placeholder="Adres mailowy*" autocomplete="on" required>
            <input type="tel" name="tel-production" class="form-phone" placeholder="Nr telefonu" autocomplete="on">
            <textarea name="message-production" class="form-message" placeholder="Treść*" required></textarea>
            <button type="submit" name="submit-production" class="form-submit">Wyślij</button>
        </form>
    </section>

    <!-- WELDING SECTION -->
    <span id="zgrzewanie-folii" class="hidden-mark-for-navigation"></span>

    <section id="welding" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">ZGRZEWANIE FOLII</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="img/zgrzewanie-folii.jpg" alt="Linia do zgrzewania folii do wymiaru wkładki foliowej U-Liner, Bootle Neck, Open Top">
        <div class="section-container-for-text">
            <p>
                <b>Wkłady foliowe przystosowane do wielkogabarytowych worków BIG BAG to produkty wielokrotnego użytku.</b> Wkłady do BIG BAG-ów mają szerokie zastosowanie w przemyśle rolniczym, spożywczym oraz transportowym. Wkłady wykonane z folii często używane są do magazynowania nawozów, substancji pylistych, jak również kiszenia produktów spożywczych. Wkład umieszczony w kontenerze BIG BAG stanowi dodatkową ochronę dla przechowywanego czy transportowanego towaru. Chroni towar przed wilgocią, jak również pełni funkcję uszczelnienia szwów. 
            </p>
            <ol id="ol-welding-container" class="ol-container">
                <li><h3 class="list-item-headline">U-liner</h3>
                    <ul>
                        <li>
                            <b>Wkłady foliowe do Big-Bag typu U-liner</b> to idealne rozwiązanie dla producentów tego typu kontenerów elastycznych. Dzięki precyzyjnemu wycięciu „U” uzyskujemy po bokach leja zasypowego nadmiar rękawa foliowego niezbędny do pewnego wszycia w big-bag.
                        </li>
                        <li>
                            Dostępny w wersji ze zgrzewami skośnymi i perforacjami odpowietrzającymi, jak i bez.
                        </li>
                        <li>
                            <span class="technical-data">Dane techniczne:</span>
                            <ul>
                                <li>grubość folii: 30-120 mikronów</li>
                                <li>wysokość: max. 3500 mm</li>
                                <li>szerokość: max. 1500 mm</li>
                                <li>szerokość leja: max. 1100 mm</li>
                                <li>wysokość leja: max. 700 mm</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Prosimy o kontakt</a> w celu uzyskania większej ilości informacji. Po szczegółowych konsultacjach wykonujemy również nietypowe zamówienia, wymagające modernizacji maszyny.
                        </li>
                    </ul>
                </li>
                <li><h3 class="list-item-headline">Bottle Bag</h3>
                    <ul>
                        <li>
                            <b>Wkłady foliowe do Big-Bag typu Bottle Bag</b> to idealne rozwiązanie dla producentów tego typu kontenerów elastycznych. Tak wykonany worek posiada jedynie lej zasypowy. Sprawdza się jako wkład tam, gdzie niepotrzebne są dodatkowe mocowania.
                        </li>
                        <li>
                            Dostępny w wersji ze zgrzewami skośnymi i perforacjami odpowietrzającymi, jak i bez.
                        </li>
                        <li>
                            <span class="technical-data">Dane techniczne:</span>
                            <ul>
                                <li>grubość folii: 30-120 mikronów</li>
                                <li>wysokość: max. 3500 mm</li>
                                <li>szerokość: max. 1500 mm</li>
                                <li>szerokość leja: max. 1100 mm</li>
                                <li>wysokość leja: max. 700 mm</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Prosimy o kontakt</a> w celu uzyskania większej ilości informacji. Po szczegółowych konsultacjach wykonujemy również nietypowe zamówienia, wymagające modernizacji maszyny.
                        </li>
                    </ul>
                </li>
                <li><h3 class="list-item-headline">Open Top</h3>
                    <ul>
                        <li>
                            <b>Wkłady foliowe do Big-Bag typu OPEN TOP</b> to idealne rozwiązanie dla producentów tego typu kontenerów elastycznych. Wykonany worek posiada mocny i precyzyjny zgrzew denny. Chroni przed wilgocią. Może być również stosowany jako „kaptur” ochronny.
                        </li>
                        <li>
                            Tego typu worek produkujemy również z foli z zakładkami — dzięki temu szerokość maksymalna wzrasta do max. 2900 mm.
                        </li>
                        <li>
                            Dane techniczne:
                            <ul>
                                <li>grubość folii: 30-120 mikronów</li>
                                <li>wysokość: max. 3500 mm</li>
                                <li>szerokość: max. 1500 mm (bez zakładek w środku rękawa)</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Prosimy o kontakt</a> w celu uzyskania większej ilości informacji. Po szczegółowych konsultacjach wykonujemy również nietypowe zamówienia, wymagające modernizacji maszyny.
                        </li>
                    </ul>
                </li>
            </ol>
            <span id="metoda-8-krokow-do-uzyskania-perfekcyjnego-worka" class="hidden-mark-for-navigation"></span>
            <div id="cutoff-text" data-visible="false">
                <h3 class="list-item-headline center-text">Metoda 8 kroków do uzyskania perfekcyjnego worka</h3>
                <p>
                    Wyprodukowanie worka, który sprosta nawet najtrudniejszym testom, wymaga kontroli na każdym z etapów produkcji. Opracowaliśmy schemat, który pomaga uniknąć nam błędów produkcyjnych. Zapraszamy do podróży.
                </p>
                <ol id="ol-welding-container-steps" class="list-expanded">
                    <li><h4 class="list-item-headline">Krok pierwszy — produkcja rękawa</h4>
                        <ul>
                            <li>trójwarstwowa linia do rozdmuchu folii</li>
                            <li>automatyczny system kontroli grubości</li>
                            <li>grawimetryczny system dozowania granulatów</li>
                            <li>kontrola prowadzenia wstęgi</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">Krok drugi — badanie grubości</h4>
                        <ul>
                            <li>na każdej rolce przeprowadzamy pomiar średniej grubości folii w warunkach laboratoryjnych</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">Krok trzeci — badanie na wydłużenie wzdłużne i poprzeczne</h4>
                        <ul>
                            <li>każdą wyprodukowaną rolkę sprawdzamy pod względem składu oraz pod kątem rozciągliwości</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">Krok czwarty — badanie udarności</h4>
                        <ul>
                            <li>na urządzeniu do sprawdzania DART DROP badamy jaką siłę wytrzyma nasza folia w teście symulującym przebicie</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">Krok piąty — zgrzewanie worków</h4>
                        <ul>
                            <li>produkcja worka na impulsowej zgrzewarce, z wydajnością do 20 tys. worków U-liner oraz Bootle Neck dziennie</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">Krok szósty — wytrzymałość zgrzewów</h4>
                        <ul>
                            <li>test na zaprojektowanej przez naszych specjalistów maszynie do kontroli wytrzymałości zgrzewu</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">Krok siódmy — kontrola jakości</h4>
                        <ul>
                            <li>każdy nasz worek jest przeglądany przez pracowników Działu Kontroli Jakości</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">Krok ósmy — odpowiednie opakowanie</h4>
                        <ul>
                            <li>nasze worki transportowane są w specjalnie zaprojektowanych kartonowych BOX-ach, dzięki czemu eliminujemy ich uszkodzenie, zabrudzenie, otarcia, zamoknięcia</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <!-- <span class="triangle-to-expand-list">&#x25BC;</span> -->
            <!-- <input class="expand-button" type="checkbox" aria-hidden="true"> -->
            <button id="expand-button" class="expand-button-pl" href="#metoda-8-krokow-do-uzyskania-perfekcyjnego-worka"></button>
        </div>

        <!-- FORM FOR WELDING -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Skontaktuj się</span>
            <input type="text" name="name-welding" class="form-name" placeholder="Imię" autocomplete="on">
            <input type="email" name="email-welding" class="form-email" placeholder="Adres mailowy*" autocomplete="on" required>
            <input type="tel" name="tel-welding" class="form-phone" placeholder="Nr telefonu" autocomplete="on">
            <textarea name="message-welding" class="form-message" placeholder="Treść*" required></textarea>
            <button type="submit" name="submit-welding" class="form-submit">Wyślij</button>
        </form>
    </section>

    <!-- RECYCLING SECTION -->
    <span id="recykling-folii" class="hidden-mark-for-navigation"></span>

    <section id="recycling" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">RECYKLING FOLII</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="img/recykling-folii.jpg" alt="">
        <div class="section-container-for-text">
            <p>
                Recykling tworzyw sztucznych polega na właściwym przygotowaniu surowca do ponownego wykorzystania. W jego ramach różne rodzaje tworzyw są odpowiednio segregowane, oczyszczane i poddawane procesom, za których sprawą nadają się do ponownego wykorzystania. Wytworzone w ten sposób półprodukty - regranulaty są wykorzystywane do ponownego wykorzystania. Podstawową zaletą wykorzystania wysokojakościowych regranulatów wytworzonych z poprodukcyjnych odpadów tworzyw sztucznych daje bardzo duże możliwości w zakresie wykonywania z niego nowych, gotowych produktów, o jakości spełniającej wysokie wymagania odbiorców.
            </p>
            <p>
                W ramach naszej działalności jesteśmy zainteresowani odpadami poprodukcyjnymi PE, PP, PET oraz tworzywami technicznymi ABS, PC, PS. Doświadczenie, wykwalifikowany personel oraz kontrola jakości pozwala nam na uzyskanie regranulatów o paramtetrach jakościowych umożliwiających wykorzystanie go do produkcji nowych produktów.
            </p>
            <p>
                Jesteś zainteresowany zakupem poprodukcyjnych regranulatów, przemiałów? Produkujesz folię, narzędzia, skrzynki, beczki, inne? Zapraszamy do kontaktu.
            </p>
        </div>

        <!-- FORM FOR RECYCLING -->
         <form action="index.php" method="post">
             <span class="contact-form-headline">Skontaktuj się</span>
             <input type="text" name="name-recycling" class="form-name" placeholder="Imię" autocomplete="on">
             <input type="email" name="email-recycling" class="form-email" placeholder="Adres mailowy*" autocomplete="on" required>
             <input type="tel" name="tel-recycling" class="form-phone" placeholder="Nr telefonu" autocomplete="on">
             <textarea name="message-recycling" class="form-message" placeholder="Treść*" required></textarea>
             <button type="submit" name="submit-recycling" class="form-submit">Wyślij</button>
         </form>
    </section>

    <!-- BUY WASTE SECTION -->
    <span id="trading" class="hidden-mark-for-navigation"></span>
    <span id="zakup-odpadu" class="hidden-mark-for-navigation"></span>

    <section id="buy-waste" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="img/logo-h4t-trading-horizontal.svg" alt="HEAD4TECH Trading">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">ZAKUP ODPADU</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="img/zakup-odpadu.jpg" alt="">
        <div class="section-container-for-text">
            <p>
                Obsługujemy zakłady produkcyjne od których odbieramy i zagospodarowujemy tworzywa sztuczne, które początkowo poddawane są recyklingowi, a następnie stosowane w technologii gotowego wyrobu jakimi są worki, wkładki, rękawy foliowe itp. 
            </p>
            <p>
                Interesują nas odpady poprodukcyjne: <b>LDPE, LLDPE, HDPE, PP, BOPP, OPP.</b>
            </p>
        </div>

        <!-- FORM FOR BUY WASTE -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Skontaktuj się</span>
            <input type="text" name="name-buy-waste" class="form-name" placeholder="Imię" autocomplete="on">
            <input type="email" name="email-buy-waste" class="form-email" placeholder="Adres mailowy*" autocomplete="on" required>
            <input type="tel" name="tel-buy-waste" class="form-phone" placeholder="Nr telefonu" autocomplete="on">
            <textarea name="message-buy-waste" class="form-message" placeholder="Treść*" required></textarea>
            <button type="submit" name="submit-buy-waste" class="form-submit">Wyślij</button>
        </form>
    </section>

        <!-- NEWS SECTION -->
    <span id="aktualnosci" class="hidden-mark-for-navigation"></span>

    <section id="news" class="section-container">
        <header class="headline-clear">
            <div class="line line-both"></div>
            <h2 class="headline">AKTUALNOŚCI</h2>
            <div class="line line-both"></div>
        </header>
        <p>
            Wkrótce najnowsze wiadomości.
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
                <span class="contact-form-headline">Produkcja:</span>
                <p class="name">Rafał Dąbek</p>
                <p><a href="tel:+48794010386">+48 794 010 386</a></p>
                <p><a href="mailto:produkcja@h4t.com.pl">produkcja@h4t.com.pl</a></p>
            </div>
            <div>
                <span class="contact-form-headline">Dział Handlowy:</span>
                <p class="name">Krzysztof Rudziński</p>
                <p><a href="tel:+48664926413">+48 664 926 413</a></p>
                <p><a href="mailto:biuro@h4t.com.pl">biuro@h4t.com.pl</a></p>
                <p class="name pt">Maciej Kłos</p>
                <p><a href="tel:+48664926413">+48 503 478 223</a></p>
                <p><a href="mailto:biuro@h4t.com.pl">biuro@h4t.com.pl</a></p>
            </div>
            <div>
                <span class="contact-form-headline">Księgowość:</span>
                <p class="name">Monika Sucholewska</p>
                <p><a href="tel:+48530861292">+48 530 861 292</a></p>
                <p><a href="mailto:ksiegowosc@h4t.com.pl">ksiegowosc@h4t.com.pl</a></p>
            </div>
            <div class="line">
            </div>
            <div>
                <span class="contact-form-headline">Zakład nr 1:</span>
                <p>Stara Dębowa Wola 25A</p>
                <p>27-400 Stara Dębowa Wola</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.2338691346063!2d21.42174468209811!3d50.9949745441264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47180bb6556a4495%3A0x9b2058c93ccfeacf!2sStara%20D%C4%99bowa%20Wola%2025A%2C%2027-400%20Stara%20D%C4%99bowa%20Wola!5e0!3m2!1spl!2spl!4v1669134645164!5m2!1spl!2spl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="google-map"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Zakład nr 2:</span>
                <p>Batalionów Chłopskich 71</p>
                <p>25-671 Kielce</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.573996609573!2d20.594757015955576!3d50.89459446314277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4718286fc3074b59%3A0xa737f48705394d61!2sBatalion%C3%B3w%20Ch%C5%82opskich%2071%2C%2025-671%20Kielce!5e0!3m2!1spl!2spl!4v1669134720338!5m2!1spl!2spl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="google-map"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Biuro Handlowe Pomorze:</span>
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

    <script src="js/propeller.min.js" async></script>

</body>
</html>