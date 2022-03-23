<?php
session_start();
$userall=$_SESSION['alldatac'];
#var_dump($_SESSION['api']);

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
    <script src="https://kit.fontawesome.com/db5df82b13.js" crossorigin="anonymous"></script>
     



    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

  


<!-- Latest compiled and minified JavaScript -->


    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

      
    
  

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
   

    
    
    
    
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Top Header_Area -->
    <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="tel:+59554142679"><i class="fa fa-phone"></i>(595) 541 42 679</a></li>
                <li><a href="mailto:clyfsa@clyfsa.com"><i class="fa fa-envelope-o"></i>clyfsa@clyfsa.com</a></li>
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
                            <a href="about.html">Empresa</a>
                            <!--<ul class="dropdown-menu other_dropdwn">
                                <li><a href="about.html">About Us</a></li>
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
                        <li><a href="forms.html">Formularios</a></li>
                        <!--<li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comience, detenga su servicio</a>
                            
                                <li><a href="blog.html">Problemas con el servicio</a></li>
                                <li><a href="blog-2.html">Prevensiówn y recuperación</a></li>
                           
                        </li>-->
                         <li  class="dropdown submenu">
                         <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Sistemas de Distribución</a>
                         
                           <ul class="dropdown-menu other_dropdwn">
                                <li><a href="planning.html">Planificación</a></li>
                                <li><a href="blog-2.html">Mercado y Operaciones</a></li>
                                <li><a href="maps.html">Mapas</a></li>
                           </ul>
                         </li>
                        <li><a href="contact.html">Contacto</a></li>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable({
                    "scrollX": true,
                    dom: 'Bfrtip',                   
                });




            } );
            
</script>
        
       
        <div style="width: 100%; text-align: center;">
        <table style="width: 900px; vertical-align: middle; margin: auto;" border="1" class="table" bordercolor="#cccccc" id="example">
            <thead>
                <th colspan="5" style="text-align: center;"><h2 style="color: #188bc9"><b>Factura de Energía Eléctrica</b></h2></th>
            </thead>
            <tbody>
                <tr><td colspan="5"><h3><b>
                <?php
                    if ($_SESSION['codTipoConex']==6524) {
                        echo "Exoneración de Consumo";
                    }else{
                        echo "Detalle de Consumo";
                    }
                ?>
                    
                        

                    </b></h3></td></tr>
                <tr><td colspan="5"><p style="font-size: 20px"></p>
        <p><b></b></p></td></tr>
                <tr>
                <td ><h4><b>Usuario Nº:</b></h4></td><td ><h4> <?php echo $_SESSION['userid']; ?></h4></td><td><b>Comprobante Nº</b></td><td colspan="2"><?php echo $_SESSION['nroComprobante'];?></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><b>Fecha de emisión: </b></td><td style="vertical-align: middle;"><?php echo $_SESSION['fechaEmision'];?></td><td style="vertical-align: middle;"><b>Tarifa aplicada: </b></td><td colspan="2"><?php echo $_SESSION['categoria'];?></td>
                </tr>
                <tr>
                     <td><h4><b>Consumo:</b></h4></td><td ><h4 style="color: #188bc9"><?php echo $_SESSION['consumo']; ?> kWh.</h4></td>
                     <td><b>Periodo de consumo: </b></td><td colspan="2"><?php echo $_SESSION['fechaAnterior']." - ".$_SESSION['fechaActual']?></td>
                </tr>
                <tr>
                    

                    <td><b>Estado Factura: </b></td><td>

                        <?php 

                            if ($_SESSION['estadoFactura']<>'PAGADA') {
                               echo '<h5 style="color: #ff0000">'.$_SESSION['estadoFactura'].'</h5>';
                            }else{
                                echo '<h5 style="color: #188bc9"><b>'.$_SESSION['estadoFactura'].'</b></h5>';    
                            }
                            



                        ?>
                            

                        </td>
                     <td><b>Días facturados: </b></td><td colspan="2"><?php echo $_SESSION['diasfac'];?></td>
                </tr>
                <tr>
                    <td><b>Fecha de Vencimiento: </b></td><td><?php echo $_SESSION['fechaVencimiento'];?></td>
                    <td colspan="3" rowspan="" style="vertical-align: middle; text-align: center;">
                        <h3 style="color: #188bc9"><b>Detalle de Facturación</b></h3>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3" colspan="2" style="vertical-align: middle;" >
                        <img src="images/bill.svg" style="max-width: 100px">
                        <button class="btn btn-success" id="downloadpdf" onclick="myFunction()" type="submit" style="width: 100%;">
                        <a style="color: #ffffff;" href="<?php echo $_SESSION['url'];?>"  download >
                            <h3>DESCARGAR <i class="far fa-file-pdf"></i></h3>
                        </a>
                        </button>
                        <button class="btn btn-info" id="b" style="display: none; width: 100%;">
                        <a href="pagos.html"  style="color: #ffffff;">
                            <h3>PAGOS <i class="fas fa-credit-card"></i></h3>
                        </a>
                        </button>
                     </td>
                    <td><p><h4><b>Deudas del mes:</b></h4></p></td><td colspan="2"><p>Gs. <?php echo $_SESSION['saldoMesActual'];?></p></td>
                </tr>
                <tr>
                    <td><p><h4><b>Deudas Anteriores: </b></h4></p></td><td colspan="2"><p>Gs. <?php echo $_SESSION['totalDeuda'];?></p></td>
                </tr>
                <tr>
                    
                     <td><h3><b>TOTAL A PAGAR</b></h3></td><td colspan="2"><p><b><h3 style="color: #188bc9">Gs. <?php echo $_SESSION['tapagar'];?></h3><b></p></td>
                </tr>
                <tr style="height: 300px;">
                    
                    <td colspan="5">
                        
                            <canvas id="myChart">
                            </canvas>
                            <br><br>
                      

                    </td>
                </tr>
            </tbody>            
        </table>
        
         <?php 
        if ($_SESSION['codTipoConex']=='6524') {
            echo "<br>
            
            <h3 style='color:green';margin-right: 5px; margin-left: 5px; line-height : 20px;></h3><br>
            <form class='search_error' style='line-height : 22px;'><p style='text-align: justify; padding-right:15px; padding-left:15px'></p></form>";

        }else{
            echo "<br>        
            <h3 style='color:red';margin-right: 5px; margin-left: 5px; line-height : 20px;></h3><br>
            <form class='search_error' style='line-height : 22px;'><p style='text-align: justify; padding-right:15px; padding-left:15px'></p></form>";

        }
        
         ?>
        </div>

        <!--<form>
            <br><br><br>
            <img src="images/bancard.png">
            <br>
            <a href="https://www.bancard.com.py/" class="btn btn-info" style="width: 100%" >
                 <h3>REALIZAR PAGO</h3>
            </a>
        </form>-->
        
   

                <div class="col-xs-11 blog_content">
                    <hr>
                    


