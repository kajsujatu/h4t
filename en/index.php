<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="We create modern products from recycled materials. We are a leading manufacturer of bottle neck, open top and U-liners.">
    <title>HEAD4TECH</title>

    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" async></script>

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
                        <a href="#our-products">
                            Our products
                        </a>
                    </li>
                    <li>
                        <a href="#8-step-method-to-get-the-perfect-liner">
                            Laboratory
                        </a>
                    </li>
                    <li>
                        <a href="#news">
                            News
                        </a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <ul id="lang-menu-mobile">
                            <li>
                                <a href="../index.php">Polski</a>
                            </li>
                            <li class="active-lang">
                                English
                            </li>
                            <li>
                                <a href="../de">Deutsch</a>
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
                <div id="selected-lang">English</div>
                <ul>
                    <li>
                        <a href="../index.php">Polski</a>
                    </li>
                    <li>
                        <a href="../de">Deutsch</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- MAIN SECTION -->
    <section id="main-section">
        <h1 id="main-headline">We create modern products<br> from recycled materials</h1>
        <div id="button-down-container">
            <span>Discover our way of working</span>
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
                    <a class="button-link" href="#film-recycling">
                        KNOW THE PROCESS <span class="sr-only">FILM RECYCLING</span>
                    </a>
                </li>
                <li class="button" id="sector-two">
                    <a class="button-link" href="#purchase-of-waste-materials">
                        KNOW THE PROCESS <span class="sr-only">PURCHASE OF WASTE MATERIALS</span>
                    </a>
                </li>
                <li class="button" id="sector-three">
                    <a class="button-link" href="#">
                        KNOW THE PROCESS <span class="sr-only">FOIL DELIVERY</span>
                    </a>
                </li>
                <li class="button" id="sector-four">
                    <a class="button-link" href="#film-sealing">
                        KNOW THE PROCESS <span class="sr-only">FILM SEALING</span>
                    </a>
                </li>
                <li class="button" id="sector-five">
                    <a class="button-link" href="#film-production">
                        KNOW THE PROCESS <span class="sr-only">FILM PRODUCTION</span>
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
                            FILM PRODUCTION &nbsp;&nbsp;&#8594;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FILM SEALING &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8594;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FOIL DELIVERY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8594;
                            &nbsp;&nbsp; WASTE PURCHASE &nbsp;&nbsp;&#8594;&nbsp;&nbsp;&nbsp; FILM RECYCLING &nbsp;&nbsp;&#8594;
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
    <span id="film-production" class="hidden-mark-for-navigation"></span>

    <section id="production" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">FILM PRODUCTION</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/produkcja-folii.jpg" alt="Queens line for blowing three-layer film">
        <div class="section-container-for-text">
            <ol id="ol-production-container" class="ol-container">
                <li><h3 class="list-item-headline">ABOUT US</h3>
                    <ul>
                        <li>
                            <b>We are a leading manufacturer of bottle neck, open top and U-liners.</b> Our portfolio also includes products for the furniture, chemical and food industries.
                        </li>
                        <li>
                            We have gained the trust of the majority of big bag manufacturers in Poland.
                        </li>
                        <li>
                            We also sell our products to such countries as Germany, Sweden, Serbia, France and Lithuania.
                        </li>
                        <li>
                            By December 2022, we have sold 17 million liners with a total weight of 8 million kilograms.
                        </li>
                        <li>
                            Our products have for years stood for high precision and quality.
                        </li>
                    </ul>
                </li>
                <span id="our-products" class="hidden-mark-for-navigation"></span>
                <li><h3 class="list-item-headline">OUR PRODUCTS</h3>
                    <ul>
                        <li>
                            <b>Reliable packaging solutions with complex names, such as U-liner, bottle-neck or open top.</b> These are nothing more than huge plastic bags used to protect the contents against moisture, water, sun, dirt, dust and all sorts of contamination.
                        </li>
                        <li>
                            The target recipients of our products are mainly (but not exclusively) manufacturers of flexible intermediate bulk containers (FIBC).
                        </li>
                        <div class="technical-image-container">
                            <div class="technical-image">
                                <span class="technical-data">Technical drawing of U-Liner:</span>
                                <img src="../img/technical-u-liner.png" alt="Technical drawing of U-Liner">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Technical drawing of Bootle-Neck:</span>
                                <img src="../img/technical-bootle-neck.png" alt="Technical drawing of Bootle-Neck">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Technical drawing of Open Top:</span>
                                <img src="../img/technical-open-top.png" alt="Technical drawing of Open Top">
                            </div>
                            <div class="technical-image">
                                <span class="technical-data">Technical drawing of Open Top + side pleats:</span>
                                <img src="../img/technical-open-top-zakladki-boczne.png" alt="Technical drawing of Open Top + side pleats">
                            </div>
                        </div>
                    </ul>
                </li> 
                <li><h3 class="list-item-headline">OUR STRENGTHS</h3> 
                    <ul>
                        <li>
                            Our team takes an individual approach to every single customer and order, whether regular or one-time. We are proud of every single record broken, also in terms of reduction in production waste! All members of the team, from the Operator's Assistant to the General Manager, combine their efforts to ensure that our mission to become the <b>FIRST CHOICE SUPPLIER</b> is not just empty words, but an idea that allows us to provide our customers with great quality liners, as well as storage and warehousing solutions for their businesses.
                        </li>    
                        <li>
                            In 2014, we were the first ones to purchase a ULiner impulse sealing machine and a three-layer LDPE film production line. <b>It allows us to reach an output of 500,000 thousand liners per month, making us the leader in the FIBC liner production.</b>
                        </li>
                        <li>
                            We follow the principles of Circular Economy. We have selected raw materials so as to ensure that process waste can be given a second life. For this purpose, we have also set up our own PE packaging recycling line. We also collect any unused and defective packaging from our customers. This year, we were THE FIRST IN POLAND to introduce a film liner made from 100% PPR and PCR recyclate, with a Uliner-type spout and parameters similar to those of the original liner. 
                        </li>
                    </ul>
                </li>
            </ol>
            <h3 class="list-item-headline center-text">CUSTOMISED SOLUTIONS</h3>
                <p>
                    Do you have a problem with non-standard liner order? Or perhaps you need to deliver a sample product to a customer at no time? Are you looking for a specific colour or size of liner? Have you received an unexpected order with a short lead time late on a Friday afternoon? Has an old supplier failed you? Or perhaps you are looking for a new one? Whichever the case, contact us, so that we can together find a suitable solution to your problem.
                </p>
            <h3 class="list-item-headline center-text">INTERNATIONAL COOPERATION</h3>
                <p>             
                    We have extensive experience in cooperation with companies from the European Union as well as other countries. Thanks to our efficient and qualified staff, we are able to tailor our products to individual needs.
                </p>
        </div>

        <!-- FORM FOR PRODUCTION -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Contact us</span>
            <input type="text" name="name-production" class="form-name" placeholder="Name" autocomplete="on">
            <input type="email" name="email-production" class="form-email" placeholder="E-mail address*" autocomplete="on" required>
            <input type="tel" name="tel-production" class="form-phone" placeholder="Phone number" autocomplete="on">
            <textarea name="message-production" class="form-message" placeholder="Write a message*" required></textarea>
            <button type="submit" name="submit-production" class="form-submit">Send</button>
        </form>
    </section>

    <!-- WELDING SECTION -->
    <span id="film-sealing" class="hidden-mark-for-navigation"></span>

    <section id="welding" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">FILM SEALING</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/zgrzewanie-folii.jpg" alt="A line for welding foil to the size of the foil insert U-Liner, Bootle Neck, Open Top">
        <div class="section-container-for-text">
            <p>
                <b>Big bag liners are reusable products.</b> They are widely used in the agricultural, food and transport industries. Film liners are often used for the storage of fertilisers, dusty substances, as well as pickling of foodstuffs. A liner placed inside a big bag container provides additional protection for the stored or transported goods. It protects the contents from moisture and provides additional sealing.
            </p>
            <ol id="ol-welding-container" class="ol-container">
                <li><h3 class="list-item-headline">U-liner</h3>
                    <ul>
                        <li>
                            <b>U-liners for big bags</b> are an ideal solution for manufacturers of this type of flexible containers. The precise "U" cut leaves an extra length of film sleeve on the side of the spout necessary for securing it on the big bag.
                        </li>
                        <li>
                            Available with and without diagonal seams and venting perforations.
                        </li>
                        <li>
                            <span class="technical-data">Technical specifications:</span>
                            <ul>
                                <li>film thickness: 30-120 microns/li>
                                <li>height: max. 3500 mm</li>
                                <li>width: max. 1500 mm</li>
                                <li>spout width: max. 1100 mm</li>
                                <li>spout height: max. 700 mm</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Contact us</a> for more information. Depending on the requirements, we may also accept non-standard orders requiring machine upgrade.
                        </li>
                    </ul>
                </li>
                <li><h3 class="list-item-headline">Bottle Bag</h3>
                    <ul>
                        <li>
                            <b>Bottle bag liners for big bags</b> are an ideal solution for manufacturers of this type of flexible containers. This model only features a filling spout. It works well as an insert where no additional fixings are required.
                        </li>
                        <li>
                            Available with and without diagonal seams and venting perforations.
                        </li>
                        <li>
                            <span class="technical-data">Technical specifications:</span>
                            <ul>
                                <li>film thickness: 30-120 microns</li>
                                <li>height: max. 3500 mm</li>
                                <li>width: max. 1500 mm</li>
                                <li>spout width: max. 1100 mm</li>
                                <li>spout height: max. 700 mm</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Contact us</a> for more information. Depending on the requirements, we may also accept non-standard orders requiring machine upgrade.
                        </li>
                    </ul>
                </li>
                <li><h3 class="list-item-headline">Open Top</h3>
                    <ul>
                        <li>
                            <b>Open top liners for big bags</b> are an ideal solution for manufacturers of this type of flexible containers. They have a strong and precisely made bottom seal. They offer good protection against moisture and can also be used as protective “hoods”.
                        </li>
                        <li>
                            This type of liner can also be made from film with overlaps, increasing its maximum width to 2900 mm. 2900 mm.
                        </li>
                        <li>
                            Technical specifications:
                            <ul>
                                <li>film thickness: 30-120 microns</li>
                                <li>height: max. 3500 mm</li>
                                <li>width: max. 1500 mm (without overlaps in the centre of the sleeve)</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact-form-welding" class="contact-in-text-to-redirect">Contact us</a> for more information. Depending on the requirements, we may also accept non-standard orders requiring machine upgrade.
                        </li>
                    </ul>
                </li>
            </ol>
            <span id="8-step-method-to-get-the-perfect-liner" class="hidden-mark-for-navigation"></span>
            <div id="cutoff-text" data-visible="false">
                <h3 class="list-item-headline center-text">8-STEP METHOD TO GET THE PERFECT LINER</h3>
                <p>
                    In order to ensure that our liners can withstand even the toughest tests, we control each stage of the production process. We have developed a procedure that helps us avoid production errors. Let’s analyse it together.
                </p>
                <ol id="ol-welding-container-steps" class="list-expanded">
                    <li><h4 class="list-item-headline">STEP 1 - SLEEVE PRODUCTION</h4>
                        <ul>
                            <li>three-layer blown film extrusion line</li>
                            <li>automatic thickness control system</li>
                            <li>gravimetric granulate dosing system</li>
                            <li>web guiding control system</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">STEP TWO - THICKNESS TESTING</h4>
                        <ul>
                            <li>for each roll, we measure the average thickness of the film in laboratory conditions</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">STEP THREE - LONGITUDINAL AND TRANSVERSE ELONGATION TEST</h4>
                        <ul>
                            <li>we check each roll produced in terms of its composition and stretchability</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">STEP FOUR - IMPACT TEST</h4>
                        <ul>
                            <li>we use the DART DROP tester to test the resistance of our film to puncture</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">STEP FIVE - SEALING</h4>
                        <ul>
                            <li>we use an impulse sealer, which gives an output of up to 20,000 U-liner and Bootle Neck liners per day</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">STEP SIX - SEAL STRENGTH</h4>
                        <ul>
                            <li>we perform a seal strength test on a machine designed by our specialists</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">STEP SEVEN - QUALITY CONTROL</h4>
                        <ul>
                            <li>each of our liners is inspected by our Quality Control personnel</li>
                        </ul>
                    </li>
                    <li><h4 class="list-item-headline">STEP EIGHT - SUITABLE PACKAGING</h4>
                        <ul>
                            <li>our liners are transported in specially designed cardboard boxes to protect them from damage, dirt and moisture</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <!-- <span class="triangle-to-expand-list">&#x25BC;</span> -->
            <!-- <input class="expand-button" type="checkbox" aria-hidden="true"> -->
            <button id="expand-button" class="expand-button-en" href="#8-step-method-to-get-the-perfect-liner"></button>
        </div>

        <!-- FORM FOR WELDING -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Contact us</span>
            <input type="text" name="name-welding" class="form-name" placeholder="Name" autocomplete="on">
            <input type="email" name="email-welding" class="form-email" placeholder="E-mail address*" autocomplete="on" required>
            <input type="tel" name="tel-welding" class="form-phone" placeholder="Phone number" autocomplete="on">
            <textarea name="message-welding" class="form-message" placeholder="Write a message*" required></textarea>
            <button type="submit" name="submit-welding" class="form-submit">Send</button>
        </form>
    </section>

    <!-- RECYCLING SECTION -->
    <span id="film-recycling" class="hidden-mark-for-navigation"></span>

    <section id="recycling" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-production-horizontal.svg" alt="HEAD4TECH Production">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">FILM RECYCLING</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/recykling-folii.jpg" alt="">
        <div class="section-container-for-text">
            <p>
                Before recycling, plastic materials have to be properly prepared. Different types of plastics are separated, cleaned and processed. The semi-finished products, regranulates, are then ready for reuse. The main advantage of using high-quality regranulates produced from post-production plastic waste is that they can be used to make new, finished products of a quality that meets strict demands of our customers.
            </p>
            <p>
                We are interested in post-production PE, PP, PET, as well as ABS, PC and PS waste. With the experience of our qualified staff and strict quality control we are able to obtain regranulates with high quality parameters suitable for the production of new products.
            </p>
            <p>
                Are you interested in buying post-production regranulates, regrinds? Do you produce foil, tools, boxes, barrels, other? Feel free to contact us.
            </p>
        </div>

        <!-- FORM FOR RECYCLING -->
         <form action="index.php" method="post">
             <span class="contact-form-headline">Contact us</span>
             <input type="text" name="name-recycling" class="form-name" placeholder="Name" autocomplete="on">
             <input type="email" name="email-recycling" class="form-email" placeholder="E-mail address*" autocomplete="on" required>
             <input type="tel" name="tel-recycling" class="form-phone" placeholder="Phone number" autocomplete="on">
             <textarea name="message-recycling" class="form-message" placeholder="Write a message*" required></textarea>
             <button type="submit" name="submit-recycling" class="form-submit">Send</button>
         </form>
    </section>

    <!-- BUY WASTE SECTION -->
    <span id="trading" class="hidden-mark-for-navigation"></span>
    <span id="zakup-odpadu" class="hidden-mark-for-navigation"></span>

    <section id="buy-waste" class="section-container">
        <div class="headline-with-logo">
            <div class="logo-horizontal-container">
                <img class="logo-horizontal" src="../img/logo-h4t-trading-horizontal.svg" alt="HEAD4TECH Trading">
            </div>
            <div class="line line-left"></div>
            <h2 class="headline-next-to-logo">PURCHASE OF WASTE MATERIALS</h2>
            <div class="line line-right"></div>
        </div>
        <img class="main-image-section" src="../img/zakup-odpadu.jpg" alt="">
        <div class="section-container-for-text">
            <p>
                We collect plastic waste from production plants. The materials are initially recycled and then reused for such products as bags, liners, film sleeves, etc.
            </p>
            <p>
                We are interested in the following types of post-production waste: <b>LDPE, LLDPE, HDPE, PP, BOPP, OPP.</b>
            </p>
        </div>

        <!-- FORM FOR BUY WASTE -->
        <form action="index.php" method="post">
            <span class="contact-form-headline">Contact us</span>
            <input type="text" name="name-buy-waste" class="form-name" placeholder="Name" autocomplete="on">
            <input type="email" name="email-buy-waste" class="form-email" placeholder="E-mail address*" autocomplete="on" required>
            <input type="tel" name="tel-buy-waste" class="form-phone" placeholder="Phone number" autocomplete="on">
            <textarea name="message-buy-waste" class="form-message" placeholder="Write a message*" required></textarea>
            <button type="submit" name="submit-buy-waste" class="form-submit">Send</button>
        </form>
    </section>

        <!-- NEWS SECTION -->
    <span id="aktualnosci" class="hidden-mark-for-navigation"></span>

    <section id="news" class="section-container">
        <header class="headline-clear">
            <div class="line line-both"></div>
            <h2 class="headline">NEWS</h2>
            <div class="line line-both"></div>
        </header>
        <p>
            Latest news coming soon.
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
            <h2 class="headline">CONTACT</h2>
            <div class="line line-both"></div>
        </header>
        <div class="contact-data">
            <div>
                <span class="contact-form-headline">Production:</span>
                <p class="name">Rafał Dąbek</p>
                <p><a href="tel:+48794010386">+48 794 010 386</a></p>
                <p><a href="mailto:produkcja@h4t.com.pl">produkcja@h4t.com.pl</a></p>
            </div>
            <div>
                <span class="contact-form-headline">Sales:</span>
                <p class="name">Krzysztof Rudziński</p>
                <p><a href="tel:+48664926413">+48 664 926 413</a></p>
                <p><a href="mailto:biuro@h4t.com.pl">biuro@h4t.com.pl</a></p>
                <p class="name pt">Maciej Kłos</p>
                <p><a href="tel:+48664926413">+48 503 478 223</a></p>
                <p><a href="mailto:biuro@h4t.com.pl">biuro@h4t.com.pl</a></p>
            </div>
            <div>
                <span class="contact-form-headline">Accounting:</span>
                <p class="name">Monika Sucholewska</p>
                <p><a href="tel:+48530861292">+48 530 861 292</a></p>
                <p><a href="mailto:ksiegowosc@h4t.com.pl">ksiegowosc@h4t.com.pl</a></p>
            </div>
            <div class="line">
            </div>
            <div>
                <span class="contact-form-headline">Plant no. 1</span>
                <p>Stara Dębowa Wola 25A</p>
                <p>27-400 Stara Dębowa Wola</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.2338691346063!2d21.42174468209811!3d50.9949745441264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47180bb6556a4495%3A0x9b2058c93ccfeacf!2sStara%20D%C4%99bowa%20Wola%2025A%2C%2027-400%20Stara%20D%C4%99bowa%20Wola!5e0!3m2!1spl!2spl!4v1669134645164!5m2!1spl!2spl&hl=en" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="google-map"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Plant no. 2:</span>
                <p>Batalionów Chłopskich 71</p>
                <p>25-671 Kielce</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.573996609573!2d20.594757015955576!3d50.89459446314277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4718286fc3074b59%3A0xa737f48705394d61!2sBatalion%C3%B3w%20Ch%C5%82opskich%2071%2C%2025-671%20Kielce!5e0!3m2!1spl!2spl!4v1669134720338!5m2!1spl!2spl&hl=en" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="google-map"></iframe>
                </div>
            </div>
            <div>
                <span class="contact-form-headline">Pomeranian Trade Office:</span>
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