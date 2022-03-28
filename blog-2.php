<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CLYFSA | Mercado y Operaciones</title>

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
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Mercado y Operaciones</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#" class="active">Mercado y Operaciones</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- blog-2 area -->

    <section class="blog_tow_area">

        <div class="container">

           <div class="row blog_tow_row">
             <div class="chartidon">

    <div class="chartidaon"><h3>Balance Energético</h3><br>
<p>Demanda Máxima de Potencia (KW/MES)</p><br>
<br>
<h3 style="background: rgba(189,189,189,0.3)">Demanda Máxima de Potencia (KW/MES)</h3><p><br>
</p><canvas id="myCharton">

		</canvas></div></div>
				   <hr></hr>
    <div class="chartidon">

    <div class="chartidaon"><h3>Balance Energético</h3><br>
<p>Compra de Energía Eléctrica</p><br>
<br>
    <h3>Compra de Energía Eléctrica (kWh)</h3><p><br>
</p><canvas id="myChartc">

               </canvas>

		</div></div>
			 <hr></hr>

              <div class="chartidon">

    <div class="chartidaon"><h3>Balance Energético</h3><br>
<p>Demanda por Hora</p><br>
<br><h3 style="background: rgba(189,189,189,0.3)">Demanda por Hora (MW)</h3><p><br>
</p><canvas id="myChartb">

		</canvas></div></div>
               <script>
















	var ctx = document.getElementById('myCharton').getContext('2d');
				   var options = {
    showDatasetLabels : true
}
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets: [{
            label:['Potencia Contradada 2018'],
            //backgroundColor: 'rgb(40, 150, 150, 0.3)',
			backgroundColor: 'rgb(150, 200, 200	)',
            borderColor: 'rgb(150, 200, 200)',
            data: [20500, 20500, 20500, 16500, 16500, 16500, 16500, 16500, 16500, 20500, 20500, 20500],
			lineTension: 0,
			fill: false,
        },
				   {
			label:['DPC'],
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
			data: [19620, 20340, 21240, 18000, 16560, 16200, 15660,16560,16920,18720,21780,21780],
					   fill:false,

				   }
				  ]
    },

    // Configuration options go here
    options: {


		scales: {
    yAxes: [{
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



	var ctx = document.getElementById('myChartb').getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['00', '01', '02', '03', '04', '05', '06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24'],

        datasets: [{
            label: 'Demanda Horaria',
			//lineTension: 0,
            //backgroundColor: 'rgb(55, 160, 180)',
            borderColor: 'rgb(80, 95, 120)',
            data: [18, 16, 14, 10, 11, 13, 15, 16, 18, 18, 19, 19, 18, 17, 17, 16,16,17,18,20,21,20,20,19,19]
        }]
    },

    // Configuration options go here
    options: {




		scales: {





    yAxes: [{
    ticks: {
    beginAtZero: true,
    callback: function(value, index, values) {
              if(parseInt(value) >= 1000){
                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
              } else {
                return value + ' MW';
              }
            }
          }
        }]
      }



	}
});


	var ctx = document.getElementById('myChartc').getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets: [{
            label: 'Demanda Horaria',
            backgroundColor: 'rgb(50, 150, 50,0.04)',
            borderColor: 'rgb(50, 150, 50)',
            data: [10080000, 9180000, 9360000, 9360000, 7740000, 7560000, 7920000, 7740000, 7740000, 8280000, 9720000, 11520000],
			//fill:false,
        }]
    },

    // Configuration options go here
    options: {


	//animation: false,
    //legend: {display: true},
    //maintainAspectRatio: true,
    //responsive: true,
    //responsiveAnimationDuration: 2.5,

	//data:{call	return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");},
    scales: {
    yAxes: [{
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

	</script>
             </div>
   </div>





               <!-- <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-1.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
                <!--<div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-2.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
                <!--<div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-3.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
                <!--<div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-4.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
               <!-- <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-5.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
                <!--<div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-6.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
               <!-- <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-7.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
                <!--<div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-8.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
               <!-- <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <img src="images/blog/renovation/r-9.jpg" alt="">
                        <div class="renovation_content">
                            <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href="#">Commercial Construction &amp; Renovation</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>October 20, 2016</a>
                                <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>3</a>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>-->
           </div>
        </div>
    </section>
    <!-- End blog-2 area -->

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
