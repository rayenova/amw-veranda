<?php

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");


$dataString = json_decode(file_get_contents("php://input"), true);
header("Access-Control-Allow-Methods: POST");

$headers = "From: ranimm01@hotmail.com\r\n";

$to = "ranimm01@hotmail.com";
$subject = "Offerte form submission";
$message = "Form data:\n";
$message .= "Name: " . $dataString['contactInformatie']['name'] . "\n";
$message .= "Last Name: " . $dataString['contactInformatie']['lastname'] . "\n";
$message .= "Postcode: " . $dataString['contactInformatie']['postcode'] . "\n";
$message .= "Address: " . $dataString['contactInformatie']['adress'] . "\n";
$message .= "Email: " . $dataString['contactInformatie']['email'] . "\n";
$message .= "Phone: " . $dataString['contactInformatie']['phone'] . "\n\n";
$message .= "Color: " . $dataString['Materialen']['color'] . "\n";
$message .= "Dak: " . $dataString['Materialen']['dak'] . "\n";
$message .= "Voorkant: " . $dataString['Materialen']['voorkant'] . "\n";
$message .= "Zijwand Links: " . $dataString['Materialen']['zijwandLinks'] . "\n";
$message .= "Zijwand Rechts: " . $dataString['Materialen']['zijwandRechts'] . "\n";
$message .= "Spie Links: " . $dataString['Materialen']['spieLinks'] . "\n";
$message .= "Spie Rechts: " . $dataString['Materialen']['spieRechts'] . "\n";
$message .= "Spotjes: " . $dataString['Materialen']['spotjes'] . "\n\n";
$message .= "Breedte: " . $dataString['Afmetingen']['breedte'] . "\n";
$message .= "Diepte: " . $dataString['Afmetingen']['diepte'] . "\n";
$message .= "Opmerking: " . $dataString['Afmetingen']['opmerking'] . "\n";

