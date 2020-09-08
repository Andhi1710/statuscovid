<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>COVID-19 website  | Home :: PIKOBAR</title>
<link rel="shortcut icon" href="<?= base_url() ?>Frond/images/icon7.png">
<link href="<?= base_url() ?>Frond/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?= base_url() ?>Frond/css/style.css" type="text/css" rel="stylesheet" media="all">
<!--web-font-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<!--//web-font-->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Metge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="<?= base_url() ?>Frond/js/move-top.js"></script>
<script type="text/javascript" src="<?= base_url() ?>Frond/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
    <!--banner-->
	<div class="banner">
		<!--header-->
		<div class="container">
			<div class="header">			
				<div class="header-logo">
					<a href="<?= base_url() ?>Covid19"><img src="<?= base_url() ?>Frond/images/logo.png" alt="logo"/></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="<?= base_url() ?>Frond/images/menu-icon.png" alt=""/></span>		
					<ul class="nav1">
						<li><a href="<?= base_url() ?>Covid19" class="active">Home</a></li>
						<li><a href="<?= base_url() ?>DataChart">Uji Data</a></li>
					</ul>
					<!-- script-for-menu -->
					 <script>
					   $( "span.menu" ).click(function() {
						 $( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						  });
						 });
					</script>
					<!-- /script-for-menu -->
				</div>	
				<div class="home-social">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#" class="fb1"></a></li>
						<li><a href="#" class="gg1"></a></li>
					</ul>	
				</div>
				<div class="clearfix"> </div>
			</div>	
			<!--//header-->					
		</div>
	</div>					
	<!--//banner-->
	<div class="banner-bottom"> 
		<div class="container">
			<h3>Sekilas COVID-19</h3>
			<p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).</p>
			<p>Gejala umum berupa demam ≥380C, batuk kering, dan sesak napas. Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara terjangkit, atau pernah merawat/kontak erat dengan penderita COVID-19, maka terhadap orang tersebut akan dilakukan pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya. Daftar negara terjangkit dapat dipantau melalui http://infeksiemerging.kemkes.go.id.</p>
		</div>
	</div>
	<!--special-->
	<div class="special"> 
		<div class="container">
			<div class="col-md-5 special-grids">
				<h3>Gejala</h3>
				<p>banyak orang yang teridentifikasi COVID-19 hanya mengalami gejala ringan seperti batuk ringan, atau tidak mengeluh sakit, yang mungkin terjadi pada tahap awal penyakit. .</p>
				<h6>Demam</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
						60%
					</div>
				</div>
				<h6>Lemas</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
						80%
					</div>
				</div>
				<h6>Batuk Kering</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;">
						90%
					</div>
				</div>
				<h6>Kesulitan Bernafas</h6>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
						75%
					</div>
				</div>
			</div>	
			<div class="col-md-7 special-grids">
				<h3>Apa yang harus kita lakukan</h3>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/i0ZabxXmH4Y" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//special-->
	<!--portfolio-->
	<div class="portfolio"> 
		<div class="container">
			<h3>Haruskah saya khawatir terhadap penyakit COVID-19 ini?</h3>
			<p>Tetaplah tenang dan jangan panik. Carilah informasi yang benar dan akurat tentang perkembangan COVID-19 agar Anda mengetahui situasi wilayah Anda dan Anda dapat mengambil tindakan pencegahan yang wajar. Jika Anda berada di wilayah terjangkit COVID-19, Anda harus serius menghadapi risiko tersebut. Selalu jaga kesehatan dan perhatikan informasi dan saran dari pihak kesehatan yang berwenang.</p>
			<div class="portfolio-grids">
				<div class="col-md-4 port-grids view view-fourth">
					<img src="<?= base_url() ?>Frond/images/img2.jpg" class="img-responsive" alt=""/>
					<div class="mask">
                        <p>Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba.</p>
                    </div>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<img src="<?= base_url() ?>Frond/images/img3.jpg" class="img-responsive" alt=""/>
					<div class="mask">
                        <p>Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba.</p>
                    </div>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<img src="<?= base_url() ?>Frond/images/img4.jpg" class="img-responsive" alt=""/>
					<div class="mask">
                        <p>Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba.</p>
                    </div>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<img src="<?= base_url() ?>Frond/images/img5.jpg" class="img-responsive" alt=""/>
					<div class="mask">
                        <p>Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba.</p>
                    </div>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<img src="<?= base_url() ?>Frond/images/img6.jpg" class="img-responsive" alt=""/>
					<div class="mask">
                        <p>Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba.</p>
                    </div>
				</div>
				<div class="col-md-4 port-grids view view-fourth">
					<img src="<?= base_url() ?>Frond/images/img7.jpg" class="img-responsive" alt=""/>
					<div class="mask">
                        <p>Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba.</p>
                    </div>
				</div>				
				<div class="clearfix"> </div>
			</div>	
		</div>
	</div>	
	<!--footer-->
	<div class="footer"> 
		<div class="footer-text">
			<div class="container">
				<h3>Status Zona</h3>
				<p>Bisa memantau apakah suatu daerah tersebut aman dari zona larangan Covid-19.</p>
			</div>
		</div>	
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2028146.3723852152!2d106.4835967115657!3d-6.863811745041586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0xbc18a454fc8e9d7e!2sJawa%20Barat!5e0!3m2!1sid!2sid!4v1598437063872!5m2!1sid!2sid" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="copy-right">
			<div class="container">
				<div class="social-icons">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#" class="fb"></a></li>
						<li><a href="#" class="gg"></a></li>
					</ul>	
				</div>
				<p>Copyright © 2020 Andhi Hamzah. All rights reserved | Design by <a href="http://naivecovid-19.rf.gd/">Andhi</a></p>
			</div>
		</div>
	</div>	
	<!--smooth-scrolling-of-move-up-->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>