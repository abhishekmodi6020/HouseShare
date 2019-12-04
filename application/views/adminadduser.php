<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- <style type="text/css">

body{
  background-image: url(images/pic3.jpg);
}

</style> -->

</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">

<h2 class="text-center text-success">Add User</h2>
<br/>

<div class="col-sm-12">

<br/>
 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

<form action="#">

  <div class="form-group">
    <label for="UserID">UserID</label>
    <input type="text" class="form-control" id="email">
  </div>
     <div  class="form-group">
        <label for="FirstName">FirstName</label>
        <input type="text" class="form-control" >
    </div>
    <div  class="form-group">
        <label for="LastName">LastName</label>
        <input type="text" class="form-control" >
    </div>


  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>

  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>


    <div class="form-group">
    <label for="User-Role">User Role</label><br>
    <input type="radio"  name="User-Role"  value="Guest">Guest
          <input type="radio" name="User-Role"  value="Owner">Owner
  </div>


    <div class="form-group">
    <label for="Phone Number">Phone Number</label>
    <input type="text" class="form-control" id="Phone Number">
  </div>

        <div class="form-group">
    <label for="Guest OF">Guest Of</label>
    <input type="text" class="form-control" id="Guest OF">
  </div>





 <button type="submit" class="btn btn-default btn-lg">Submit</button>
    <a href="adminmanageuser.html"><button type="button" class="btn btn-default btn-lg">Cancel</button></a>

</form>
<br/>




    </div>
 </div>
   </div>
  </div>
</div>
</div>

</body>
</html>
