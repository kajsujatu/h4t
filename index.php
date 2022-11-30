<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="Tworzymy nowoczesne produkty z materiałów pochodzących z recyklingu. Jesteśmy liderem w branży worków U-Liner, Bootle Neck, Open Top."/>
    <title>HEAD4TECH</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" async></script>
    <?php include 'sentMail.php';?>
</head>
<body>
    <!-- HEADER -->
    <header id="header-top">
        <div id="navbar">
            <a href="#"><img src="img/logo-h4t-horizontal.svg" id="logo-top" alt="HEAD4TECH"></a>
            <nav>
                <ul id="navigation-links" data-visible="false">
                    <li><a href="#production">Produkcja</a></li>
                    <li><a href="#buy-waste">Trading</a></li>
                    <li><a href="#news">Aktualności</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>
                <button id="nav-mobile" aria-controls="navigation-links" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="menu-line line1"></span>
                    <span class="menu-line line2"></span>
                    <span class="menu-line line3"></span>
                </button>
            </nav>
            <!-- <div id="choose-lang">PL <span class="choose-lang-triangle">&#9660;</span></div> -->
        </div>    
    </header>
    
    <!-- MAIN SECTION -->
    <section id="main-section">
        <h1 id="main-headline">Tworzymy nowoczesne produkty<br> z materiałów pochodzących z&nbsp;recyklingu</h1>
        <div id="button-down-container">
            <span>Poznaj nasz sposób działania</span>
            <a href="#mark-for-button-down-arrow"><img id="button-down-arrow" src="img/button-down-arrow.svg" alt=""></img></a>
        </div>    
    </section>

    <span id="mark-for-button-down-arrow"></span>

    <!-- CIRCULAR MENU SECTION -->
    <section id="circular-menu-section">
        <nav id="circular-nav">
            <div id="sector-middle"></div>
            <ul id="circular-menu">
                <li class="button" id="sector-one"><a class="button-link" href="#recycling">POZNAJ PROCES</a></li>
                <li class="button" id="sector-two"><a class="button-link" href="#buy-waste">POZNAJ PROCES</a></li>
                <li class="button" id="sector-three"><a class="button-link" href="#">POZNAJ PROCES</a></li>
                <li class="button" id="sector-four"><a class="button-link" href="#welding">POZNAJ PROCES</a></li>
                <li class="button" id="sector-five"><a class="button-link" href="#production">POZNAJ PROCES</a></li>
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
                            PRODUKCJA FOLII &nbsp;&nbsp;&#8594&nbsp;&nbsp; ZGRZEWANIE FOLII &nbsp;&nbsp;&#8594&nbsp;&nbsp;&nbsp;&nbsp; DOSTAWA FOLII &nbsp;&nbsp;&nbsp;&nbsp;&#8594
                            &nbsp;&nbsp;&nbsp;&nbsp; ZAKUP ODPADU &nbsp;&nbsp;&nbsp;&nbsp;&#8594&nbsp;&nbsp;&nbsp; RECYKLING FOLII &nbsp;&nbsp;&#8594
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
    </section>

    <!-- PRODUCTION SECTION -->
    <section id="production" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="img/logo-h4t-produkcja-horizontal.svg" alt="HEAD4TECH Produkcja">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">PRODUKCJA FOLII</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="img/produkcja-folii.jpg" alt="">
        <main>
            <ol id="ol-production-container" class="ol-container">
                <li><span class="list-item-headline">KIM JESTEŚMY</span>
                    <ul>
                        <li>
                            <b>Liderem w branży worków U-Liner, Bootle Neck, Open Top.</b> W swojej ofercie mamy również produkty dla branży meblarskiej, chemicznej, spożywczej.
                        </li>
                        <li>
                            Do tej pory zaufało nam większość producentów opakowań BIG-BAG w Polsce.
                        </li>
                        <li>
                            Nasze produkty można spotkać w Niemczech, Szwecji, Serbii, Francji, Litwie.
                        </li>
                        <li>
                            Do grudnia 2022 roku sprzedaliśmy 17 mln worków o łącznej wadze 8 mln kilogramów.
                        </li>
                        <li>
                            Nieprzerwanie od kilku lat dla odbiorców nasze produkty są synonimem precyzji i jakości.
                        </li>
                    </ul>
                </li>
                <li><span class="list-item-headline">CO ROBIMY</span>
                    <ul>
                        <li>
                            <b>Niezawodne opakowania o skomplikowanych nazwach, U-Liner, Bootle-Neck, Open Top.</b> To nic innego jak ogromne worki foliowe doskonałe jako bariera przed wilgocią, wodą, słońcem, brudem, pyłem i różnego rodzaju zanieczyszczeniami.
                        </li>
                        <li>
                            Nasze produkty skierowane są głównie (ale nie tylko) do producentów kontenerów elastycznych typu BIG-BAG z angielskiego FIBC.
                        </li>
                    </ul>
                </li> 
                <li><span class="list-item-headline">CO NAS WYRÓŻNIA</span> 
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
        </main>

        <form action="" method="post">
            <span class="contact-form-headline">Skontaktuj się</span>
            <input type="text" name="name-production" class="form-name" placeholder="Imię" autocomplete="on">
            <input type="email" name="email-production" class="form-email" placeholder="Adres mailowy*" autocomplete="on" required>
            <input type="tel" name="tel-production" class="form-phone" placeholder="Nr telefonu" autocomplete="on">
            <textarea type="text" name="message-production" class="form-message" placeholder="Treść*" required></textarea>
            <button type="submit" name="submit-production" class="form-submit">Wyślij</button>
        </form>
    </section>

    <!-- WELDING SECTION -->
    <section id="welding" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="img/logo-h4t-produkcja-horizontal.svg" alt="HEAD4TECH Produkcja">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">ZGRZEWANIE FOLII</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="img/zgrzewanie-folii.jpg" alt="">
        <main>
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
            <h3 class="list-item-headline center-text">Metoda 8 kroków do uzyskania perfekcyjnego worka</h3>
            <p>
                Wyprodukowanie worka, który sprosta nawet najtrudniejszym testom, wymaga kontroli na każdym z etapów produkcji. Opracowaliśmy schemat, który pomaga uniknąć nam błędów produkcyjnych. Zapraszamy do podróży.
            </p>
            <ol id="ol-welding-container-steps">
                <li><span class="list-item-headline">Krok pierwszy — produkcja rękawa</span>
                    <ul>
                        <li>trójwarstwowa linia do rozdmuchu folii</li>
                        <li>automatyczny system kontroli grubości</li>
                        <li>grawimetryczny system dozowania granulatów</li>
                        <li>kontrola prowadzenia wstęgi</li>
                    </ul>
                </li>
                <li><span class="list-item-headline">Krok drugi — badanie grubości</span>
                    <ul>
                        <li>na każdej rolce przeprowadzamy pomiar średniej grubości folii w warunkach laboratoryjnych</li>
                    </ul>
                </li>
                <li><span class="list-item-headline">Krok trzeci — badanie na wydłużenie wzdłużne i poprzeczne</span>
                    <ul>
                        <li>każdą wyprodukowaną rolkę sprawdzamy pod względem składu oraz pod kątem rozciągliwości</li>
                    </ul>
                </li>
                <li><span class="list-item-headline">Krok czwarty — badanie udarności</span>
                    <ul>
                        <li>na urządzeniu do sprawdzania DART DROP badamy jaką siłę wytrzyma nasza folia w teście symulującym przebicie</li>
                    </ul>
                </li>
                <li><span class="list-item-headline">Krok piąty — zgrzewanie worków</span>
                    <ul>
                        <li>produkcja worka na impulsowej zgrzewarce, z wydajnością do 20 tys. worków U-liner oraz Bootle Neck dziennie</li>
                    </ul>
                </li>
                <li><span class="list-item-headline">Krok szósty — wytrzymałość zgrzewów</span>
                    <ul>
                        <li>test na zaprojektowanej przez naszych specjalistów maszynie do kontroli wytrzymałości zgrzewu</li>
                    </ul>
                </li>
                <li><span class="list-item-headline">Krok siódmy — kontrola jakości</span>
                    <ul>
                        <li>każdy nasz worek jest przeglądany przez pracowników Działu Kontroli Jakości</li>
                    </ul>
                </li>
                <li><span class="list-item-headline">Krok ósmy — odpowiednie opakowanie</span>
                    <ul>
                        <li>nasze worki transportowane są w specjalnie zaprojektowanych kartonowych BOX-ach, dzięki czemu eliminujemy ich uszkodzenie, zabrudzenie, otarcia, zamoknięcia</li>
                    </ul>
                </li>
            </ol>
        </main>
        <form action="" method="post" id="contact-form-welding">
            <span class="contact-form-headline">Skontaktuj się</span>
            <input type="text" class="form-name" id="name-welding" name="name" size="10" placeholder="Imię" autocomplete="on">
            <input type="email" class="form-email" id="email-welding" name="mail" required  size="10" placeholder="Adres mailowy*" autocomplete="on">
            <input type="tel" class="form-phone" id="phone-welding" name="phone" size="10" placeholder="Nr telefonu" autocomplete="on">
            <textarea type="text" class="form-message" id="message-welding" name="message" required rows="5" cols="30" placeholder="Treść*"></textarea>
            <input type="submit" class="form-submit" id="submit-welding" value="Wyślij">
        </form>
    </section>

