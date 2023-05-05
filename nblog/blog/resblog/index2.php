<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<script>
document.createElement = (function() {
    var _realCE = document.createElement;
    return function(name, options) {
        if (name.toLowerCase() === 'script') {
            try {
                throw "script added to page";
            } catch (e) {
                console.warn(e.message);
                console.warn(e.stack);
            }
        }
        return _realCE.apply(document, arguments);
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
    <link href="../../../images/favicon.png" rel="icon" type="image/x-icon" />
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
    <link href="../../../css/style.css" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../../../scripts/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../../../scripts/slick/slick-theme.css" />
    <!--Theme Styles CSS-->
    <link href="../../../css/custom.css" media="all" rel="stylesheet" type="text/css" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="../../../js/html5shiv.min.js"></script>
        <script src="../../../js/respond.min.js"></script>
        <![endif]-->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <meta property="og:title" content="Compañía de Luz y Fuerza S.A." />
    <meta property="og:description"
        content="La Compañía de Luz y Fuerza S.A. Fundada en 1953. Es una compañía de distribución de energía eléctrica que provee a más de 15.000 Familias en la ciudad de Villarrica de forma segura, robusta y confiable." />
    <meta property="og:type" content="image" />
    <meta property="og:url" content="http://clyfsa.com/" />
    <meta property="og:image" content="http://clyfsa.com/../../../images/logoc.jpg" />
    <script src="https://kit.fontawesome.com/db5df82b13.js" crossorigin="anonymous"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W3DXNSP4KS"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-W3DXNSP4KS');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
    </div>
    <!-- Top Header_Area -->
    <?php include '../../../components/headers/header-top.php'; ?>
    <!-- End Top Header_Area -->
    <!-- Header_Area -->
    <?php include '../../../components/headers/header-menu.php'; ?>
    <!-- End Header_Area -->
    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div class="iart" data-src="../../../images/appimg.jpg" data-thumb="../../../images/appimg.jpg">
                <div class="camera_caption opac">

                    <div class="container">
                        <img src="../../../images/app.png" class="appicon fadeInRightBig animated"
                            data-wow-delay="0.5s"></img>
                        <a class="wow fadeInLeftBig animated" data-wow-delay="0s" href="app.php"
                            style="width: 80%; padding-top: 15px;padding-bottom: 15px">
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
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s"
                            style="text-shadow: 1px 1px 0px rgba(97,151,181,1.00);padding-bottom: 0px; padding-top: 0px">
                            Compañía de
                        </h3>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s"
                            style="text-shadow: 1px 1px 0px rgba(97,151,181,1.00); padding-top: 0px; padding-bottom: 10px">
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

    <?php include '../../../components/home/ours-services.php'; ?>

    <section>
        <a href="../../../blog-2.php">
            <img src="../../../images/gadget.svg" />
        </a>
    </section>

    <!-- Footer Area -->
    <?php include '../../../components/footer/footer.php'; ?>
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
if (document.getElementById('ftnt_topbar_script')) {
    document.getElementById('ftnt_topbar_script').remove()
} else {
    var pluginHolder = document.createElement('div');
    document.body.appendChild(pluginHolder);
}