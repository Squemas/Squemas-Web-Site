<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Información de Contacto - Squemas Centro de Negocios</title>
        <meta name="description" content="">
        <meta name="author" content="Ideas-Envision Servicios Integrales">
        <meta name="keywords" content="Coworking, Espacios de Trabajo, Bolivia, Networking">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Open Graph data -->    
        <meta property="og:title" content="Squemas Centro de Negocios"/>  
        <meta property="og:type" content="Espacios de trabajo colaborativos"/>  
        <meta property="og:url" content="<?Php echo BASE_VIEW_URL; ?>"/>  
        <meta property="og:image" content="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']?>" />  
        <meta property="og:site_name" content="Coworking Squemas"/>  
        <!--<meta property="fb:admins" content="tu Id en Facebook"/>  -->
        <meta property="og:description" content="Primer Centro de Negocios en su tipo, de la ciudad de La Paz, Bolivia. espacio empresarial y de trabajo colaborativo orientado a brindar todos los servicios de oficina, recepción y capacitación a estudiantes universitarios, emprendedores, profesionales independientes, freelancers y cualquier otra persona en busca de un lugar que impulse sus ideas y capacidades." />
    
        <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700%7CPlayfair+Display:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>        
        <link rel="shortcut icon" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']?>favicon.ico"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewBootstrap['root_bootstrap_css']?>bootstrap.min.css"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewBootstrap['root_bootstrap_css']?>bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']?>color-default.css"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']?>animate.css"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']?>colors-header.css"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']?>odometer.min.css">
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_fonts']?>font-awesome-4.6.3/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']?>jquery.fatNav.min.css">
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']?>style.css"/>
        <link rel="stylesheet" href="<?Php echo $vParamsViewFrontEndLayout['root_frontend_css']?>responsive.css"/>
    </head>

    <body>        
        <div class="header-wrapper header-transparent hamburger-menu hamburger-menu-light header-white-logo">
            <header id="header">
                <div class="container-fluid">
                    <div class="main-nav">
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left"  >
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="#">
                                                <span class="icon-container logo-light">
                                                    <img class="svg-white" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']?>logos/logo-web-white.png" alt="Centro de Negocios Squemas"/>
                                                </span>
                                                <span class="icon-container logo-dark">
                                                    <img class="svg-black" src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']?>logos/logo-web-black.png" alt="Centro de Negocios Squemas"/>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hamburger-menu-button"></div>
                                    <div id="search">
                                        <form action="#" method="post">
                                            <input class="search-submit" type="submit" />
                                            <input id="m_search" name="s" type="text" placeholder="¿Qué buscas?..." />                        
                                        </form>
                                    </div>
                                    <div class="fat-nav">
                                        <div class="hamburger-nav fat-nav__wrapper">
                                            <ul>
                                                <li><a href="<?Php echo BASE_VIEW_URL;?>">Inicio</a></li>
                                                <li><a href="#" class="dropdown">Sobre Nosotros</a>
                                                    <ul class="hamburger-nav-submenu">
                                                        <li class="current-menu-item"><a href=#slide-to-section>Conózcanos</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#instalaciones">Nuestras Instalaciones</a></li>
                                                <li><a href="#contacto">Contacto</a>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>        
        <!-- .page-content start -->
        <div class="contact-page-full-screen fullscreen-section page-content custom-background color-background dark bkg-black-3 container-no-padding column-no-padding">
            <div class="container-fluid">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-6.col-xs-12 start -->
                    <div class="col-md-6 col-xs-12 contact-map-container">
                        <div id="map"></div>
                    </div><!-- .col-md-6.col-xs-12 end -->
                    <!-- .col-md-6 start -->
                    <div class="col-md-6 col-xs-12 contact-container">
                        <div class="contact-container-inner">
                            <!-- .row start -->
                            <div class="row mb-60">
                                <!-- .col-md-12 start -->
                                <div class="col-md-12 h-serif-font triggerAnimation animated" data-animate="fadeInUp">
                                    <h1>Información<br>de Contacto</h1>
                                </div>
                            </div>
                            <!-- .row start -->
                            <div class="row">
                                <!-- .col-md-6.col-sm-12 start -->
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="contact-info-container">
                                        <span class="icon-container">
                                            <img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']?>svg/map-icon.svg" class="svg-turquoise" alt="Restless logo"/>
                                        </span>
                                        <ul class="contact-info-list">
                                            <li>Centro Squemas</li>
                                            <li>Av. Arce esq. Pinilla</li>
                                            <li>Edif. Arcadia #2588 Mezzanine Of. 109B Torre B</li>
                                            <li>La Paz, Bolivia</li>
                                        </ul>
                                    </div>
                                    <div class="contact-info-container">
                                        <span class="icon-container">
                                            <img src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_img']?>svg/phone-icon.svg" class="svg-turquoise" alt="Restless logo"/>
                                        </span>
                                        <ul class="contact-info-list">
                                            <li>+591 22 2430880</li>
                                            <li>+591 78795415</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .col-md-6.col-md-12.col-sm-12 start -->
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <!-- .contact-form start -->
                                    <div class="contact-form">                                
                                        <form class="wpcf7">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" class="wpcf7-text form-control" id="name" placeholder="Nombre Completo" >
                                            </div>

                                            <div class="form-group">
                                                <input name="email" id="email" class="wpcf7-text form-control" type="email" id="email" placeholder="Correo Electrónico">
                                            </div>

                                            <div class="form-group wpcf7-message">
                                                <textarea name="message" id="message"  class="wpcf7-textarea form-control" id="message" rows="8" placeholder="Cuentanos tus intereses"></textarea>
                                            </div>

                                            <input name="action" type="hidden">

                                            <div class="btn-wrapper btn-left">
                                                <input type="submit" class="wpcf7-submit btn btn-square btn-no-shadow triggerAnimation animated" data-animate="fadeInUp" value="Agendar Cita" />
                                            </div>
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']?>jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="<?Php echo $vParamsViewBootstrap['root_bootstrap_js']?>bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']?>jquery.scripts.min.js"></script><!-- modernizr -->
         
        <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_plugins']?>odometer/odometer.min.js"></script><!-- Odometer -->  
        <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']?>jquery.fatNav.js"></script><!-- hamburger menu list js functions -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOJUZlcETZwJGTD0yXh2wE_m6joi4IFNY" type="text/javascript"></script><!-- google maps -->
        <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']?>jquery.ui.map.full.min.js"></script><!-- google maps -->
        <script src='<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']?>api.js'></script> <!-- Contact form recaptcha -->
        <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']?>jquery-retina.js"></script><!-- retina -->
        <script src="<?Php echo $vParamsViewFrontEndLayout['root_frontend_js']?>volcanno.include.js"></script><!-- custom js functions -->        

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                // HAMBURGER MENU
                $.fatNav();

                //CONTACT FORM AJAX
                VolcannoInclude.contactFormAjax('contact-us');

                // GOOGLE MAPS START
                window.marker = null;

                function initialize() {
                    var map;

                    var LaPaz = new google.maps.LatLng(-16.510466108326387, -68.12341929820218);

                    var mapOptions = {
                        // SET THE CENTER
                        center: LaPaz,
                        // SET THE MAP STYLE & ZOOM LEVEL
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoom: 19,
                        // SET THE BACKGROUND COLOUR
                        backgroundColor: "#000000",
                        // REMOVE ALL THE CONTROLS EXCEPT ZOOM
                        panControl: false,
                        zoomControl: true,
                        mapTypeControl: true,
                        scaleControl: true,
                        streetViewControl: false,
                        overviewMapControl: false,
                        scrollwheel: false,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        }

                    };
                    
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);
                    
                    
                    var contentString = '<div>'+
                        '<div>'+
                        '</div>'+
                        '<h1 style="font-size: 20px; line-height: 28px; color: #000;">Centro Squemas</h1>'+
                        '<div>'+
                        '<p style="font-size: 14px; line-height: 15px; color: #000;"><b>Squemas Coworking</b>, ubicados en la mejor zona de La Paz, cerca del centro y muy accesible para los interesados de la zona sur.</p>'+
                        '</div>'+
                        '</div>';

                    var infowindow = new google.maps.InfoWindow({
                      content: contentString,
                      maxWidth: 200
                    });
                    
                    var marker = new google.maps.Marker({
                      position: LaPaz,
                      map: map,
                      title: "Centro Squemas"
                    });
                    
                    marker.addListener('click', function() {
                      infowindow.open(map, marker);
                    });                    
                    
                    

                    // SET THE MAP TYPE
                    /*var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
                    map.mapTypes.set('grey', mapType);
                    map.setMapTypeId('grey');*/
                }

                google.maps.event.addDomListener(window, 'load', initialize);

            });
            /* ]]> */
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-97047319-1', 'auto');
          ga('send', 'pageview');

        </script>         

    </body>
</html>
