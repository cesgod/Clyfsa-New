<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from blogs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($GLOBALS["___mysqli_ston"],$count) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	   <title>
	   		CLYFSA | <?php echo $row['title']; ?>
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
        <script src="https://kit.fontawesome.com/db5df82b13.js" crossorigin="anonymous"></script>

	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	    <script src="../../../js/html5shiv.min.js"></script>
	    <script src="../../../js/respond.min.js"></script>
	    <![endif]-->
	</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="tel:+59554142679"><i class="fa fa-phone"></i>(595) 541 42 679</a></li>
               	<li><a href="mailto:info@clyfsa.com"><i class="fa fa-envelope-o"></i>info@clyfsa.com</a></li>
               <!-- <li><a href="#"><i class="fa fa-clock-o"></i>Lun - Vie 07:00 - 17:00</a></li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://api.whatsapp.com/send?phone=595982305305&text=Hola! Tengo una consulta." target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a></li>
                <li><a href="https://www.facebook.com/clyfsa/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/clyfsa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/company/clyfsa" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Escriba y presione Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="../../../images/0logo.png" alt="" class="imglogo"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                            <a href="../../../index.php">Inicio</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="../../../about.html">Empresa</a>
                            <!--<ul class="dropdown-menu other_dropdwn">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-2.html">About Us-2</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="../../../clientes.html">Clientes</a>
                            <!--<ul class="dropdown-menu other_dropdwn">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-2.html">Services-2</a></li>
                            </ul>-->
                        </li>
                        <li><a href="../../../forms.html">Formularios</a></li>
                        <!--<li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comience, detenga su servicio</a>
                            
                                <li><a href="blog.html">Problemas con el servicio</a></li>
                                <li><a href="blog-2.html">Prevensiówn y recuperación</a></li>
                           
                        </li>-->
                         <li  class="dropdown submenu">
                         <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Sistemas de Distribución</a>
                         
                           <ul class="dropdown-menu other_dropdwn">
                           		<li><a href="../../../planning.html">Planificación</a></li>
                                <li><a href="../../../blog-2.html">Mercado y Operaciones</a></li>
                                <li><a href="../../../maps.html">Mapas</a></li>
                           </ul>
                         </li>
                        <li><a href="../../../contact.html">Contact</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->

    <!-- Banner area -->
    <!--<section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Acerca</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#" class="active">Empresa</a></li>
        </ol>
    </section>-->
    <!-- End Banner area -->

    <!-- About Us Area -->
    <?php 

    	$time = strtotime($row['date']);

		$mtime = date('M',$time);
		$dtime = date('d',$time);
		$ytime = date('Y',$time);

    ?>
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="blogadmin/images/<?php echo $row['photo']; ?>" alt="" >
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                            <a href="#"><?php echo $mtime; ?></a>
                            <a href="#"><?php echo $dtime; ?></a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#"><?php echo $row['title']; ?></a>
                        <a class="blog_admin" href="#"><i class="far fa-user"></i><small>Autor:  </small> <?php echo $row['author']; ?><?php echo "  |  ".$row['date']; ?></a><br><br>
                       <!--<ul class="like_share">
                            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>10</a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>-->
                        <?php echo $row['content']; ?>

                       <!--<div class="tag">
                            <h4>TAG</h4>
                            <a href="#">PAINTING</a>
                            <a href="#">CONSTRUCTION</a>
                            <a href="#">PAINTING</a>
                        </div>-->
                    </div>
                    
                </div>
                <div class="col-sm-4 widget_area">
                    <div class="resent">
                        <h3>RECENT POSTS</h3>
                        <?php getolderposts("blogs");?>
                        <!--olderpostsendhere-->
                    </div>
                    <div class="resent">
                        <h3>CATEGORIES</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Construction</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Architecture</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Building</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Design</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

   

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>ACERCA DE CLYFSA</h2>
                    <img src="../../../images/logo.png" alt="" width="70%"> 
                    <p>La Compañía de Luz y Fuerza S.A. Fundada en 1963. Es una compañía de distribución de energía eléctrica que provee a más de 15.000 Familias en la ciudad de Villarrica de forma segura, robusta y confiable.</p>
                    <ul class="socail_icon">
                       	<li><a href="https://api.whatsapp.com/send?phone=595982305305&text=Hola! Tengo una consulta." target="_top"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/clyfsa/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Accesos</h2>
                    <ul class="quick_link">
                        <li><a href="../../../about.html"><i class="fa fa-chevron-right"></i>Empresa</a></li>
                        <li><a href="../../../forms.html"><i class="fa fa-chevron-right"></i>Formularios</a></li>
                        <li><a href="../../../pagos.html"><i class="fa fa-chevron-right"></i>Pagos</a></li>
                        <li><a href="../../../reports.html"><i class="fa fa-chevron-right"></i>Reportes</a></li>
                        <li><a href="../../../planning.html"><i class="fa fa-chevron-right"></i>Planificación</a></li>
                        <li><a href="../../../contact.html"><i class="fa fa-chevron-right"></i>Contacto</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2> </h2>
                    <a href="#" class="twitter"> </a>
                    <a href="#" class="twitter"></a>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACTO</h2>
                    <address>
                        <p>Para consultas o reclamos:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@clyfsa.com</a></li>
                            <li><a href="tel:+59554142679"><i class="fa fa-phone" aria-hidden="true"></i>(595) 541 42 679</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Capitán Demattei y Presidente Franco
Villarrica, PARAGUAY </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2017 All rights reserved. Designed by <a href="http://craconsulting.group">CRA.</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="../../../js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../../js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="../../../vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="../../../vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="../../../vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="../../../vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="../../../vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="../../../vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="../../../vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="../../../vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="../../../js/theme.js"></script>
</body>
</html>
<script>
if(document.getElementById('ftnt_topbar_script')) {
    document.getElementById('ftnt_topbar_script').remove()
} else {
   var pluginHolder = document.createElement('div');
   document.body.appendChild(pluginHolder);
}
