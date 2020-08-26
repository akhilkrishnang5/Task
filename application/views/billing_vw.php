<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing Info</title>
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
        <a class="nav-link" href="<?php echo site_url('Home/index2'); ?>">Admin Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="bg" style="padding-top: 20px">
<form name="billing" method="post" action="<?php echo base_url().'billing/save_order' ?>" >
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center" style="color: white;padding-top: 5px">Billing Info</h1>
        <table border="0" cellpadding="1px" >
        	<tr style="color: white"><td>Order Total:</td><td><strong name="amount">$<?php echo number_format($grand_total,2); ?></strong></td></tr>
            <tr style="color: white"><td>Your Name:</td><td><input type="text" name="name" value = "<?php echo set_value('name'); ?>"/></td></tr>
            <tr style="color: white"><td><?php  if(form_error('name')){ echo "<span style='color:red'>".form_error('name')."</span>";} ?></td></tr>
            <tr style="color: white"><td>Address:</td><td><input type="text" name="address" value = "<?php echo set_value('address'); ?>"/></td></tr>
            <tr style="color: white"><td><?php  if(form_error('address')){ echo "<span style='color:red'>".form_error('address')."</span>";} ?></td></tr>
            <tr style="color: white"><td>Email:</td><td><input type="text" name="email" value = "<?php echo set_value('email'); ?>"/></td></tr>
            <tr style="color: white"><td><?php  if(form_error('email')){ echo "<span style='color:red'>".form_error('email')."</span>";} ?></td></tr>
            
            <tr style="color: white"><td>Phone:</td><td><input type="text" name="phone" value = "<?php echo set_value('phone'); ?>"/></td></tr>
            <tr style="color: white"><td><?php  if(form_error('phone')){ echo "<span style='color:red'>".form_error('phone')."</span>";} ?></td></tr><br>

            <tr><td>&nbsp;</td><td><input type="submit" value="Place Order" class="btn btn-success" /></td></tr>
        </table><br>
    <p style="color: white"> NB: Payment can only be done through Googlepay, Phonepay, Paytm and COD</p>
    <p style="color: white">During Online Payment please mention your Name and Order id in Comment section</p>   
	</div>
</form>
</div>
</body>
</html>