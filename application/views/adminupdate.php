<!-- <!DOCTYPE html>
<html>
<head>
  <title>Admin_update</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head> -->
<body>
  <div class="contact wthree-3">
  	<div class="container">
  	<h2 class="tittle notCenter" >Manage User</h2>
    <div class="col-md-3 w3-agile-1">
    </div>
  	<div class="col-md-6 content-pro-head1 w3agile-6">
  		<!-- <h2 class="tittle">Register</h2> -->
  		<form method="post" action="<?php echo base_url();?>admin_c/updatevalidation">

  			<div class="form-group">
  				<input type="hidden" class="form-control" name='username'  value="<?php foreach ($user1 as $dhokla) {echo $dhokla->username;} ?>">
  			</div>
  				 <div  class="form-group">
  						<label for="fname">FirstName</label>
  						<input type="text" class="form-control" name='fname' value="<?php foreach ($user1 as $dhokla) {
                  echo $dhokla->fname;} ?>">
  				</div>
          <div  class="form-group">
             <label for="lname">LastName</label>
             <input type="text" class="form-control" name='lname' value="<?php foreach ($user1 as $dhokla) {
                 echo $dhokla->lname;} ?>">
         </div>


  			<div class="form-group">
  				<label for="email">Email :</label>
  				<input type="email" class="form-control" name="email" id="email" value="<?php foreach ($user1 as $dhokla) {
              echo $dhokla->emailid;} ?>">
  			</div>

        <div class="form-group">
  				<label for="phone">Phone:</label>
  				<input type="tel" class="form-control" name="phone" id="phone" value="<?php foreach ($user1 as $dhokla) {
              echo $dhokla->phnbr;} ?>">
  			</div>

				<!-- <div class="form-group">
				<label for="Userrole">UserRole:</label><br>
						<input type="radio"  name="Userrole" value="Owner">Owner<br>
						<input type="radio"  name="Userrole" value="Guest">Guest
				</div> -->

        <div class="form-group">
  				<label for="guest">Guest of:</label>
  				<input type="text" class="form-control" name="guest" id="guest" value="<?php foreach ($user1 as $dhokla) {
              echo $dhokla->guestOf;} ?>">
  			</div>

  		 <input type="submit" name="submit" class="btn btn-default btn-lg" value="Save"></button>
       <a href="">
         <button type="button" class="btn btn-default btn-lg">Cancel</button>
       </a>
  		</form>

  		<br/>
  		<a href="adminmanageuser.html" class="pull-right btn btn-default btn-lg">Admin Home</a>
  		<br/>

  	</div>


  	<div class="clearfix"> </div>
  	</div>
  </div>



<body>
</hmtl>
