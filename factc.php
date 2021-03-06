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


    <!--Theme Styles CSS-->
    <link href="../../../css/custom.css" media="all" rel="stylesheet" type="text/css"/>

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        if (screen.width <= 1024) window.location.replace("factcm.php")
    </script>



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

    <!-- End Banner area -->

    <!-- Not Found area -->
    <section class="not_found_area">
        <h2><b>Consulta</b></h2><h3>Detalle de Consumo</h3>
        <br>

        <img src="images/bill.svg" style="max-width: 80px">
        <br><br>
        <p>Ingrese correctamente sus datos para acceder a su factura</p>

<br><hr><br>

<div style="display: inline-block; width: 100%; margin: auto; height: 500px;">
    <div style="float: left; width: 40%; padding-left: 70px">
        <img src="images/inv.jpg" width="500px" ">
        <br><br>
        <p><b>Consult?? una factura anterior para obtener los datos necesarios</b></p>
    </div>
    <div style="float: left; text-align: center; width: 50%; padding-right: 10px; padding-right: 50px;">
        <form action="dashboard/assets/php/exoxc.php" class="search_error" method="post">

            <br>
            <h3>Introducir su c??digo de usuario</h3>
            <input type="number" name="userd" class="form-control" placeholder="C??digo de Usuario" min="1" max="99999" required >

        <br>
        <input type="number" name="nromed" class="form-control" placeholder="Ingrese los 4 ??ltimos n??meros de su medidor" maxlength="4" required>

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

            <input type="text" name="tel" class="form-control" placeholder="Ingrese el n??mero de Celular" maxlength="6" required>
            </div>
            </div>







        <button class="btn btn-primary" type="submit" style="width: 300px">Consultar</button><br><br>
        </form>
    </div>
</div>

		<!--No tiene una cuenta? <a href="#reg"><h3 id="reg">REG??STRATE</h3></a><br><br>
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
      <label for="validationCustom04">C??digo de Usuario</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="C??digo" required name="barrio">
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
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>  Acepto los T??rminos y Condiciones
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
