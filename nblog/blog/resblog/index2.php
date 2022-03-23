<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<script>
document.createElement = (function () {
   var _realCE = document.createElement;
   return function (name,options) {
      if (name.toLowerCase() === 'script') {
         try {
            throw "script added to page";
         }
         catch(e) {
            console.warn(e.message);
            console.warn(e.stack);
         }
      }
      return _realCE.apply(document,arguments);
   }
})();


</script>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>
            CLYFSA | Inicio
        </title>
        <!-- Favicon -->
        <link href="../../../images/favicon.png" rel="icon" type="image/x-icon"/>
        <!-- Bootstrap CSS -->
        <link href="../../../css/bootstrap.min.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="../../../vendors/animate/animate.css" rel="stylesheet">
        <!-- Icon CSS-->
        <link href="../../../vendors/font-awesome/../../../css/font-awesome.min.css" rel="stylesheet">
        <!-- Camera Slider -->
        <link href="../../../vendors/camera-slider/camera.css" rel="stylesheet">
        <!-- Owlcarousel CSS-->
        <link href="../../../vendors/owl_carousel/owl.carousel.css" media="all" rel="stylesheet" type="text/css">
        <!--Theme Styles CSS-->
        <link href="../../../css/style.css" media="all" rel="stylesheet" type="text/css"/>
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="../../../js/html5shiv.min.js"></script>
        <script src="../../../js/respond.min.js"></script>
        <![endif]-->

        <meta property="og:title" content="Compañía de Luz y Fuerza S.A." />
        <meta property="og:description" content="La Compañía de Luz y Fuerza S.A. Fundada en 1953. Es una compañía de distribución de energía eléctrica que provee a más de 15.000 Familias en la ciudad de Villarrica de forma segura, robusta y confiable." />
        <meta property="og:type" content="image" />
        <meta property="og:url" content="http://clyfsa.com/" />
        <meta property="og:image" content="http://clyfsa.com/../../../images/logoc.jpg" />
        <script src="https://kit.fontawesome.com/db5df82b13.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
        </div>
        <!-- Top Header_Area -->
        <section class="top_header_area">
            <div class="container">
                <ul class="nav navbar-nav top_nav">
                    <li>
                        <a href="tel:+59554142679">
                            <i class="fa fa-phone">
                            </i>
                            +595 541 42 679
                        </a>
                    </li>
                    <li>
                        <a href="mailto:clyfsa@clyfsa.com">
                            <i class="fa fa-envelope-o">
                            </i>
                            clyfsa@clyfsa.com
                        </a>
                    </li>
                    <!-- <li><a href="#"><i class="fa fa-clock-o"></i>Lun - Vie 07:00 - 17:00</a></li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right social_nav">
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=595982305305<&text=Hola! Tengo una consulta." target="_blank">
                            <i aria-hidden="true" class="fa fa-whatsapp">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/clyfsa/" target="_blank">
                            <i aria-hidden="true" class="fa fa-facebook">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/clyfsa/" target="_blank">
                            <i aria-hidden="true" class="fa fa-instagram">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/clyfsa" target="_blank">
                            <i aria-hidden="true" class="fa fa-linkedin">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Top Header_Area -->
        <!-- Header_Area -->
        <nav class="navbar navbar-default header_aera" id="main_navbar">
            <div class="container">
                <!-- searchForm -->
                <div class="searchForm">
                    <form action="#" class="row m0">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-search">
                                </i>
                            </span>
                            <input class="form-control" name="search" placeholder="Escriba y presione Enter" type="search">
                                <span class="input-group-addon form_hide">
                                    <i class="fa fa-times">
                                    </i>
                                </span>
                            </input>
                        </div>
                    </form>
                </div>
                <!-- End searchForm -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-md-2 p0">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" data-target="#min_navbar" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                        <a class="navbar-brand" href="../../../index.php">
                            <img alt="" class="imglogo" src="../../../images/0logo.png"/>
                        </a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-md-10 p0">
                    <div class="collapse navbar-collapse" id="min_navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown submenu">
                                <a href="../../../index.php">
                                    Inicio
                                </a>
                                <!--<ul class="dropdown-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>-->
                            </li>
                            <li class="dropdown submenu">
                                <a href="../../../about.html">
                                    Empresa
                                </a>
                                <!--<ul class="dropdown-menu other_dropdwn">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-2.html">About Us-2</a></li>
                            </ul>-->
                            </li>
                            <li class="dropdown submenu">
                                <a href="../../../factc.php">
                                    Clientes
                                </a>
                                <!--<ul class="dropdown-menu other_dropdwn">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-2.html">Services-2</a></li>
                            </ul>-->
                            </li>
                            <li>
                                <a href="../../../forms.html">
                                    Formularios
                                </a>
                            </li>
                            <!--<li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comience, detenga su servicio</a>
                            
                                <li><a href="blog.html">Problemas con el servicio</a></li>
                                <li><a href="blog-2.html">Prevensiówn y recuperación</a></li>
                           
                        </li>-->
                            <li class="dropdown submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    Sistemas de Distribución
                                </a>
                                <ul class="dropdown-menu other_dropdwn">
                                    <li>
                                        <a href="../../../planning.html">
                                            Planificación
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../blog-2.html">
                                            Mercado y Operaciones
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../maps.html">
                                            Mapas
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="../../../contact.html">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a class="nav_searchFrom" href="#">
                                    <i class="fa fa-search">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
            <!-- /.container -->
        </nav>
        <!-- End Header_Area -->
        <!-- Slider area -->
        <section class="slider_area row m0">
            <div class="slider_inner">
                <div class="iart" data-src="../../../images/appimg.jpg" data-thumb="../../../images/appimg.jpg">
                    <div class="camera_caption opac">

                        <div class="container">
                                <img src="../../../images/app.png" class="appicon fadeInRightBig animated" data-wow-delay="0.5s"></img>
                                <a class="wow fadeInLeftBig animated" data-wow-delay="0s" href="app.html" style="width: 80%; padding-top: 15px;padding-bottom: 15px">
                                    <h2>DESCARGAR <i class="fas fa-cloud-download-alt"></i></h2>
                                </a>
                        </div>
                    </div>
                </div>
                <div data-src="../../../images/slider-1.jpg" data-thumb="../../../images/slider-1.jpg">
                    <div class="camera_caption">
                        <div class="container">
                            <h5 class=" wow fadeInUp animated" style="padding-bottom: 0px">
                                Somos
                            </h5>
                            <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s" style="text-shadow: 1px 1px 0px rgba(97,151,181,1.00);padding-bottom: 0px; padding-top: 0px">
                                Compañía de
                            </h3>
                            <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s" style="text-shadow: 1px 1px 0px rgba(97,151,181,1.00); padding-top: 0px; padding-bottom: 10px">
                                Luz y Fuerza S.A.
                            </h3>
                            <img src="../../../images/logo.png" width="80%">
                                <p class=" wow fadeInUp animated" data-wow-delay="0.8s" style="color: #1B71C0">
                                    <i>
                                        ENERGÍA A TU SERVICIO...
                                    </i>
                                </p>
                                <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#goto" style="font-size: 40px">
                                    <i class="fa fa-angle-down">
                                    </i>
                                </a>
                            </img>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="goto">
        </div>
        <!--  
    <div class="container-name">
