
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
body, html {
  height: 100%;
}
.bg {
  background-image: url("https://wallpapercave.com/wp/wp3194552.png");
  height: 100%;
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<div class="bg" style="padding-top: 20px">
<div align="center">
	<h1 align="center" style="color: white">Receipt</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			foreach ($x as $row){
				$id = $row['id'];
				$name = $row['name'];
				$email = $row['email'];
				$address = $row['address'];			
				$phone = $row['phone'];
		?>

    	<tr  style="color: white"><td><b>Order-id:- </b><?php echo $id; ?><br/></td><br/></tr>
    	<tr ><td><?php include("cart_v_w.php");?></td></tr>
	    <tr style="color: white"><td><b>Name:- </b><?php echo $name; ?><br/></td></tr>
        <tr style="color: white"><td><b>Email:- </b><?php echo $email; ?><br /></td></tr>
        <tr style="color: white"><td><b>Address:- </b><?php echo $address; ?><br/></td></tr>
        <tr style="color: white"><td><b>Phone number:- </b><?php echo $phone; ?><br /></td></tr>
		
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
		<input type="button" value="Goto Home" class="btn btn-success" onclick="window.location='home'" />
</div>
</div>
</body>
</html>





