<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	<title>HOUSE SHARE</title>
	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
	<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/style.css" type="text/css" media="all">
	<!-- //Custom-Theme-Files -->
	<!-- Web-Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
	<!-- //Web-Fonts -->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="<?php echo base_url()?>application/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>application/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>application/js/responsiveslides.min.js"></script>
		<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						pager: true,
						nav: true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>



</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<div class="header w3layouts-1">
		<!-- Top-Bar -->

				<div class="top-bar w3-1">
				<div class="container">
					<div class="header-nav w3-agileits-1">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1><a class="navbar-brand" href="index.html">HouseShare</a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
									<li><a  class="active" href="<?php echo site_url("home")?>">Home</a></li>
									<li><a  href="<?php echo site_url("reservations")?>">Reservations</a></li>
									<li><a  href="<?php echo site_url("expenses")?>">Expenses</a></li>
									<li><a  href="<?php echo site_url("payments")?>">Payments</a></li>
									<li><a href="<?php echo site_url("userinfo")?>">Account</a></li>
                  <li><a href="<?php echo site_url("sitemap")?>">Sitemap</a></li>
									<li><a href="<?php echo site_url("logout")?>">Logout</a></li>
								</ul>
								<!--<div class="search-box">
									<div id="sb-search" class="sb-search">
										<form>
											<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
											<input class="sb-search-submit" type="submit" value="">
											<span class="sb-icon-search"> </span>
										</form>
									</div>
								</div> -->
							</div><!-- /navbar-collapse -->
							<!-- search-scripts -->

							<!-- //search-scripts -->
						</nav>
					</div>
				</div>
			</div>
		<!-- //Top-Bar -->
		<!-- Slider -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img">
							<img src="<?php echo base_url()?>application/images/slide-1.jpg" class="img-responsive" alt="Manufactory">
						</div>
						<div class="slider-info w3ls-1">
							<h3>Manage Users</h3>
							<div class="underline"></div>
							<p> User can  be created, updated or deleted</p>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="<?php echo base_url()?>application/images/slide-2.jpg" class="img-responsive" alt="Manufactory">
						</div>
						<div class="slider-info">
							<h3>Manage Payment</h3>
							<div class="underline"></div>
							<p>Payment can be created, updated and deleted</p>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="<?php echo base_url()?>application/images/slide-3.jpg" class="img-responsive" alt="Manufactory">
						</div>
						<div class="slider-info w3ls-1">
							<h3>Manage Expenses</h3>
							<div class="underline"></div>
							<p>Expenses can be created, updated and deleted</p>

						</div>
					</li>



				</ul>

			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Slider -->
		</div>
		<!-- //Header -->
		<!-- agileinfo -->
		<div class="agileinfo">
		<div class="container">
		<h3>Welcome</h3>
		<p class="ttt">House Share is a website allowing users to know about their stay in house, visit of guests and all other management functionalities</p>
			<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="banner-info">
										<div class="col-md-7 agileinfo-left">
											<img src="<?php echo base_url()?>application/images/slide-1.jpg" alt="">
										</div>
										<div class="col-md-5 agileinfo-grid grid-one">
											<h4>Visitors</h4>
											<p>A guest can join the registered user to visit the house, But the user has to register for the guest</p>

										</div>
										<div class="clearfix"></div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-7 agileinfo-left">
											<img src="<?php echo base_url()?>application/images/slide-2.jpg" alt="">
										</div>
										<div class="col-md-5 agileinfo-grid grid-one">
											<h4>Reservations and Payments</h4>
											<p>Information about Reservations and Payments of user about how many guests are reserved and expenses made
																				 </p>

										</div>
										<div class="clearfix"></div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-7 agileinfo-left">
											<img src="<?php echo base_url()?>application/images/slide-3.jpg" alt="">
										</div>
										<div class="col-md-5 agileinfo-grid grid-one">
											<h4>User Info</h4>
											<p>Information about the users is all found here.
																			</p>

										</div>
										<div class="clearfix"></div>
									</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
		</div>
		</div>
		<!-- agileinfo -->



		<!-- footer -->
		<div class="footer w3-agile-1">
		<div class="container">

		<ul class="fb_icons2 agile-1">
			<li><a class="fb" href="#"></a></li>
			<li><a class="twit" href="#"></a></li>
			<li><a class="goog" href="#"></a></li>

		</ul>
		</div>
		<p class="copyright">© 2018 HouseShare. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
		<!-- footer -->
		<!--FlexSlider-->
		<link rel="stylesheet" href="<?php echo base_url()?>application/css/flexslider.css" type="text/css" media="screen" />
		<script defer src="<?php echo base_url()?>application/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
				$('body').removeClass('loading');
			}
			});
		});
		</script>
		<!--End-slider-script-->
		<script src="<?php echo base_url()?>application/js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
					 </script>
		</body>
		<!-- //Body -->
		</html>