if (mail($to, $subject, $message, $headers)) {
  echo json_encode(["status" => "Success"]);
  } else {
  echo json_encode(["status" => "Failure"]);
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Amw-veranda</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="/css/themify.icons.css"/>

    <link rel="shortcut icon" href="/img/logo.png" type="image/png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Gilda+Display&display=swap">
    <link rel="stylesheet" href="/css/plugin.css" />
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" data-language="dutch">

    
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Sidebar Section -->
    <a href="#" class="js-cappa-nav-toggle cappa-nav-toggle"><i></i></a>
    <aside id="cappa-aside">
        <!-- Logo -->
        <div class="cappa-logo">
            <a href="index.html">
                <h2><img src="/img/logo.png" style="width:150px; height:100px;"></h2>
            </a>
        </div>
        <!-- Menu -->
        <nav class="cappa-main-menu">
            <ul>
                <li><a href='index.html'>Home</a></li>
                <li><a href='over.html'>Over Ons</a></li>
                <li><a href='diensten.html'> Diensten</a></li>
                <li><a href="gallerij.html">Gallerij</a></li>
                <li  class='active'><a href='offerte.html'>Offerte</a></li>
                <li><a href='contact.html'>Contact</a></li>
                <!-- class='cappa-sub' voor dropdown die we niet hebben -->
            </ul>
        </nav>
        <!-- Sidebar Footer -->
        <div class="cappa-footer">
            <div class="footer-column footer-contact">
                <div class="footer-contact-info">
                    <div class="reservations">
                        <div class="icon"><span class="ti-mobile"></span></div>
                        <div class="text">
                            <p>Bel ons!</p> <a href="tel:+31 6 362 93 866">+31 6 362 93 866</a>
                        </div>
                    </div>
                    <div class="footer-language"> <i class="lni ti-world"></i>
                        <select class="language-select" onchange="changeLanguage(this.value)">
                            <option value="en">English</option>
                            <option value="de">Deutschland</option>
                            <option value="nl">Nederlands</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Main -->
    <div id="cappa-main">
    
    <!-- Header Banner -->
    <div class="banner-header section-padding bg-position-bottom valign bg-img bg-fixed" data-overlay-dark="2" data-background="img/veranda9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5></h5>
                    <h1>Offerte</h1>
                    <div class="butn-light mt-30 mb-30"> <a href="#offerte" data-scroll-nav="2">
                        <span>Meteen naar offerte</span></a> </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Room Content -->
    <section class="rooms-page section-padding">
        <div class="container">
            <!-- project content -->
            <div class="row" data-scroll-index="1">
                <div class="col-md-12"> 

                    <div class="section-subtitle">voordelen van offerte,</div>
                    <div class="section-title">Wat zijn de stappen?</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">lorem non lorem ac erat suscipit bibendum nulla facilisi. Sedeuter nunc volutpat miss sapien vel conseyen turpeutionyer masin libero sevenion vusetion viventa augue sit amet hendrerit vestibulum. Duisteyerion venenatis lacus gravida eros ut turpis interdum ornare.</p>
                    <p class="mb-30">Interdum et malesu they adamale fames ac anteipsu pimsine faucibus curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero. Hotel non lorem acer suscipit bibendum vulla facilisi nedeuter nunc volutpa mollis sapien velet conseyer turpeutionyer masin libero sempe mollis.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Check-in</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-in from 9:00 AM - anytime</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Early check-in subject to availability</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Check-out</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-out before noon</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Express check-out</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>Voordelen of de steps hier</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>lorem</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- offerte -->

    
    <section class="contact section-padding" id="offerte">
        <div class="container">
            <div class="section-title">Offerte</div>

            <div class="row mb-90 row-reverse">

                <div class="col-md-7">
                    <div class="booking-box">
                        <!--step1  -->
                    <form class="clearfix form1" id="offerteForm">
                        <h3>Contact informatie</h3>

                        <!-- form elements -->
                            <div class="col-md-6 form-group">
                                <label for="name"> <span>* </span> Naam</label>
                                <input name="name" id="name" type="text" placeholder="Uw Naam..." required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lastname"><span>*</span> Achternaam</label>
                                <input name="lastname" id="lastname" type="text" placeholder="Uw Achternaam..." required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="postcode"><span>*</span> Postcode</label>
                                <input name="postcode" id="postcode" type="text" placeholder="Uw postcode..." required>
                            </div>                            
                            <div class="col-md-6 form-group">
                                <label for="adress"><span>*</span> Uw Adress</label>
                                <input name="adress" id="adress" type="text" placeholder="Uw adress..." required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email"><span>*</span> Email Adress</label>
                                <input type="email" id="email" name="email" placeholder="Email Address...">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone"><span>*</span> Telefoon nummer</label>
                                <input name="phone" id="phone" type="text" placeholder="Uw Nummer..." required>
                            </div>
                            
                            <div class="col-md-12">
                                <button class="butn-light btn" type="submit"><p><span>Volgende Stap</span></p></button>
                            </div>
                    </form>

                    
                        <!-- step2 -->
                        <form class="clearfix form1" id="offerteForm2" style="display: none;">
                            <h3>Veranda info</h3>
    
                            <!-- form elements -->
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span> Kleur</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="color" id="color" style="width:100%">
                                                <option value="antra">Antraciet (RAL 7016)</option>
                                                <option value="creme">Creme (RAL 9001)</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span> Materiaal bovenkant (dak)</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="materiaal bovenkant" id="dak" style="width:100%">
                                                <option value="Polycarbonaat Helder">Polycarbonaat Helder</option>
                                                <option value="Polycarbonaat Opaal">Polycarbonaat Opaal</option>
                                                <option value="glas">Glas</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span>Voorkant</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="voorkant" id="voorkant" style="width:100%">
                                                <option value="open">Open</option>
                                                <option value="Glazenschuifpui">Glazenschuifpui</option>
                                                <option value="Glazenschuifwanden">Glazenschuifwanden</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span>Zijwand links</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="zijwand links" id="zijwand-links" style="width:100%">
                                                <option value="open">Open</option>
                                                <option value="Zijwand aluminium paneel">Zijwand aluminium paneel</option>
                                                <option value="Zijwanden isolatie wanden">Zijwanden isolatie wanden</option>
                                                <option value="zijwanden polycarbonaat">zijwanden polycarbonaat</option>
                                                <option value="Glazen schuifwand">Glazen schuifwand</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span>Zijwand rechts</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="zijwand rechts" id="zijwand-rechts" style="width:100%">
                                                <option value="open">Open</option>
                                                <option value="Zijwand aluminium paneel">Zijwand aluminium paneel</option>
                                                <option value="Zijwanden isolatie wanden">Zijwanden isolatie wanden</option>
                                                <option value="zijwanden polycarbonaat">zijwanden polycarbonaat</option>
                                                <option value="Glazen schuifwand">Glazen schuifwand</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span>Spie links</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="Spie links" id="spie-links" style="width:100%">
                                                <option value="open">Open</option>
                                                <option value="Spie glas">Spie glas</option>
                                                <option value="Spie polycarbonaat">Spie polycarbonaat</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span>Spie rechts</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="spie rechts" id="spie-rechts" style="width:100%">
                                                <option value="open">Open</option>
                                                <option value="Spie glas">Spie glas</option>
                                                <option value="Spie polycarbonaat">Spie polycarbonaat</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="select-wrapper">
                                        <label><span>*</span>Spotjes</label>
                                        <div class="select1_inner">
                                            <select class="select2 select" name="spotjes" id="spotjes" style="width:100%">
                                                <option value="ja">Ja</option>
                                                <option value="Dimbaar + afstandsbediening">Dimbaar + afstandsbediening</option>
                                                <option value="Nee">Nee</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                
                                <div class="col-md-12">
                                    <button class="butn-light btn" type="submit"><p><span>Volgende Stap</span></p></button>
                                </div>

                        </form>


                        <!-- step3 -->
                        <form class="clearfix form1" id="offerteForm3" style="display: none;" action="server.php">
                            <h3>Veranda info</h3>

                            <div class="col-md-6 form-group">
                                <label for="breedte"><span>*</span> Breedte in centimeter (cm)</label>
                                <input name="breedte"  id="breedte" type="number" min="10" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="diepte"><span>*</span> Diepte in centimeter (cm)</label>
                                <input name="diepte" id="diepte" type="number" min="1" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="opmerking">Opmerkingen</label>
                                <input name="opmerking" id="opmerking" type="text" placeholder="Opmerking...">
                            </div>

                            <div class="col-md-12">
                                <button class="butn-dark btn"><p><span>Submit</span></p></button>
                            </div>
                        </form>


                    </div>
                </div>

                <!-- the text -->
                <div class="col-md-3 mb-30">

                    <h3>steps</h3>
                        <div class="progress-container">
                            <div class="progress" id="progress"></div>
                            <div class="circle active" data-step="1">1</div>
                            <div class="circle" data-step="2">2</div>
                            <div class="circle" data-step="3">3</div>
                        </div>
                    
                </div>
            </div>
          
        </div>
        
    </section>  
       <!-- Footer -->
       <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-column footer-about">
                            <h3 class="footer-title">Over AMW veranda</h3>
                            <p class="footer-about-text">AMW Veranda biedt elegantie en comfort met haar
                                hoogwaardige veranda's. Het bedrijf staat bekend om de beste prijzen in de markt en
                                een volledige coördinatie van realisatie tot afwerking. Geniet elk seizoen van uw
                                tuin in stijl met een veranda van AMW.</p>
                            <div class="footer-language"> <i class="lni ti-world"></i>
                                <select class="language-select" onchange="changeLanguage(this.value)">
                                    <option value="en">English</option>
                                    <option value="de">Deutschland</option>
                                    <option value="nl">Nederlands</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Ontdek</h3>
                            <ul class="footer-explore-list list-unstyled">
                                <li><a href='index.html'>Home</a></li>
                                <li><a href='over.html'>Over Ons</a></li>
                                <li><a href='diensten.html'> Diensten</a></li>
                                <li><a href="gallerij.html">Gallerij</a></li>
                                <li><a href='offerte.html'>Offerte</a></li>
                                <li><a href='contact.html'>Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">Jan van de Capellelaan 60,
                                5642 LE Eindhoven. Nederland
                            </p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone">
                                    <a href="tel:+31636293866">
                                      <span class="ti-mobile"></span> +31 6 362 93 866
                                    </a>
                                  </p>                                      
                                <p class="footer-contact-mail">
                                    <a href="mailto:info@amw-veranda.nl" target="_blank">info@amw-veranda.nl</a>
                                  </p>
                            </div>
                            <div class="footer-about-social-list">
                                <a href="https://www.instagram.com/amwveranda/" target="_blank" data-network="instagram"><i class="ti-instagram"></i></a>
                                <a href="https://www.facebook.com/terrasse.montage" target="_blank" data-network="facebook"><i class="ti-facebook"></i></a>
                                <a href="https://wa.me/31636293866" target="_blank" data-network="whatsapp"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">
                                © Copyright 2023 | Website is gemaakt door
                                <a href="https://www.linkedin.com/in/zenoubagouram/" target="_blank">Zineb Gouram</a> & 
                                <a href="https://www.linkedin.com/in/ranim-m-984169200" target="_blank">Ranim Mohammed</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
    <!-- jQuery -->
    <script src="/js/language.js"></script>
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/isotope.js"></script>
    <script src="/js/pace.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scrollIt.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.magnific-popup.js"></script>
    <script src="/js/YouTubePopUp.js"></script>
    <script src="/js/select2.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/smooth-scroll.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/offerte.js"></script>
    <script src="/js/submission.js"></script>


</body>

</html>