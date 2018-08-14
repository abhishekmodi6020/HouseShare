<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--
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
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/jquery-ui.css" type="text/css" media="all">
	<!-- //Custom-Theme-Files -->
	<!-- Web-Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
	<!-- //Web-Fonts -->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="<?php echo base_url()?>application/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>application/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>application/js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
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
									<li><a   href="<?php echo site_url("home")?>">Home</a></li>
									<li><a  href="<?php echo site_url("reservations")?>">Reservations</a></li>
									<li><a  class="active" href="<?php echo site_url("expenses")?>">Expenses</a></li>
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
<div class="contact wthree-3">
	<div class="container">
	<h2 class="tittle"></h2>
    <div class="col-md-3 content-pro-head1 w3agile-6"></div>
  <div class="col-md-9 content-pro-head1 w3agile-6">
    <!--<h2 class="tittle">Expenses</h2> -->
    <div class="row">
                      <h3  >Update Existing Expense</h3>
                  </div>

                  <form class="form-horizontal"  method="post" action="<?php echo site_url("expenses/update_expense")?>">
										<input type="hidden" name="expenseid" value="<?php echo $expenseid?>">
                    <div class="control-group <?php echo !empty($descError)?'error':'';?>">
                      <label class="control-label">Description</label>
                      <div class="controls">
                          <input name="desc" type="text"  placeholder="Description" value="<?php echo $desc?> ">
                          <?php if (!empty($descError)): ?>
                              <span class="help-inline"><?php echo $descError;?></span>
                          <?php endif; ?>
                      </div>
                    </div>
                    <div class="control-group <?php echo !empty($amtError)?'error':'';?>">
                      <label class="control-label">Amount</label>
                      <div class="controls">
                          <input name="amt" type="text" placeholder="amount" value="<?php echo $amt?>">
                          <?php if (!empty($amtError)): ?>
                              <span class="help-inline"><?php echo $amtError;?></span>
                          <?php endif;?>
                      </div>
                    </div>
										<div class="control-group" >
											<label class="control-label">Date</label>
											<div class="controls">
													<input name='edate' type="text" id="datepicker" value="<?php echo $edate ?>">
											</div>
										</div>
                    <div class="control-group ">
                      <label class="control-label">Remarks</label>
                      <div class="controls">
                          <input name="remarks" type="text"  placeholder="remarks" value="<?php echo $remarks?>">
                          <?php if (!empty($remarksError)): ?>
                              <span class="help-inline"><?php echo $remarksError;?></span>
                          <?php endif;?>
                      </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a class="btn" href="manageexpenses.html">Back</a>
                      </div>
                  </form>

  </div>


	<div class="clearfix"> </div>
	</div>

</div>


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