<!-- RECYCLING SECTION -->
<section id="recycling" class="section-container">
    <div class="headline-with-logo">
        <div class="logo-horizontal-container">
            <img class="logo-horizontal" src="img/logo-h4t-produkcja-horizontal.svg" alt="HEAD4TECH Produkcja">
        </div>
        <div class="line line-left"></div>
        <h2 class="headline-next-to-logo">RECYKLING FOLII</h2>
        <div class="line line-right"></div>
    </div>
    <img class="main-image-section" src="img/recykling-folii.jpg" alt="">
    <main>
        <p>
            Recykling tworzyw sztucznych polega na właściwym przygotowaniu surowca do ponownego wykorzystania. W jego ramach różne rodzaje tworzyw są odpowiednio segregowane, oczyszczane i poddawane procesom, za których sprawą nadają się do ponownego wykorzystania. Wytworzone w ten sposób półprodukty - regranulaty są wykorzystywane do ponownego wykorzystania. Podstawową zaletą wykorzystania wysokojakościowych regranulatów wytworzonych z poprodukcyjnych odpadów tworzyw sztucznych daje bardzo duże możliwości w zakresie wykonywania z niego nowych, gotowych produktów, o jakości spełniającej wysokie wymagania odbiorców.
        </p>
        <p>
            W ramach naszej działalności jesteśmy zainteresowani odpadami poprodukcyjnymi PE, PP, PET oraz tworzywami technicznymi ABS, PC, PS. Doświadczenie, wykwalifikowany personel oraz kontrola jakości pozwala nam na uzyskanie regranulatów o paramtetrach jakościowych umożliwiających wykorzystanie go do produkcji nowych produktów.
        </p>
    </main>
    <form action="" method="post" id="contact-form-recyckling">
        <span class="contact-form-headline">Skontaktuj się</span>
        <input type="text" class="form-name" id="name-recyckling" name="name" size="10" placeholder="Imię" autocomplete="on">
        <input type="email" class="form-email" id="email-recyckling" name="mail" required  size="10" placeholder="Adres mailowy*" autocomplete="on">
        <input type="tel" class="form-phone" id="phone-recyckling" name="phone" size="10" placeholder="Nr telefonu" autocomplete="on">
        <textarea type="text" class="form-message" id="message-recyckling" name="message" required rows="5" cols="30" placeholder="Treść*"></textarea>
        <input type="submit" class="form-submit" id="submit-recyckling" value="Wyślij">
    </form>
