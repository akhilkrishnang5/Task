<!DOCTYPE html>
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link " href="<?php echo site_url('Home/dashboard'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo site_url('Home/customerlist'); ?>">Customer Listing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Home/orderlist'); ?>">Order Listing</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link btn btn-success my-2 my-sm-0" href="<?php echo site_url('Home/logout'); ?>">Logout</a>
    </form>
  </div>
</nav>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($x1 as $row){ ?>
    <tr>
	  <td><?php echo $row->id;?></td>
	  <td><?php echo $row->name;?></td>
	  <td><?php echo $row->address;?></td>
	 </tr>
	<?php } ?>
  </tbody>
</table>  
<div class="bg"><div>               
</body>
</html>




