<?php 



try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=haarstudioaussergewoehnlich;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 } catch (PDOEXxecption $e) {
    die('self error!');
 }


function loadHerren() {
    global $db;
    $stmt = $db->prepare("SELECT * FROM herren");
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            echo('<div class="service-container-inner">
                    <div>&bull; '.$res[1].'</div>
                    <div>'.$res[2].'</div>
                </div>');
        }
    }
}


function loadFarbe() {
    global $db;
    $stmt = $db->prepare("SELECT * FROM farben");
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            echo('<div class="service-container-inner">
                    <div>&bull; '.$res[1].'</div>
                    <div>'.$res[2].'</div>
                </div>');
        }
    }
}

function loadDamen() {
    global $db;
    $stmt = $db->prepare("SELECT * FROM damen");
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            echo('<div class="service-container-inner">
                    <div>&bull; '.$res[1].'</div>
                    <div>'.$res[2].'</div>
                </div>');
        }
    }
}

function loadKosmetik() {
    global $db;
    $stmt = $db->prepare("SELECT * FROM kosmetik");
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            echo('<div class="service-container-inner">
                    <div>&bull; '.$res[1].'</div>
                    <div>'.$res[2].'</div>
                </div>');
        }
    }
}

?>



<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Haarstudio Aussergewöhnlich | Startseite</title>
    <meta name="description"
        content="Auffallend, unverwechselbar und überraschend -Topstyling vom Friseurmeister Kasapoglu im Friseurstudio Außergewöhnlich in Köln Longerich">
    <meta name="author" content="SitePoint">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">


    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> !-->
    <!--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> !-->


</head>