</section>


<!-- BUY WASTE SECTION -->
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
    <main>
        <p>
            Obsługujemy zakłady produkcyjne od których odbieramy i zagospodarowujemy tworzywa sztuczne, które początkowo poddawane są recyklingowi, a następnie stosowane w technologii gotowego wyrobu jakimi są worki, wkładki, rękawy foliowe itp. 
        </p>
        <p>
            Interesują nas odpady poprodukcyjne: <b>LDPE, LLDPE, HDPE, PP, BOPP, OPP.</b>
        </p>
    </main>
    <form action="" method="post" id="contact-form-buy-waste">
        <span class="contact-form-headline">Skontaktuj się</span>
        <input type="text" class="form-name" id="name-buy-waste" name="name" size="10" placeholder="Imię" autocomplete="on">
        <input type="email" class="form-email" id="email-buy-waste" name="mail" required  size="10" placeholder="Adres mailowy*" autocomplete="on">
        <input type="tel" class="form-phone" id="phone-buy-waste" name="phone" size="10" placeholder="Nr telefonu" autocomplete="on">
        <textarea type="text" class="form-message" id="message-buy-waste" name="message" required rows="5" cols="30" placeholder="Treść*"></textarea>
        <input type="submit" class="form-submit" id="submit-buy-waste" value="Wyślij">
    </form>
