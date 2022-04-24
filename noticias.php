<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLYFSA | Noticias</title>

    <!-- Favicon -->
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=2462060330692461&autoLogAppEvents=1" nonce="2WwyPdiB"></script>
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Top Header_Area -->
    <?php include './components/headers/header-top.php'; ?>
    <!-- End Top Header_Area -->
    <!-- Header_Area -->
    <?php include './components/headers/header-menu.php'; ?>
    <!-- End Header_Area -->

    <div class="container">
        <div class="noticias">
            <h2 class="titulo">Noticias</h2>
            <?php include './components/lists/posts-list.php'; ?>
        </div>

    </div>




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