<body onload="showPopUp(); translate();">
    <div class="nav">
        <div class="left-menu">
            <ul>
                <li class="cl-effect-5"><a href="#service"><span>Unser Service</span></a></li>
                <li class="cl-effect-5"><a href="#opening-time"><span>Öffnungszeiten</span></a></li>
            </ul>
        </div>
        <div class="logo">
            <img src="images/haarstudioaussergewoehnlich+koeln+logo.png">
        </div>
        <div class="right-menu">
            <ul>
                <li class="cl-effect-5"><a href="#gallery"><span>Galerie</span></a></li>
                <li class="cl-effect-5"><a href="#contact"><span>Kontakt</span></a></li>
            </ul>
        </div>
        <div onclick="openSideBar()" class="mobile-nav-burger mobile-nav-burger-hide">
            <img src="images/outline_menu_white_24dp.png">
        </div>
    </div>
    <div class="mobile-nav">
        <span onclick="closeSidebar()" class="material-icons close-icon">close</span>
        <div onclick="closeSidebar()" class="menu-links"><a href="#service">Unser Service</a></div>
        <div onclick="closeSidebar()" class="menu-links"><a href="#opening-time">Öffnungszeiten</a></div>
        <div onclick="closeSidebar()" class="menu-links"><a href="#gallery">Galerie</a></div>
        <div onclick="closeSidebar()" class="menu-links"><a href="#contakt">Kontakt</a></div>
    </div>
    <div class="landing">
        <div class="landing-inner">
            <h1>Außergewöhnlich</h1>
            <h1>wie unser Haarstudio</h1>
            <a href="tel:+4922116917854">Jetzt Anrufen</a>
            <a href="https://termin.onl/haarstudioaussergewoehnlich1">Termin buchen</a>
        </div>

        <div class="hidden newsha-popup-background popup-hidden"></div>
        <div class="newsha-popup popup-hidden">

            <div class="newsha-popup-img-container">
                <span onclick="closePopUp()" class="material-icons">close</span>
                <a href="https://www.newsha.de/shoppartner/25041"><img
                        src="images/haarstudiogewoehnlich+koeln+newsha-landing.jpg"></a>
            </div>
            <div class="options-menu-newsha">

                <p>Kaufe absofort Newsha-Produkte bei uns!</p>
                <a href="https://www.newsha.de/shoppartner/25041">Jetzt bestellen</a>
            </div>
        </div>
    </div>

    <div class="service" id="service">
        <h1>Unser Service</h1>
        <div class="services">
            <div id="splide-service">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide service-container">
                            <h3>Damen</h3>
                            <?php loadDamen();?>
                        </li>
                        <li class="splide__slide service-container">

                            <h3>Farbe/Strähnen</h3>
                            <?php loadFarbe();?>
                        </li>
                        <li class="splide__slide service-container">
                            <h3>Herren</h3>
                            <?php loadHerren();?>
                        </li>
                        <li class="splide__slide service-container">
                            <h3>Kosmetik</h3>
                            <?php loadKosmetik();?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="philosophy">
        <h1>Philosophie</h1>
        <p>Das Friseurhandwerk ist eine Leidenschaft, die wir Tag für Tag leben.

            Eine hohe Qualität und Kundenzufriedenheit sind die Prämissen für unseren ausgezeichneten Service.
            Wir möchten mit individueller Beratung, erstklassigen Leistungen und besten Pflegeprodukten die
            natürliche
            Schönheit ihrer Haare zur Geltung bringen.



            Mit einem typgerechten Styling stellen wir die Wünsche unserer Kunden in den Mittelpunkt.
            Freundliche und außergewöhnliche Friseure sowie eine faire Preisgestaltung werden auch Sie begeistern.

            Vereinbaren Sie schon heute einen Termin mit Hilfe des Kontaktformulars oder rufen Sie uns direkt an.

            Wir freuen uns auf Sie.</p>
    </div>
    <div class="equipment">
        <div class="equipment-inner">
            <h1>Hochwertige Ausstattung</h1>
            <p>Ihr Komfort und Ihre Zufriedenheit steht bei uns an oberster Stelle! In unserem Haarstudio, können
                Sie
                sich dank umfangreichen Hygienekonzepten und gepflegtem Salon wohlfühlen.</p>
        </div>
        <div class="equipment-img equipment-inner"><img src="images/haarstudioaussergewoehnlich+koeln+ausstattung.png">
        </div>
    </div>
    <div class="opening-time" id="opening-time">

        <div class="days">
            <h1>Öffnungszeiten</h1>
            <div class="day">
                <div>Montag</div>
                <div>9:00 - 18:30</div>
            </div>
            <div class="day">
                <div>Dienstag</div>
                <div>9:00 - 18:30</div>
            </div>
            <div class="day">
                <div>Mittwoch</div>
                <div>9:00 - 18:30</div>
            </div>
            <div class="day">
                <div>Donnerstag</div>
                <div>9:00 - 18:30</div>
            </div>
            <div class="day">
                <div>Freitag</div>
                <div>9:00 - 18:30</div>
            </div>
            <div class="day">
                <div>Samstag</div>
                <div>9:00 - 16:00</div>
            </div>
        </div>
    </div>
    <div class="gallery" id="gallery">

        <h1>Salon</h1>

        <div id="splide-salon" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/03dea789-321f-4029-9fb9-375299237534.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/6e55aa11-df94-49d0-808e-358113ea660c.jpg" />
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/7d2431fa-bbd3-4f8b-8aec-638f7a431d74.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/be6894d0-e39d-4efa-9399-0c8cc0cd05be.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/c35acfb9-f5f8-42ed-bc8f-6abd7cf16e53.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/df430e63-c68f-4a9a-97cd-b0994c5b1348.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/e542db83-22aa-4623-9ba4-ce33f8231ba4.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Salon/eb5215cb-168e-4243-a279-381bc6ace0aa.jpg">
                    </li>
                </ul>
            </div>
        </div>

        <h1>Frisuren</h1>

        <div id="splide" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/06be863f-d82b-417a-8596-87858a359793.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/135da27f-b593-4193-8ec8-81310aa2c65f.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/1ad12cac-ca14-4c74-b09a-39fd56d72679.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/1d34fd95-e373-4b06-8514-3861aa2b0cf3.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/233f9976-1e90-466c-a97b-060b2af1e468.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/2617f57c-bf1b-49a9-8005-96d7ca7ea00d.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/316db5a8-5b8d-4489-be65-9c0cd6f2bf0f.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/34acc88a-a40e-4d66-9300-5c0e022a1651.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/3b7d61c2-ba8c-437a-b68b-a0eb1990d85c.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/46c25aa3-9abf-413b-b0c0-0dfd16893c90.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/47e33864-899e-483b-aa00-972004e2af2d.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/52fdde82-101e-4fb6-8d1c-0cea1023f03d.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/58747c04-afc4-43da-a183-c6d162766144.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/5b20dab7-3eb5-43f2-9f69-54cddc0799e9.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/5e3c9507-b604-4a9b-a106-849aed5986fc.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/5e585473-5879-43c3-b41a-d80031662ce3.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/5f20524c-cc38-4647-86e5-9214dba102e3.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/6e505e52-f261-4fc2-aced-2f7a0da27b08.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/6eefe4df-8846-4eb5-be0a-2b5987f6230e.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/7d9aebc8-0271-4e1f-9505-8bb802783be9.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/7e2c911e-a907-4439-b4fd-face43ca308c.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/8147747b-ed3e-41a1-90d7-99d61290640d.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/815545f3-07ff-407e-ab2b-c11ad5f68c9f.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/83f84c56-0a20-4784-87b6-4d083693fec4.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/8bda3977-ce84-45d0-b6f2-2eab9cbb4850.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/8be7e5ca-f699-43d6-acbc-85965c3a3e06.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/8f8ad58c-6e78-4535-bfdf-69ef18d95b5f.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/a0acf7c4-bea5-46f9-8d12-4199a6c92401.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/a7afb283-81f5-493c-b720-b8b35c6ca552.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/ae6a60b5-eae6-4ce5-9c53-5c646032b509.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/b6b0ecf1-4aaa-4f7f-b793-fbd25d3d86ce.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/b96529e9-a88d-4145-99c7-93e229c93399.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/c149d2eb-292d-4a28-9ad7-5c79ce3d247f.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/c59699e1-cd44-4e60-86f3-9a7f896a14a2.jpg">
                    </li>
                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/d5b1b4ea-35be-4b0f-8b86-4c114ebadf00.jpg">
                    </li>

                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/eec1d2af-b6ca-4ce8-87f0-2db05a6c6f52.jpg">
                    </li>

                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/f291d610-9f05-4d8a-a0b5-d9111e401a46.jpg">
                    </li>

                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/f6780335-6aac-45c8-89aa-5456a5fa7e59.jpg">
                    </li>

                    <li class="splide__slide">
                        <img class="gallery-imgages"
                            src="images/gallery/Haare/ff9a1050-9a52-4533-b5e0-8e3084fcd29d.jpg">
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="social-feed-instagram">
        <div class="heading-container">
            <h1>Instagram</h1>
        </div>
        <div class="social-feed-container-instagram">
            <iframe width="360" height="500" src="https://www.instagram.com/p/CNe81rWAS_0/embed"
                frameborder="0"></iframe>
        </div>
    </div>

    <div class="social-feed-facebook">
        <div class="heading-container-facebook">
            <div class="fb-post desktop-web"
                data-href="https://de-de.facebook.com/haarstudioaussergewoehnlich/photos/a.1612961222140183/3217662435003379/?type=3&amp;theater"
                data-show-text="true">
                <blockquote
                    cite="https://de-de.facebook.com/haarstudioaussergewoehnlich/photos/a.1612961222140183/3217662435003379/?type=3"
                    class="fb-xfbml-parse-ignore">Gepostet von <a
                        href="https://www.facebook.com/haarstudioaussergewoehnlich/">Haarstudio Aussergewöhnlich</a>
                    am&nbsp;<a
                        href="https://de-de.facebook.com/haarstudioaussergewoehnlich/photos/a.1612961222140183/3217662435003379/?type=3">Samstag,
                        10. April 2021</a></blockquote>
            </div>
        </div>
        
        <div class="social-feed-container-facebook">
            <h1>Facebook</h1>
        </div>
    </div>

    <div class="approach">
        <div>
            <h2>Hier finden Sie uns</h3>
                <h3>Longericher Hauptstr. 68
            </h2>
            <h3>50739 Köln</h2>
        </div>
        <div class="google-maps">
            <iframe width="100%" height="100%"
                src="https://maps.google.de/maps?width=700&amp;height=440&amp;hl=de&amp;q=Haarstudio%20Aussergew%C3%B6hnlich%20Longericher%20Hauptstr.%2068+(Haarstudio%20Aussergew%C3%B6hnlich)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>

            <style>
                #gmap_canvas img {
                    max-width: none !important;
                    background: none !important
                }
            </style>
        </div><br />
    </div>
    <div class="newsha-section">
        <div class="newsha-container">
            <img src="images/haarstudioaussergewoehnlich+koeln+newsha.png">
        </div>
        <div class="newsha-container">
            <h1>Newsha</h1>
            <h2>Bestelle deine Newsha Produkte absofort bei uns</h2>
            <a href="https://www.newsha.de/shoppartner/25041">Jetzt bestellen</a>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="questions-container">
            <h2>Sie haben Fragen?</h2>
            <h2>Wir sind gerne bereit Ihnen weiterzuhelfen. Kontaktieren Sie uns über das Formular, oder rufen Sie
                uns
                an</h2>
        </div>
        <div class="form">
            <form>
                <input class="name-input" type="text" placeholder="Ihr Name">
                <input type="email" placeholder="E-Mail">
                <textarea></textarea>
                <button type="submit">Senden</button>
            </form>
        </div>

        <?php
        error_reporting(0);

            $empfaenger = "emircan.asan@outlook.de";
            $betreff = "Neue E-Mail vom Kontaktformuler der Homepage";
            $from = "From: Vorname Nachname <absender@domain.de>";
            $text = "Hier lernt Ihr, wie man mit PHP Mails verschickt";
             
            mail($empfaenger, $betreff, $text, $from);
        ?>
    </div>
    <div class="mobile-footer">
        <div>
            <p>Zahlungsarten</p>
        </div>
        <div><img src="images/payment/haarstudioaussergewoehnlich+köln+zahlungsarten.png"></div>
        <div>
            <p>&copy; Haarstudio Aussergewoehnlich 2021</p>
        </div>
        <div class="socials-mobile"><img draggable="false" src="images/socialmedia/facebook.png">
            <img draggable="false" src="images/socialmedia/instagram.png">
        </div>
        <div>
            <p>Shoppen auf</p>
        </div>
        <div><a href="https://www.newsha.de/shoppartner/25041"><img src="images/newsha/newsha-logo.png"></a></div>
        <div onclick="showImprintPopUp()"><a onclick="showImprintPopUp()">Impressum</a></div>
        <div onclick="showprivacypolicypopup()"><a onclick="showprivacypolicypopup()">Datenschutzerklärung</a></div>
    </div>
    <div class="footer">
        <div class="footer-content-left">
            <p>Zahlungsarten</p>
            <div class="payment-container">
                <img src="images/payment/haarstudioaussergewoehnlich+köln+zahlungsarten.png">
            </div>
            <p>&copy; Haarstudio Aussergewoehnlich 2021</p>
        </div>
        <div class="footer-content-right">
            <div class="footer-content-inner">
                <div class="img-container">
                    <a href="https://de-de.facebook.com/haarstudioaussergewoehnlich/" target="_blank"><img
                            draggable="false" src="images/socialmedia/facebook.png"></a>
                    <a href="https://www.instagram.com/haarstudioaussergewoehnlich/" target="_blank"><img
                            draggable="false" src="images/socialmedia/instagram.png"></a>

                </div>
                <div class="shop-newsha">
                    <p>Shoppen auf</p>
                    <a class="newsha-footer-link" href="https://www.newsha.de/shoppartner/25041" target="_blank"><img
                            src="images/newsha/newsha-logo.png"></a>
                </div>
            </div>
            <div class="footer-content-inner-imprint">
                <div><a onclick="showImprintPopUp()">Impressum</a></div>
                <div><a onclick="showprivacypolicypopup()">Datenschutzerklärung</a></div>
            </div>
        </div>
    </div>

    <div class="imprint-popup-background popup-hidden"></div>
    <div class="imprint-popup popup-hidden">
        <span onclick="closeImprintPopUp()" class="material-icons">close</span>
        <h1>Impressum:</h1>
        <br>
        <h2>Haarstudio Außergewöhnlich</h2>
        <br>
        <h3>Kerim Kasapoglu</h3>
        <br>
        <h2>Kontaktdaten:</h2>
        <br>
        <h3>Anschrift:<br> Longericher Hauptstr. 68<br>
            50739 Köln
            <br>
            Telefon: +49 221 16917854
            <br>
            E-Mail: info@haarstudio-aussergewoehnlich.de
            <br>
            Verantwortlicher / Verantwortliche für journalistisch-redaktionelle Texte:
            Kerim Kasapoglu
        </h3>
        <br>
        <h2>Berufsrechtliche Regelungen:</h2>
        <br>
        <h3>Name: Kerim Kasapoglu
            <br>
            Berufsbezeichnung: Friseur / Friseurin
            <br>
            verliehen in Köln
            <br>
            Berufsrechtliche Regelung: Handwerksordnung
            <br>
            Zuständige Aufsichtsbehörde: Handwerkskammer
            <br>
            Plattform der EU-Kommission zur Online-Streitbeilegung:
            <br>
            www.ec.europa.eu/consumers/odr
        </h3>
    </div>

    <div class="privacy-policy-popup-background popup-hidden"></div>
    <div class="privacy-policy-popup popup-hidden">
        <span onclick="closeprivacypolicypopup()" class="material-icons">close</span>
        <br>
        <h1>Datenschutz­erklärung</h1>
        <br>
        Wir sind uns darüber bewusst, dass Ihnen der Schutz Ihrer Privatsphäre bei der Benutzung unserer
        Website ein wichtiges Anliegen ist. Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst.
        Deshalb möchten wir, dass Sie wissen, wann wir welche Daten speichern und wie wir sie verwenden. Wir
        möchten Sie mit dieser Datenschutzerklärung über unsere Maßnahmen zum Datenschutz in Kenntnis
        setzen.
        <br>
        <br>
        <h1>Erhebung personenbezogener Daten</h1>
        <br>
        Im Folgenden informieren wir über die Erhebung personenbezogener Daten bei Nutzung unserer Website.
        Personenbezogene Daten sind alle Daten, die direkt oder indirekt auf Sie persönlich beziehbar sind,
        z. B. Name, Adresse, E-Mail-Adressen, Nutzerverhalten.
        Wir verarbeiten Daten gemäß DS-GVO Art. 6 Abs. 1 lit. a) b) c) f). Das bedeutet, dass wir
        personenbezogene Daten nur verarbeiten, wenn eine Einwilligung vorliegt (lit. a), soweit zur
        Erfüllung eines Vertrages oder vorvertraglicher Maßnahmen erforderlich (lit. b), wir rechtlich dazu
        verpflichtet sind (lit. c) oder wir ein berechtigtes Interesse an der Verarbeitung haben (lit. f).
        Die entsprechende Rechtsgrundlage wird im Einzelfall benannt.
        Bei Ihrer Kontaktaufnahme mit uns per E-Mail oder über ein Kontaktformular werden die von Ihnen
        mitgeteilten Daten (Ihre E-Mail-Adresse, ggf. Ihr Name und Ihre Telefonnummer) von uns gespeichert,
        um Ihre Fragen zu beantworten. Die in diesem Zusammenhang anfallenden Daten löschen wir, nachdem der
        Zweck der Anfrage entfallen ist. Je nach Art der Anfrage erheben wir diese Daten mit Ihrer
        ausdrücklichen Einwilligung gem. Art. 6 Abs. 1 lit. a) DSGVO, zur Abwicklung und Erfüllung eines
        Vertrages oder vorvertraglicher Maßnahmen gem. Art. 6 Abs. 1 lit. b) DS-GVO oder bei einem
        berechtigten Interesse gem. Art. 6 Abs. 1 lit. f) DSGVO. Das berechtigte Interesse liegt dabei
        darin, Anfragen zu beantworten und über unsere Produkte und Dienstleistungen zu informieren.
        Bei der ausschließlich informatorischen Nutzung der Website, also wenn Sie sich nicht registrieren
        oder uns anderweitig Informationen übermitteln, werden nur die Daten erhoben, die Ihr Browser an den
        von uns genutzten Server übermittelt. Wenn Sie unsere Website betrachten möchten, werden die
        folgenden Daten erhoben, die für uns technisch erforderlich sind, um Ihnen unsere Website anzuzeigen
        und die Stabilität und Sicherheit zu gewährleisten. Die Weiterleitung erfolgt automatisiert durch
        Ihren Browser und ist bei der Nutzung des Internets diesem inhärent. (Rechtsgrundlage ist Art. 6
        Abs. 1 lit. f DS-GVO):
        <br>
        <br>
        <h1>IP-Adresse</h1>
        <br>
        Datum und Uhrzeit der Anfrage
        Zeitzonendifferenz zur Greenwich Mean Time (GMT)
        Inhalt der Anforderung (konkrete Seite)
        Zugriffsstatus/HTTP-Statuscode
        jeweils übertragene Datenmenge
        Website, von der die Anforderung kommt
        Browser
        Betriebssystem und dessen Oberfläche
        Sprache und Version der Browsersoftware.
        Verantwortlicher
        Den Verantwortlichen gem. Art. 4 Nr. 7 EU-Datenschutz-Grundverordnung (DS-GVO) entnehmen Sie bitte
        dem Impressum.
        <br>
        <br>
        <h1>Verwendungszwecke</h1>
        <br>
        Die von Ihnen erfassten persönlichen Daten werden wir nur dazu verwenden, Ihnen die gewünschten
        Produkte oder Dienstleistungen bereitzustellen, oder aber zu anderen Zwecken, für die Sie Ihre
        Einwilligung erteilt haben, sofern keine anderslautenden gesetzlichen Verpflichtungen bestehen.
        <br>
        <br>
        <h1>Betroffenenrechte</h1>
        <br>
        Sie haben gegenüber uns folgende Rechte hinsichtlich der Sie betreffenden personenbezogenen Daten:
        <br>
        Recht auf Auskunft,
        Recht auf Berichtigung oder Löschung,
        Recht auf Einschränkung der Verarbeitung,
        Recht auf Widerspruch gegen die Verarbeitung,
        Recht auf Datenübertragbarkeit.
        Sie haben zudem das Recht, sich bei einer Datenschutz-Aufsichtsbehörde über die Verarbeitung Ihrer
        personenbezogenen Daten durch uns zu beschweren.
        Recht auf Widerruf oder Widerspruch gegen die Verarbeitung Ihrer Daten
        Falls Sie eine Einwilligung zur Verarbeitung Ihrer Daten erteilt haben, können Sie diese jederzeit
        widerrufen. Ein solcher Widerruf beeinflusst die Zulässigkeit der Verarbeitung Ihrer
        personenbezogenen Daten, nachdem Sie ihn gegenüber uns ausgesprochen haben.
        <br>
        <br>
        <h1>Aufbewahrung von Daten</h1>
        <br>
        Wir speichern personenbezogene Daten, solange dies zur Erfüllung unserer vertraglichen sowie vor-
        und nachvertraglichen Verpflichtungen erforderlich ist. Dies berührt nicht Ihr Recht auf Löschung
        oder Einschränkung der Verarbeitung. Außerdem wird dadurch nicht unser Recht berührt die Daten bei
        rechtlich zwingenden Gründen (Art. 6 Abs. 1 lit. c) DS-GVO) oder bei Vorliegen eines berechtigten
        Interesses (Art. 6 Abs. 1 lit. b) DS-GVO) weiterhin zu speichern. Als berechtigtes Interesse kommen
        insbesondere das Prüfen und Durchsetzen von Schadensersatz- und anderen Ansprüchen in Betracht.
        Logdateien, die zur Stabilität und Sicherheit des Systems erforderlich sind werden nach vier Tagen
        automatisiert gelöscht.
        <br>
        <br>
        <h1>Einsatz von Cookies</h1>
        <br>
        Zusätzlich zu den zuvor genannten Daten werden bei Ihrer Nutzung unserer Website Cookies auf Ihrem
        Rechner gespeichert. Bei Cookies handelt es sich um kleine Textdateien, die auf Ihrer Festplatte dem
        von Ihnen verwendeten Browser zugeordnet gespeichert werden und durch welche der Stelle, die den
        Cookie setzt (hier durch uns), bestimmte Informationen zufließen. Cookies können keine Programme
        ausführen oder Viren auf Ihren Computer übertragen. Sie dienen dazu, das Internetangebot insgesamt
        nutzerfreundlicher und effektiver zu machen.
        <br>
        Diese Website nutzt folgende Arten von Cookies, deren Umfang und Funktionsweise im Folgenden
        erläutert werden:
        Transiente Cookies (dazu b)
        Persistente Cookies (dazu c).
        Transiente Cookies werden automatisiert gelöscht, wenn Sie den Browser schließen. Dazu zählen
        insbesondere die Session-Cookies. Diese speichern eine sogenannte Session-ID, mit welcher sich
        verschiedene Anfragen Ihres Browsers der gemeinsamen Sitzung zuordnen lassen. Dadurch kann Ihr
        Rechner wiedererkannt werden, wenn Sie auf unsere Website zurückkehren. Die Session-Cookies werden
        gelöscht, wenn Sie sich ausloggen oder den Browser schließen.
        Persistente Cookies werden automatisiert nach einer vorgegebenen Dauer gelöscht, die sich je nach
        Cookie unterscheiden kann. Sie können die Cookies in den Sicherheitseinstellungen Ihres Browsers
        jederzeit löschen.
        Sie können Ihre Browser-Einstellung entsprechend Ihren Wünschen konfigurieren und z. B. die Annahme
        von Third-Party-Cookies oder allen Cookies ablehnen. Wir weisen Sie darauf hin, dass Sie eventuell
        nicht alle Funktionen dieser Website nutzen können.
        Sicherheit
        Wir setzen technische und organisatorische Sicherheitsmaßnahmen ein, um Ihre zur Verfügung
        gestellten Daten durch zufällige oder vorsätzliche Manipulation, Verlust, Zerstörung oder Zugriff
        unberechtigter Personen zu schützen. Im Falle der Erhebung und Verarbeitung persönlicher Daten
        werden die Informationen in verschlüsselter Form übertragen, um einem Missbrauch der Daten durch
        Dritte vorzubeugen. Unsere Sicherungsmaßnahmen werden entsprechend der technologischen Entwicklung
        fortlaufend überarbeitet.
        <br>
        <br>
        <h1>Anpassungen</h1>
        <br>
        Die ständige Entwicklung des Internets macht von Zeit zu Zeit Anpassungen unserer
        Datenschutzerklärung erforderlich. Wir behalten uns vor, jederzeit entsprechende Änderungen
        vorzunehmen.
        <br>
        <h1>Nutzungsstatistik</h1>
        <br>
        Beim Besuch unserer Seite wird von uns anonymisiert erfasst, auf welchem Weg die Besucher zu unserer
        Webseite gekommen sind und wie viele Nutzer die Seite aufgerufen haben. (Suchmaschine, Verlinkung,
        direkte Eingabe oder Werbemaßnahmen) Die Daten werden nicht dazu genutzt einzelne Besucher zu
        identifizieren, sondern ausschließlich zur Übermittlung quantitativer Größen. Die Statistik kann
        nicht dazu genutzt werden ihr Verhalten auf anderen Webseiten nachzuvollziehen. Die Daten werden
        nicht mit anderen Diensten verknüpft. Wenn Sie das Setzen von Cookies in Ihrem Browser deaktiviert
        haben, werden Ihre Besuche nicht erfasst. Ansonsten werden diese Cookies nach sieben Tagen
        automatisiert gelöscht.
        <br>
        <br>
        <h1>Inhalte Dritter auf der Webseite</h1>
        <br>
        Unser Internetauftritt integriert Inhalte anderer Anbieter. Dies können reine Content-Elemente (z.B.
        Nachrichten, Neuigkeiten), aber auch Widgets (Funktionen wie z.B. Buchungssysteme) oder z.B.
        Schriften und technische Bibliotheken sein. Dazu gehören auch Google Fonts. Aus technischen Gründen
        erfolgt dies, indem diese Inhalte vom Browser von anderen Servern geladen werden. In diesem
        Zusammenhang werden die aktuell von Ihrem Browser verwendete IP und der verwendete Browser des
        anfragenden Systems übermittelt. Bitte beachten Sie diesbezüglich die jeweiligen
        Datenschutzerklärungen der Drittanbieter.
        <br>
        <br>
        <h1>Routenplaner</h1>
        <br>
        Wir verwenden Google Maps von Google auf unserer Webseite, um Ihnen einen interaktiven Routenplaner
        zur Verfügung zu stellen. Beim Nutzen dieses Service erklären Sie sich damit einverstanden, dass
        Daten gemäß der Google Maps Nutzungsbedingungen (https://www.google.com/intl/de_de/help/terms_maps/)
        verarbeitet werden.
        Sofern Sie die Karte nutzen, z.B. durch Anklicken unserer dort aufgeführten Standorte, erfassen wir
        von Ihnen keinerlei Daten. Ggf. erfasst jedoch das Unternehmen Alphabbet Inc.
        im Rahmen von Google Maps personenbezogene oder personenbeziehbare
        Daten. Wir können nicht beeinflussen welche Daten Google mit Google Maps erfasst, noch wie
        Google diese verarbeitet und auswertet. Bitte beachten Sie deswegen die Nutzungsbedingungen für
        Google Maps, abrufbar unter https://www.google.com/intl/de_de/help/terms_maps/
        <br>
        <br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v10.0"
        nonce="IdJ88hBe"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#splide', {
                perPage: 3,
                width: "90%",
                margin: '10%',
                height: '30rem',
                rewind: true,
                cover: true,
                gap: "1em",
                breakpoints: {
                    1100: {
                        height: '25rem',
                    },
                    763: {
                        height: '15rem',
                    },
                    407: {
                        perPage: 1,
                        height: '15rem',
                    },
                }
            }).mount();
        });

        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#splide-salon', {
                perPage: 3,
                width: '90%',
                margin: '10%',
                height: '30rem',
                cover: true,
                rewind: true,
                gap: "1em",
                breakpoints: {
                    1100: {
                        height: '25rem',
                    },
                    763: {
                        height: '15rem',
                    },
                    597: {
                        perPage: 2,
                        height: '15rem',
                    },
                    407: {
                        perPage: 1,
                        height: '15rem',
                    },
                }
            }).mount();
        });



        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#splide-service', {
                perPage: 3,
                width: '91%',
                height: '30rem',
                cover: true,
                rewind: true,
                gap: "1em",
                arrows: false,
                pagination: false,
                breakpoints: {
                    1100: {
                        height: '25rem',
                    },
                    763: {
                        height: '15rem',
                    },
                    597: {
                        perPage: 2,
                        height: '15rem',
                    },
                    407: {
                        perPage: 1,
                        height: '15rem',
                    },
                }
            }).mount();
        });

        function showPopUp() {
            document.getElementsByClassName("newsha-popup-background")[0].classList.remove("popup-hidden");
            document.getElementsByClassName("newsha-popup")[0].classList.remove("popup-hidden");
        }

        function closePopUp() {
            document.getElementsByClassName("newsha-popup-background")[0].classList.add("popup-hidden");
            document.getElementsByClassName("newsha-popup")[0].classList.add("popup-hidden");
        }

        function openSideBar() {
            document.getElementsByClassName("mobile-nav")[0].style.right = "0";
        }

        function closeSidebar() {
            document.getElementsByClassName("mobile-nav")[0].style.right = "-100%";
        }

        function showImprintPopUp() {
            document.getElementsByClassName("imprint-popup-background")[0].classList.remove("popup-hidden");
            document.getElementsByClassName("imprint-popup")[0].classList.remove("popup-hidden");
            console.log("Test-1");
        }

        function closeImprintPopUp() {
            document.getElementsByClassName("imprint-popup-background")[0].classList.add("popup-hidden");
            document.getElementsByClassName("imprint-popup")[0].classList.add("popup-hidden");
            console.log("Test0");
        }

        function showprivacypolicypopup() {
            document.getElementsByClassName("privacy-policy-popup-background")[0].classList.remove("popup-hidden");
            document.getElementsByClassName("privacy-policy-popup")[0].classList.remove("popup-hidden");
            console.log("Test1");
        }

        function closeprivacypolicypopup() {
            document.getElementsByClassName("privacy-policy-popup-background")[0].classList.add("popup-hidden");
            document.getElementsByClassName("privacy-policy-popup")[0].classList.add("popup-hidden");
            console.log("Test2");
        }

        function translate() {
            document.getElementsByClassName("ViewProfileButton")[0].innerHTML = "Besuchen";
        }

        

    </script>
    </div>

</body>

</html>