<script>
function myFunction() {
  var x = document.getElementById("downloadpdf");
  var y = document.getElementById("b");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}
</script>

                    

<script>
$(document).ready(function() {
  $.ajax({
        url: "/dashboard/assets/php/thedata.php",
        success: function(result) {
          
            var chart_data = ["120", "127.5", "139.5"];
            console.log("result", result);
            chart_data = JSON.parse(result);
            var chart_labels = chart_data[1];
            var ctx = document.getElementById('myChart').getContext('2d');
            var chartColors = {
            blue: 'rgb(54, 162, 235)',
            light: 'rgb(150, 200, 200 )'
            };
            var options = {
                showDatasetLabels : true
            }


        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: chart_labels,
                datasets: [{
                    label:['Historial de Consumo'],
                    //backgroundColor: 'rgb(40, 150, 150, 0.3)',
                    backgroundColor: 'rgb(150, 200, 200 )',
                    borderColor: 'rgb(150, 200, 200)',
                    data: chart_data[0],
                    lineTension: 0,
                    fill: false,
                },{
                    label:['Consumo Actual'],
                    backgroundColor: 'rgb(54, 162, 235)',
                //  backgroundColor: 'rgb(150, 200, 200 )',
                    borderColor: 'rgb(54, 162, 235)',
                    data: chart_data[3],
                    lineTension: 0,
                    fill: false,
                },

                          ]
            },

            // Configuration options go here
            options: {
                responsive: true,
            maintainAspectRatio: false,
            scaleShowValues: true,
            scales: {
            xAxes: [{
            stacked: true,
             ticks: {
                    autoSkip: false,
                    maxRotation: 90,
                    minRotation: 90,
                    autoSkip: false,
                    lineHeight: 4.5
                },
            
            }],
            yAxes: [{
            stacked: true,
            scaleLabel: {
            display: true,
            labelString: 'kWh'
            },               
            ticks: {
            beginAtZero: true,
            callback: function(value, index, values) {
                      if(parseInt(value) >= 1000){
                        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                      } else {
                        return value;
                      }
                    }
                  }
                }]
              }
                
                
            }
        });
        }});
});                                  
</script> 
                    </div>
                        
                    </div>
                    <hr>
                </div>
                <br><br><br><br><br><br>
     

        
 


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
                    <p>La Compañía de Luz y Fuerza S.A. fué fundada en el año 1953. <br>Es una Compañía de distribución de energía eléctrica que suministra a más de 16.000 clientes en la ciudad de Villarrica de forma segura, robusta y confiable.</p>
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
                        <li><a href="about.html"><i class="fa fa-chevron-right"></i>Empresa</a></li>
                        <li><a href="forms.html"><i class="fa fa-chevron-right"></i>Formularios</a></li>
                        <li><a href="pagos.html"><i class="fa fa-chevron-right"></i>Pagos</a></li>
                        <li><a href="reports.html"><i class="fa fa-chevron-right"></i>Reportes</a></li>
                        <li><a href="planning.html"><i class="fa fa-chevron-right"></i>Planificación</a></li>
                        <li><a href="contact.html"><i class="fa fa-chevron-right"></i>Contacto</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about" style="padding-top: 10px">
                    <h2>CONTACTO</h2>
                    <address>
                        <p>Para consultas o reclamos:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>clyfsa@clyfsa.com</a></li>
                            <li><a href="tel:+59554142679"><i class="fa fa-phone" aria-hidden="true"></i>(+595) 541 42 679</a></li>
                            <li><a href="tel:+59554142679"><i class="fa fa-whatsapp" aria-hidden="true"></i>(+595) 982 305 305</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Capitán Demattei y Presidente Franco</span></a></li>
                            <li><a href="#"><i class="" aria-hidden="true"></i>       Villarrica - Paraguay</></a></li>
                            
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
