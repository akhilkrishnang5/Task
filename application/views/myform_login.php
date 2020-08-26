<html>
 
<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
body, html {
  height: 100%;
}
.bg {
  background-image: url("https://wallpapercave.com/wp/wp3194552.png");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo site_url('Home'); ?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo site_url('products/retrieve'); ?>">Food List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo site_url('Home/index2'); ?>">Admin Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="bg">
<form action="<?php echo base_url('Home/post_login') ?>" method="post" accept-charset="utf-8">
  <div class="form-group">
    <div class="col-xs-12 col-md-6 ">
      <h1 style="color: white">Login</h1>
      <label for="username" style="color: white">Username</label>
      <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username">
      <span style="color: red"><?php echo form_error('username'); ?> </span><br>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-12 col-md-6 ">
      <label for="exampleInputPassword1" style="color: white">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
      <span style="color: red"><?php echo form_error('password'); ?> </span><br>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 ">
    <button type="submit" class="btn btn-success">Submit</button> 
  </div>
</form>   
<div>               
</body>
</html>