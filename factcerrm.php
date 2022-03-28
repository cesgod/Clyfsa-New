<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLYFSA | Consulta de Facturas</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">
    <!-- Charts.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
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
               	<li><a href="mailto:info@clyfsa.com"><i class="fa fa-envelope-o"></i>clyfsa@clyfsa.com</a></li>
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
                    <a class="navbar-brand" href="index.html"><img src="images/0logo.png" alt="" class="imglogo"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                            <a href="index.html">Inicio</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="about.php">Empresa</a>
                            <!--<ul class="dropdown-menu other_dropdwn">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="about-2.html">About Us-2</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown submenu">
                            <a href="clientes.html">Clientes</a>
                            <!--<ul class="dropdown-menu other_dropdwn">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-2.html">Services-2</a></li>
                            </ul>-->
                        </li>
                        <li><a href="forms.php">Formularios</a></li>
                        <!--<li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comience, detenga su servicio</a>

                                <li><a href="blog.html">Problemas con el servicio</a></li>
                                <li><a href="blog-2.php">Prevensiówn y recuperación</a></li>

                        </li>-->
                         <li  class="dropdown submenu">
                         <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Sistemas de Distribución</a>

                           <ul class="dropdown-menu other_dropdwn">
                           		<li><a href="planning.php">Planificación</a></li>
                                <li><a href="blog-2.php">Mercado y Operaciones</a></li>
                                <li><a href="maps.php">Mapas</a></li>
                           </ul>
                         </li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->

    <!-- Banner area -->

    <!-- End Banner area -->

    <!-- Not Found area -->
    <section class="not_found_area">
        <b><h3>Consulta</h3></b><h4>Histórico de Consumo</h4>
        <br>

        <img src="images/bill.svg" style="max-width: 50px">

<br><br>

        <form action="dashboard/assets/php/exoxc.php" class="search_error" method="post">
             <?php

                echo '<h4 style="color:red;">'.$_SESSION['msgerror'].'</h4><br>';


            ?>
            <br>
            <br>
            <p>Introducir su código de usuario</p>
            <input type="number" name="userd" class="form-control" placeholder="Código de Usuario" min="1" max="99999" required >

        <br>
        <input type="number" name="nromed" class="form-control" placeholder="Ingrese los 4 últimos números de su medidor" maxlength="4" required>

        <br>
        <div class="row">

            <div class="col-md-3"><select name="prefcelular" id="prefcelular" class="form-control" style="height: 46px" required>
                        <option>0991</option>
                        <option>0992</option>
                        <option>0993</option>
                        <option>0994</option>
                        <option>0995</option>
                        <option>0996</option>
                        <option>0997</option>
                        <option>0998</option>
                        <option>0999</option>
                        <option>0961</option>
                        <option>0962</option>
                        <option>0963</option>
                        <option>0964</option>
                        <option>0965</option>
                        <option>0967</option>
                        <option>0968</option>
                        <option>0969</option>
                        <option>0971</option>
                        <option>0972</option>
                        <option>0973</option>
                        <option>0974</option>
                        <option>0975</option>
                        <option>0976</option>
                        <option>0977</option>
                        <option>0978</option>
                        <option>0979</option>
                        <option>0981</option>
                        <option>0982</option>
                        <option>0983</option>
                        <option>0984</option>
                        <option>0985</option>
                        <option>0986</option>
                        <option>0987</option>
                        <option>0988</option>
                        <option>0989</option>

                    </select>
            </div>
            <div class="col-md-9">

            <input type="text" name="tel" class="form-control" placeholder="Ingrese el número de Celular" maxlength="6" required>
            </div>
            <br><br>

            </div>








        <button class="btn btn-primary" type="submit" style="width: 300px">Consultar</button> <br><br> <br><br><div>
                <img src="images/inv.jpg" width="300px">
            </div><br><br>
        </form>

		<!--No tiene una cuenta? <a href="#reg"><h3 id="reg">REGÍSTRATE</h3></a><br><br>
<br >
<br>
<br>


<br>

        <p class="call_min_area" ></p>
        <section class="our_team_area"><br>
         <h2 >registrarse</h2>
        <p>Ingrese correctamente sus datos.</p><br>
<br>
        <div class="needs-validation" novalidate style="width: 50%; text-align:left; vertical-align: middle; margin: auto" action="post">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" value="" required name="name">
      <div class="valid-feedback">
        -
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Apellido</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" value="" required name="lastn">
      <div class="valid-feedback">
        -
      </div>
    </div>

  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Código de Usuario</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Código" required name="barrio">
      <div class="invalid-feedback">
        -
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Celular</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Whatsapp" required name="city">
      <div class="invalid-feedback">
        -
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Email</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="email" required name="email">
      <div class="invalid-feedback">
        -
      </div>
    </div>
  </div>
  <div class="form-group" style="width: 50%; text-align: center; vertical-align: middle; margin: auto">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>  Acepto los Términos y Condiciones
      </label>

    </div><br>

     <button class="btn" type="submit" >Enviar Solicitud</button>
  </div>
			 </div>-->



<br>
<br>

		</section>



    </section>
    <!-- End Not Found area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>ACERCA DE CLYFSA</h2>
                    <img src="images/logo.png" alt="" width="70%">
                    <p>La Compañía de Luz y Fuerza S.A. Fundada en 1953. Es una compañía de distribución de energía eléctrica que provee a más de 15.000 Familias en la ciudad de Villarrica de forma segura, robusta y confiable.</p>
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
                        <li><a href="about.php"><i class="fa fa-chevron-right"></i>Empresa</a></li>
                        <li><a href="forms.php"><i class="fa fa-chevron-right"></i>Formularios</a></li>
                        <li><a href="pagos.php"><i class="fa fa-chevron-right"></i>Pagos</a></li>
                        <li><a href="reportes.php"><i class="fa fa-chevron-right"></i>Reportes</a></li>
                        <li><a href="planning.php"><i class="fa fa-chevron-right"></i>Planificación</a></li>
                        <li><a href="contacto.php"><i class="fa fa-chevron-right"></i>Contacto</a></li>

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
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>clyfsa@clyfsa.com</a></li>
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
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
<script>
if(document.getElementById('ftnt_topbar_script')) {
    document.getElementById('ftnt_topbar_script').remove()
} else {
   var pluginHolder = document.createElement('div');
   document.body.appendChild(pluginHolder);
}
