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
	<title>Update/Delete</title>
	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Premier Realty a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
	<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<!-- //Custom-Theme-Files -->
	<!-- Web-Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
	<!-- //Web-Fonts -->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<div class="header">
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

									<li><a class="active" href="adminmanageuser.html">Manage</a></li>
									<li><a href="index.html">Logout</a></li>
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
<div class="row">
<div class="col-md-4">
</br></br>
  <h2 class="tittle">Update/Delete</h2>
</div>

<div class="col-md-7">
<div class="about-bottom">
  <div class="bs-docs-example">
		<?php// echo form_open('admin_c/adminupdate') ?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>User Name</th>
					<th>User Role</th>
					<th></th>
					<th></th>
        </tr>
      </thead>
      <tbody>
				<?php foreach ($userdata as $user){?>
        <tr>
          <td><?php echo $user->fname?></td>
          <td><?php echo $user->lname?></td>
          <td><?php echo $user->username?></td>
          <td><?php echo $user->userrole?></td>
					<td><?php $updateString=base_url('admin_c/adminupdate/').$user->username;
					echo "<a class='btn btn-warning' href='".$updateString."'> Update</a>";?></td>
					<td><?php $deleteString=base_url('admin_c/admindelete/').$user->username;
					echo "<a class='btn btn-danger' href='".$deleteString."'> Delete</a>"; ?></td>
        </tr>
			<?php } ?>
      </tbody>
    </table>
    <forms>
      <div class="container">

        <!-- <div class="col-md-6">
          <a href="adminupdate.html"><button type="button" class="pull-right btn btn-default btn-lg">Update</button></a>
        </div>

        <div class="col-md-6">
          <button type="button" class="btn btn-default btn-lg">Delete</button><br>
        </div> -->
      </div>
    <!-- </form> -->

  </div>
</div>
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