<div class="div1">
        
                
                   
                
                        
                        <h5 class=" wow fadeInUp animated">Bienvenidos</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">SOME RANDOM TEXT, TEXT, TEXT</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Random words to fill, random words to fill, random words to fill</p>
                    
                      
    
                   
                
            
        
        
        </div>
<div class="div2">
    
    <h5 class=" wow fadeInUp animated">Bienvenidos</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">SOME RANDOM TEXT, TEXT, TEXT</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Random words to fill, random words to fill, random words to fill</p>
    
    
</div>
</div>
    -->
        <!-- End Slider area -->
        <!-- Professional Builde -->
        <!-- <section class="professional_builder row">
        <div class="container">
           <div class="row builder_all">
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>Professional Builde</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>We Deliver Quality</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>Always On Time</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4>We Are Pasionate</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                </div>
           </div>
        </div>
    </section>-->
        <!-- End Professional Builde -->



<!-- BLOG -->
<!--<section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Latest Blog</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row latest_blog">-->
                
                <?php #getblogridposts("blogs");?>
                <!--bloggrids-->
                       
           <!-- </div>
        </div>
    </section>-->

<!-- End BLOG -->


        <section class="our_services_tow">
            <div class="container">
                <br>
                    <h1 style="vertical-align: middle; text-align: center">
                        OPERACIONES
                    </h1>
                    <br>
                        <br>
                            <br>
                                <h1 style="vertical-align: middle; text-align: center">
                                    <i class="fa fa-align-center">
                                    </i>
                                </h1>
                                <br>
                                    <br>
                                        <div class="architecture_area services_pages">
                                            <div class="portfolio_filter portfolio_filter_2" id="asdf">
                                                <ul>
                                                    <li class="active" data-filter="*">
                                                        <a href="../../../pagos.html">
                                                            <i aria-hidden="true" class="fa fa-check">
                                                            </i>
                                                            Pagos
                                                        </a>
                                                    </li>
                                                    <li data-filter=".building">
                                                        <a href="../../../reports.html">
                                                            <i aria-hidden="true" class="fa fa-exclamation">
                                                            </i>
                                                            Reportar
                                                        </a>
                                                    </li>
                                                    <!--<li data-filter=".webdesign"><a href="consultarm.html"><i class="fa fa-archive" aria-hidden="true"></i>Facturas</a></li>-->
                                                    <li data-filter=".webdesign">
                                                        <a href="../../../app.html">
                                                            <i aria-hidden="true" class="fab fa-android">
                                                            </i>
                                                            APP 
                                                        </a>
                                                    </li>
                                                    <!--<li data-filter=".adversting"><a href="clientes.html"><i class="fa fa-user" aria-hidden="true"></i>PERFIL</a></li>-->
                                                    <li data-filter=".adversting">
                                                        <a href="../../../factc.php">
                                                            <i aria-hidden="true" class="fas fa-file-invoice">
                                                            </i>
                                                            FACTURA DIGITAL
                                                        </a>
                                                    </li>
                                                    <!--<li data-filter=".painting"><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>BUTTON</a></li>-->
                                                </ul>
                                            </div>
                                            <!-- <div class="portfolio_item portfolio_2">
                   <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 painting building painting adversting">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ARCHITECTURE</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter-ation in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrass-ing hidden in the middle of text.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                            <a href="#" class="button_all">Contact Now</a>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="../../../images/feature-man-4.jpg" alt="">
                    </div>
                </div>-->
                                        </div>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </br>
                </br>
            </div>
        </section>
        <section>
            <a href="../../../blog-2.html">
                <img src="../../../images/gadget.svg"/>
            </a>
        </section>
        <section>
            
        </section>
        <!-- About Us Area 
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ABOUT US</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>WHO WE ARE</h2>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <a href="#" class="button_all">Contact Now</a>
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="../../../images/about_client.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
        <!-- What ew offer Area 
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>WHAT WE OFFER</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="../../../images/cns-1.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">BUILDING CONSTRUCTION</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="../../../images/cns-2.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        <a href="#">PROJECT PLANNING</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="../../../images/cns-3.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-gavel" aria-hidden="true"></i>
                        <a href="#">HOUSE RENOVATION</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What ew offer Area -->
        <!-- Our Features Area 
    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Features</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="../../../images/feature-man.jpg" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>WHY CHOOSE US</h2>
                        <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">30+ YEARS OF EXPERIENCE</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">QUALIFIED EXPERTS</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">Best Customer Services</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->
        <!-- Our Services Area 
    <section class="our_services_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Services</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_filter">
                    <ul>
                        <li data-filter="*" class="active"><a href=""> All</a></li>
                        <li data-filter=".photography"><a href="">ARCHITECTURE</a></li>
                        <li data-filter=".branding"><a href="">Building</a></li>
                        <li data-filter=".webdesign"><a href="">CONSTRUCTION</a></li>
                        <li data-filter=".adversting"><a href="">DESIGN</a></li>
                        <li data-filter=".painting"><a href="">Painting</a></li>
                    </ul>
                </div>
                <div class="portfolio_item">
                   <div class="grid-sizer"></div>
                    <div class="single_facilities col-xs-4 p0 painting photography adversting">
                       <div class="single_facilities_inner">
                            <img src="../../../images/gallery/sv-1.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign">
                       <div class="single_facilities_inner">
                            <img src="../../../images/gallery/sv-2.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 painting p0 photography branding">
                       <div class="single_facilities_inner">
                            <img src="../../../images/gallery/sv-3.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 adversting webdesign adversting">
                       <div class="single_facilities_inner">
                            <img src="../../../images/gallery/sv-4.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 painting adversting branding">
                       <div class="single_facilities_inner">
                            <img src="../../../images/gallery/sv-5.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign photography magazine adversting">
                       <div class="single_facilities_inner">
                            <img src="../../../images/gallery/sv-6.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->
        <!-- Our Team Area 
    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Team</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row team_row">
                <div class="col-md-3 col-sm-6 wow fadeInUp">
                   <div class="team_membar">
                        <img src="../../../images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                   <div class="team_membar">
                        <img src="../../../images/team/tm-2.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Emran Khan</a>
                            <h6>Web-Developer</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                   <div class="team_membar">
                        <img src="../../../images/team/tm-3.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                   <div class="team_membar">
                        <img src="../../../images/team/tm-4.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Jakaria Khan</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->
        <!-- Our Achievments Area 
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Achievments</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="achievments_row row">
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                    <span class="counter">800</span>
                    <h6>PROJECT COMPLETED</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">230</span>
                    <h6>HOUSE RENOVATIONS</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <span class="counter">1390</span>
                    <h6>WORKERS EMPLOYED</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <span class="counter">125</span>
                    <h6>AWARDS WON</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->
        <!-- Our Testimonial Area 
    <section class="testimonial_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our TESTIMONIALS</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="testimonial_carosel">
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="../../../images/testimonial-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Emran Khan</h4>
                            <h6>Web Developer</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="../../../images/testimonial-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Emran Khan</h4>
                            <h6>Web Developer</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="../../../images/testimonial-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Prodip ghosht</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="../../../images/testimonial-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Jakaria Khan</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="../../../images/testimonial-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Prodip ghosht</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="../../../images/testimonial-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Jakaria Khan</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our testimonial Area -->
        <!-- Our Featured Works Area 
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Our Featured Works</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="featured_gallery">
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-1.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-2.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-3.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-4.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-5.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-6.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-7.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="../../../images/gallery/gl-8.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Featured Works Area -->
        <!-- Our Latest Blog Area 
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Latest Blog</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row latest_blog">
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="../../../images/blog/lb-1.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Emran Khan</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="../../../images/blog/lb-2.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="../../../images/blog/lb-3.jpg" alt="">
                    <a href="#" class="blog_heading">Our Latest Project</a>
                    <h4><small>by  </small><a href="#">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Latest Blog Area -->
        <!-- Our Partners Area 
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Partners</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="partners">
                <div class="item"><img src="../../../images/client_logo/client_logo-1.png" alt=""></div>
                <div class="item"><img src="../../../images/client_logo/client_logo-2.png" alt=""></div>
                <div class="item"><img src="../../../images/client_logo/client_logo-3.png" alt=""></div>
                <div class="item"><img src="../../../images/client_logo/client_logo-4.png" alt=""></div>
                <div class="item"><img src="../../../images/client_logo/client_logo-5.png" alt=""></div>
            </div>
        </div>
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        <h4>Booking now if you need build your dream home.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="#" class="button_all">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->
        <!-- Footer Area -->
        <footer class="footer_area">
            <div class="container">
                <div class="footer_row row">
                    <div class="col-md-3 col-sm-6 footer_about">
                        <h2>
                            ACERCA DE CLYFSA
                        </h2>
                        <img alt="" src="../../../images/logo.png" width="70%">
                            <p>
                                La Compañía de Luz y Fuerza S.A. Fundada en 1953. Es una compañía de distribución de energía eléctrica que provee a más de 15.000 Familias en la ciudad de Villarrica de forma segura, robusta y confiable.
                            </p>
                            <ul class="socail_icon">
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=clyfsa@clyfsa.com<&text=Hola! Tengo una consulta." target="_top">
                                        <i aria-hidden="true" class="fa fa-whatsapp">
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/clyfsa/">
                                        <i aria-hidden="true" class="fa fa-facebook">
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i aria-hidden="true" class="fa fa-twitter">
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i aria-hidden="true" class="fa fa-linkedin">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </img>
                    </div>
                    <div class="col-md-3 col-sm-6 footer_about quick">
                        <h2>
                            Accesos
                        </h2>
                        <ul class="quick_link">
                            <li>
                                <a href="../../../about.html">
                                    <i class="fa fa-chevron-right">
                                    </i>
                                    Empresa
                                </a>
                            </li>
                            <li>
                                <a href="../../../forms.html">
                                    <i class="fa fa-chevron-right">
                                    </i>
                                    Formularios
                                </a>
                            </li>
                            <li>
                                <a href="../../../pagos.html">
                                    <i class="fa fa-chevron-right">
                                    </i>
                                    Pagos
                                </a>
                            </li>
                            <li>
                                <a href="../../../reports.html">
                                    <i class="fa fa-chevron-right">
                                    </i>
                                    Reportes
                                </a>
                            </li>
                            <li>
                                <a href="../../../planning.html">
                                    <i class="fa fa-chevron-right">
                                    </i>
                                    Planificación
                                </a>
                            </li>
                            <li>
                                <a href="../../../contact.html">
                                    <i class="fa fa-chevron-right">
                                    </i>
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer_about">
                        <h2>
                        </h2>
                        <a class="twitter" href="#">
                        </a>
                        <a class="twitter" href="#">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 footer_about">
                        <h2>
                            CONTACTO
                        </h2>
                        <address>
                            <p>
                                Para consultas o reclamos:
                            </p>
                            <ul class="my_address">
                                <li>
                                    <a href="#">
                                        <i aria-hidden="true" class="fa fa-envelope">
                                        </i>
                                        clyfsa@clyfsa.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+59554142679">
                                        <i aria-hidden="true" class="fa fa-phone">
                                        </i>
                                        (595) 541 42 679
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i aria-hidden="true" class="fa fa-map-marker">
                                        </i>
                                        <span>
                                            Capitán Demattei y Presidente Franco
