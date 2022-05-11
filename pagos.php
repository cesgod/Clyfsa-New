<?php require("./libs/puntos-pagos.php"); ?>
<?php $puntos = getPuntosPagos(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>
        CLYFSA | Pagos
    </title>
    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Camera Slider -->
    <link href="vendors/camera-slider/camera.css" rel="stylesheet">
    <!-- Owlcarousel CSS-->
    <link href="vendors/owl_carousel/owl.carousel.css" media="all" rel="stylesheet" type="text/css">
    <!-- Charts.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!--Theme Styles CSS-->
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <!--Theme Styles CSS-->
    <link href="../../../css/custom.css" media="all" rel="stylesheet" type="text/css" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                    <script src="js/html5shiv.min.js"></script>
                    <script src="js/respond.min.js"></script>
                    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
    </div>

    <!-- Top Header_Area -->
    <?php include './components/headers/header-top.php'; ?>
    <!-- End Top Header_Area -->
    <!-- Header_Area -->
    <?php include './components/headers/header-menu.php'; ?>
    <!-- End Header_Area -->
    <!-- Our Featured Works Area -->
    <section class="pagos-info" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row info-container">
                <div class="col-md-6 help">
                    <h3>¿Por qué medios puedo hacer los pagos?</h3>
                    <h4>Realizá tus pagos digitales desde
                </div>
                <div class="col-md-6">
                    <div class="formas">
                        <a href="https://www.infonet.com.py/">
                            <img src="images/bancard.png">
                        </a>
                        <a href="https://www.aquipago.com.py/">
                            <img src="images/aquipago_header.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <div class="row info-container factura">
                    <div class="col-md-6">
                        <h3>¿Con qué datos voy a pagar mi factura?</h3>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Con su factura de energía eléctrica o con el código de usuario,
                            puede abonar en los puntos adheridos habilitados para pago de factura del mes y último aviso.
                        </p>
                        <p>EN EFECTIVO Y CON PAGO DE TARJETA</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="puntos">
            <div class="container">
                <h2 class="pagos" id="pagos" style="color: #188bc9; background: #ffffff;">
                    <b>Consulta el punto de cobranza más cercano a tu ubicación</b>
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ($puntos as $key => $punto) : ?>
                        <div class="col-md-3 col-sm-4 col-xs-6 punto">
                            <div class="card">
                                <span class="title"><?php echo $punto["name"] ?></span>
                                <div class="info">
                                    <div class="item">
                                        <?php if ($punto["location"]) : ?>
                                            <a href="<?php echo $punto["location"] ?>" target="_blank">
                                                <span>
                                                    <i class="fa fa-map-marker"></i>
                                                    <?php echo $punto["address"] ?>
                                                </span>
                                            </a>
                                        <?php else : ?>
                                            <span>
                                                <i class="fa fa-map-marker"></i>
                                                <?php echo $punto["address"] ?>
                                            </span>S
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($punto["phone"]) : ?>
                                        <div class="item">
                                            <a href="tel:<?php echo $punto["phone"] ?>">
                                                <span>
                                                    <i aria-hidden="true" class="fa fa-phone"></i>
                                                    +<?php echo $punto["phone"] ?>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </section>

    <section class="call_min_area">
        <div class="container">
            <div class="call_btn">
                <a class="button_all" href="contacto.php">
                    CONTACTO
                </a>
                <a class="button_all" href="https://api.whatsapp.com/send?phone=595982305305&text=Hola! Tengo una consulta.">
                    CONSULTAS
                </a>
            </div>
        </div>
    </section>

    <!-- Footer Area -->
    <?php include './components/footer/footer.php'; ?>
    <!-- End Footer Area -->

    <script src="scripts/flot/jquery.flot.js" type="text/javascript">
    </script>
    <script src="scripts/flot/jquery.flot.pie.js" type="text/javascript">
    </script>
    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js">
    </script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js">
    </script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js">
    </script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js">
    </script>
    <script src="vendors/camera-slider/camera.min.js">
    </script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js">
    </script>
    <script src="vendors/isotope/isotope.pkgd.min.js">
    </script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js">
    </script>
    <script src="vendors/Counter-Up/waypoints.min.js">
    </script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js">
    </script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js">
    </script>
    <!-- Theme JS -->
    <script src="js/theme.js">
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
