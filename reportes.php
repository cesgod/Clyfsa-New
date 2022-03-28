<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLYFSA | Reportes</title>

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

    <!-- Banner area -->
    <!--<section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>FORMULARIOS</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#" class="active">Formularios</a></li>
        </ol>
    </section>-->
    <!-- End Banner area -->

    <!-- blog-2 area -->

    <!-- End blog-2 area -->
    <!-- Our Featured Works Area -->

    <section class="featured_works row" data-stellar-background-ratio="0.3">

        <div class="tittle wow fadeInUp">
            <h2>Reportar un problema</h2>
            <h4>Seleccione el tipo de reclamo</h4><br>
            <form action="reports.php" method="post" class="needs-validation" style="width: 70%; text-align:left; vertical-align: middle; margin: auto">
<select class="form-control" style="width: 50%; text-align: center; vertical-align: middle; margin: auto" name="solicitud" required >
<option>CASA SIN LUZ</option>
<option>ZONA SIN LUZ</option>
<option>CABLE SUELTO</option>
<option>CABLE CHISPEANDO</option>
<option>TENSIÓN DEFICIENTE</option>
<option>MEDIDOR AVERIADO</option>
<option>EXPLOSIÓN</option>
<option>CHOQUE POR COLUMNA</option>
<option>POSTE CAÍDO</option>
<option>PRINCIPIO DE INCENDIO</option>
<option>TRANSFORMADOR AVERIADO</option>
<option>ALUMBRADO PÚBLICO</option>
</select>
       <br>
       <h4 style="color: ghostwhite; text-align: center">Ingrese su número de usuario</h4><br>


        <input type="search" name="coduser" class="form-control" placeholder="CÓDIGO DE USUARIO" style="width: 50%; text-align: center; vertical-align: middle; margin: auto" required>

        </div><br>

<br>


     <button class="btn btn-primary" type="submit" style="width: 200px" >Enviar Reclamo</button>

			 </div>

</form>


		</section>

    </section>
    <!-- End Our Featured Works Area -->

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
