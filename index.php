<?php

	session_start();

//	include_once("function/koneksi.php");
//	include_once("function/helper.php");

	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
	function getStatus($page,$key){
		if($page == $key){
			return true;
		}
		return false;
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insight Candramawa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!--Chart-->
	<script type="text/javascript" src="Keperluan Chart/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="Keperluan Chart/Chart.js"></script>

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.html">Insight Candramawa</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Dashboard</a></li> 
								<li><a href="index.php?page=data">Data</a></li>
								<li><a href="index.php?page=feature">Feature</a></li>
								<li><a href="index.php?page=recommendation">Recommendation</a></li>
								<li><a href="index.php?page=about">About</a></li>
								<li><a href="index.php?page=contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div id="content">
				
			<?php
				$filename = "$page.php";
				
				if(file_exists($filename)){
					include_once($filename);
				}else{
					include_once("main.php");
				}
			?>
		
		</div>

<!---
		<div class="colorlib-services colorlib-bg-white">
			<div class="container">
				<p>Diagram 1</p>
				<canvas id="myChart"></canvas>
			</div>

			<div class="container">
				<p>Diagram 2</p>
				<canvas id="myChart2"></canvas>
			</div>

			<script>
				$(document).ready(function(){
					var chrt = $("#myChart").get(0).getContext("2d");
					var chrt2 = $("#myChart2").get(0).getContext("2d");

					var data = [
						{
							value: 252,
							color: "lightgrey",
							highlight: "darkgrey",
							label: "Positive"
						},
						{
							value: 108,
							color: "grey",
							highlight: "black",
							label: "Negative"
						},
					];

					var chart = new Chart(chrt).Doughnut(data);
					var chart = new Chart(chrt2).Doughnut(data);
					

				});
			</script>
		</div>
	-->

	
<!--
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Collaborate with your design team in a new way</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<span class="play"><a href="https://vimeo.com/channels/staffpicks/93951774" class="pulse popup-vimeo"><i class="icon-play3"></i></a></span>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-work-featured colorlib-bg-white">
			<div class="container">
				<div class="row mobile-wrap">
					<div class="col-md-5 animate-box">
						<div class="mobile-img" style="background-image: url(images/mobile-2.jpg);"></div>
					</div>
					<div class="col-md-7 animate-box">
						<div class="desc">
							<h2>Real template creation</h2>
							<div class="features">
								<span class="icon"><i class="icon-lightbulb"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-circle-compass"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-beaker"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
				<div class="row mobile-wrap">
					<div class="col-md-5 col-md-push-7 animate-box">
						<div class="mobile-img" style="background-image: url(images/mobile-1.jpg);"></div>
					</div>
					<div class="col-md-7 col-md-pull-5 animate-box">
						<div class="desc">
							<h2>Finish template creation</h2>
							<div class="features">
								<span class="icon"><i class="icon-lightbulb"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-circle-compass"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-beaker"></i></span>
								<div class="f-desc">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								</div>
							</div>
							<p><a href="#" class="btn btn-primary btn-outline with-arrow">Start collaborating <i class="icon-arrow-right3"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div> -->

	<!---	<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4 col-sm-4 text-center animate-box">
							<div class="counter-entry">
								<span class="icon"><i class="flaticon-ribbon"></i></span>
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="3875" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Youtube's video commentar we use for making this web App</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 text-center animate-box">
							<div class="counter-entry">
								<span class="icon"><i class="flaticon-church"></i></span>
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="2735" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">From that are positive commentar</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 text-center animate-box">
							<div class="counter-entry">
								<span class="icon"><i class="flaticon-dove"></i></span>
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="1140" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">From that are negative commentar</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->

<!--
		<div id="colorlib-subscribe" class="colorlib-subscribe" style="background-image: url(images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
						<h2>Already trusted by over 10,000 users</h2>
						<p>Subscribe to receive unapp tips from instructors right to your inbox.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Us</h4>
						<p>A web that implementing text annotation.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="index.php"><i class="icon-check"></i> Dashboard</a></li> 
								<li><a href="index.php?page=data"><i class="icon-check"></i> Data</a></li>
								<li><a href="index.php?page=feature"><i class="icon-check"></i> Feature</a></li>
								<li><a href="index.php?page=recommendation"><i class="icon-check"></i> Recommendation</a></li>
								<li><a href="index.php?page=about"><i class="icon-check"></i> About</a></li>
								<li><a href="index.php?page=contact"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

<!--
					<div class="col-md-3 colorlib-widget">
						<h4>Recent Blog</h4>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Photoshoot Technique</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Camera Lens Shoot</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Imahe the biggest photography studio</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
					</div> -->

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>Politeknik Negeri Bandung</li>
							<li>Jl. Gegerkalong Hilir, Ciwaruga,</li>
							<li>Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559</li>
							<li><a href="tel://1234547890"><i class="icon-phone"></i> + 1234 5478 90</a></li>
							<li><a href="mailto:candramawa@gmail.com"><i class="icon-envelope"></i> candramawa@gmail.com</a></li>
							<!--<li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>-->
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br> 
								Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

