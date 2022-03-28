<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLYFSA | APP</title>

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

    <!--Theme Styles CSS-->
    <link href="../../../css/custom.css" media="all" rel="stylesheet" type="text/css"/>
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/db5df82b13.js" crossorigin="anonymous"></script>


</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Top Header_Area -->
    <?php include './components/headers/header-top.php'; ?>
    <!-- End Top Header_Area -->
    <!-- Header_Area -->
    <?php include './components/headers/header-menu.php'; ?>
    <!-- End Header_Area -->

    <!-- Not Found area -->
    <section class="not_found_area">
        <h2>DESCARGAR <i class="fab fa-android"></i></h2>
        <p>Disponible para Android</p><br>
        <a href="app/app.apk" download>
        <button class="btn btn-success" type="submit" style="width: 350px; height: 100px"><i class="fas fa-download" style="font-size: 40px"></i></button>
        </a>
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
    <?php include './components/footer/footer.php'; ?>
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