Villarrica, PARAGUAY
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </address>
                    </div>
                </div>
            </div>
            <div class="copyright_area">
                Copyright 2019 All rights reserved. Designed by
                <a href="#">
                    CV.
                </a>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- jQuery JS -->
        <script src="../../../js/jquery-1.12.0.min.js">
        </script>
        <!-- Bootstrap JS -->
        <script src="../../../js/bootstrap.min.js">
        </script>
        <!-- Animate JS -->
        <script src="../../../vendors/animate/wow.min.js">
        </script>
        <!-- Camera Slider -->
        <script src="../../../vendors/camera-slider/jquery.easing.1.3.js">
        </script>
        <script src="../../../vendors/camera-slider/camera.min.js">
        </script>
        <!-- Isotope JS -->
        <script src="../../../vendors/isotope/imagesloaded.pkgd.min.js">
        </script>
        <script src="../../../vendors/isotope/isotope.pkgd.min.js">
        </script>
        <!-- Progress JS -->
        <script src="../../../vendors/Counter-Up/jquery.counterup.min.js">
        </script>
        <script src="../../../vendors/Counter-Up/waypoints.min.js">
        </script>
        <!-- Owlcarousel JS -->
        <script src="../../../vendors/owl_carousel/owl.carousel.min.js">
        </script>
        <!-- Stellar JS -->
        <script src="../../../vendors/stellar/jquery.stellar.js">
        </script>
        <!-- Theme JS -->
        <script src="../../../js/theme.js">
        </script>
    </body>
</html>
<script>
if(document.getElementById('ftnt_topbar_script')) {
    document.getElementById('ftnt_topbar_script').remove()
} else {
   var pluginHolder = document.createElement('div');
   document.body.appendChild(pluginHolder);
}
