<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
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
<script>
function clear_cart() {
	var result = confirm('Are you sure want to clear all bookings?');
	
	if(result) {
		window.location = "<?php echo base_url(); ?>cart/remove/all";
	}else{
		return false; // cancel button
	}
}
</script>
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
<div style="margin:0px auto; width:600px;" >
	<div style="padding-bottom:10px">
		<h1 align="center" style="color: white;">Your Shopping Cart</h1>
		<input type="button " class="btn btn-success" value="Add more Dishes" onclick="window.location='products/retrieve'" />
	
	</div>
	<div style="color:#F00"><?php echo $message?></div>
	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
		<?php if ($cart = $this->cart->contents()): ?>
		<tr bgcolor="#FFFFFF" style="font-weight:bold">
			<td>Serial</td>
			<td>Name</td>
			<td>Price</td>
			<td>Qty</td>
			<td>Amount</td>
			<td>Options</td>
		</tr>
		<?php
		echo form_open('cart/update_cart');
		$grand_total = 0; $i = 1;
		
		foreach ($cart as $item):
			echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
			echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
			echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
			echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
			echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
		?>
		<tr bgcolor="#FFFFFF">
			<td>
				<?php echo $i++; ?>
			</td>
			<td>
				<?php echo $item['name']; ?>
			</td>
			<td>
				Rs <?php echo number_format($item['price'],2); ?>
			</td>
			<td>
				<?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
			</td.>
			<?php $grand_total = $grand_total + $item['subtotal']; ?>
			<td>
				$ <?php echo number_format($item['subtotal'],2) ?>
			</td>
			<td>
				<?php echo anchor('cart/remove/'.$item['rowid'],'Cancel'); ?>
			</td>
			<?php endforeach; ?>
		</tr>
		<tr>
			<td><p name="amount"><b>Order Total: Rs<?php echo number_format($grand_total,2); ?></b></p></td>
			<td colspan="5" align="right"><input type="button" class="btn btn-success" value="Clear Cart" onclick="clear_cart()">
					<input type="submit" value="Update Cart" class="btn btn-success">
					<?php echo form_close(); ?>
					<input type="button" value="Place Order" class="btn btn-success" name="placeorder" onclick="window.location='billing'"></td>
		</tr>
		<?php endif; ?>
	</table>
<p style="color: white;padding-top: 20px">NB: After selecting the dishes please click Update Cart before Place Order</p>
<p style="color: white;padding-top: 20px">NB: Please clear the cart if any dishes are already present before adding the dishes</p>

</div>
</div>
</body>
</html>