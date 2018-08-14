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
	<title>HouseShare</title>
	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
	<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/bookingstyle.css" type="text/css" media="all" /><!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/font-awesome.min.css"><!--fontawesome-css-->

	<!-- //Custom-Theme-Files -->
	<!-- Web-Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- //Web-Fonts -->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="<?php echo base_url()?>application/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>application/js/bootstrap.min.js"></script>

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
								<h1><a class="navbar-brand" href="userIndex.html">HouseShare</a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
									<li><a   href="<?php echo site_url("home")?>">Home</a></li>
									<li><a class="active" href="<?php echo site_url("reservations")?>">Reservations</a></li>
									<li><a  href="<?php echo site_url("expenses")?>">Expenses</a></li>
									<li><a  href="<?php echo site_url("payments")?>">Payments</a></li>
									<li><a href="<?php echo site_url("userinfo")?>">Account</a></li>
									<li><a href="<?php echo site_url("sitemap")?>">Sitemap</a></li>
									<li><a href="<?php echo site_url("logout")?>">Logout</a></li>
								</ul>

							</div><!-- /navbar-collapse -->

						</nav>
					</div>
				</div>
			</div>
		<!-- //Top-Bar -->
		<div class="banner">
			<div class="bann-info">
			</div>
		</div>
		<!-- //Slider -->
	</div>
	<!-- //Header -->
	<section class="booking-agile">
	<h1></h1>
	<div class="headbooking-agile">
		<form action="<?php if(!empty($srchstatus)){echo site_url("reservations/bookroom");} else{echo site_url("reservations/searchRoom");} ?>" method="post">
				<div class="bookingleft-agile">
					<h2>make a reservation</h2>
							<div class="arrival-agile">
								<p>check-in date</p>
								<input name="cIn" placeholder="Check in" class="date" id="datepicker" type="text" value="<?php if (!empty($cIn)){echo $cIn ;}  ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
							</div>
							<div class="departure-agile">
								<p>check-out date</p>
								<input name="cOut" placeholder="Check out" class="date" id="datepicker1" type="text" value="<?php if (!empty($cOut)){echo $cOut ;}  ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" />
							</div>
							<div class="clear"></div>
								<div class="guest-agile">
									<p># Rooms</p>
										<select name="nbrRooms">
											<?php
												if (empty($srchstatus)){
													echo "<option value=1>1</option>";
													echo "<option value=2>2</option>";
												}
												else{
													echo "<option value='".$nbrRooms."'> $nbrRooms</options>";
												}
											  ?>

										</select>
								</div>
								<div class="room-agile">
									<p>Room Type</p>
										<select name="roomType">
										<?php if(empty($srchstatus)){
										  echo "<option value='"."Double"."'.>Double</option>";
										  echo "<option value='"."Suite"."'.>Suite</option>";
											echo "<option value='"."Any"."'.>Combination</option>";
											}
											else{
												echo "<option value='".$roomType."'>$roomType</option>";
											}
											?>
										</select>
								</div>
								<div class="clear"></div>

								<div class="clear"></div>
								<div class="name-agile">
									<p>First name</p>
									<input type="text" name="fname" placeholder="first name" value="<?php if (!empty($fname)){echo $fname ;}  ?>">
								</div>
								<div class="last-agile">
									<p>last name	</p>
									<input type="text" name="lname" placeholder="last name" value="<?php if (!empty($lname)){echo $lname ;}  ?>">
								</div>
								<div class="clear"></div>
									<div class="submit-agile">
										<input type="submit" value="check availability">
									</div>
									<div class="clear"></div>

					</div>
	<div class="bookingright-agile">
	<h3>Room Details</h3>

					<div class="room-agile">
						<p>room 1</p>
							<select name="room1" >
								<?php
									if (!empty($roomdetails)){
										foreach($roomdetails as $row)
										{

												echo "<option value='".$row->RoomNbr."'>".$row->RoomNbr."-".$row->RoomType."</option>";
										}
									}
								?>
							</select>
					</div>

				<div class="mobile-agile">
					<div class="room-agile">
						<p>room 2</p>
							<select name="room2">
								<?php
									if ((!empty($roomdetails)) && $nbrRooms=='2'){
										foreach($roomdetails as $row)
										{
												echo "<option value='".$row->RoomNbr."'>".$row->RoomNbr."-".$row->RoomType."</option>";
										}
									}

								?>
							</select>
					</div>
				</div>
				<div class="clear"></div>
				<div class="room-agile">
					<p>room condition</p>
						<select name="roomCondition">
							<option value="clean">Clean</option>
							<option value="used">Used</option>
						</select>
				</div>
				<div class="clear"></div>
				<div class="submit-agile">
					<input type="submit" value="Confirm">
				</div>
				<br><br><br>
				<div class="email-agile">
					<div class="mail-agile">
						<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
					</div>
					<div class="address-agile">
						<p>email</p>
						<span><a href="mailto:wdm@example.com">wdm@example.com</a></span>
					</div>
					<div class="clear"></div>

				</div>
	</div>
	<div class="clear"></div>
	</form>
	</div>
	</section>
	<!--start-date-piker-->
			<link rel="stylesheet" href="<?php echo base_url()?>application/css/jquery-ui.css" />
			<script src="<?php echo base_url()?>application/js/jquery-ui.js"></script>
				<script>
					$(function() {
					$( "#datepicker,#datepicker1" ).datepicker();
					});
				</script>
	<!-- /End-date-piker -->



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
</body>
<!-- //Body -->
</html>