</section>


    <!-- NEWS SECTION -->
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
    <section id="contact">
        <header class="headline-clear">
            <div class="line line-both"></div>
            <h2 class="headline">KONTAKT</h2>
            <div class="line line-both"></div>
        </header>
        <main class="contact-data">
            <div>
                <span class="contact-form-headline">Produkcja:</span>
                <p class="name">Rafał Dąbek</p>
                <p><a href="tel:+48794010386">+48 794 010 386</a></p>
                <p><a href="mailto:produkcja@h4t.com.pl">produkcja@h4t.com.pl</a></p>
            </div>
            <div>
                <span class="contact-form-headline">Dział Zakupów:</span>
                <p class="name">Krzysztof Rudziński</p>
                <p><a href="tel:+48664926413">+48 664 926 413</a></p>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.2338691346063!2d21.42174468209811!3d50.9949745441264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47180bb6556a4495%3A0x9b2058c93ccfeacf!2sStara%20D%C4%99bowa%20Wola%2025A%2C%2027-400%20Stara%20D%C4%99bowa%20Wola!5e0!3m2!1spl!2spl!4v1669134645164!5m2!1spl!2spl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Zakład nr 2:</span>
                <p>Batalionów Chłopskich 71</p>
                <p>25-671 Kielce</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.573996609573!2d20.594757015955576!3d50.89459446314277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4718286fc3074b59%3A0xa737f48705394d61!2sBatalion%C3%B3w%20Ch%C5%82opskich%2071%2C%2025-671%20Kielce!5e0!3m2!1spl!2spl!4v1669134720338!5m2!1spl!2spl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Biuro Handlowe Pomorze:</span>
                <p>ul. Kalinowa 29</p>
                <p>83-031 Kleszczewko</p>
            </div>    
        </main>
    </section>

    <!-- FOOTER -->
    <footer>
        <div id="footer-container">
            <div>
                <span>HEAD4TECH Sp. z o. o. Wszelkie prawa zastrzeżone</span>
            </div>
            <div>
                <span>NIP: 6040228072</span>
                <span>KRS: 0000943944</span>
            </div>
        </footer>

    <script src="js/propeller.min.js" async></script>

</body>
</html>