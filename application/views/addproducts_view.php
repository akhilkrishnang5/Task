<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Dishes</title>
</head>
<body>
<div align="center">
	<h1 align="center">Add Dishes</h1>
	<button onclick="location.href='<?php echo base_url();?>addproducts/add'">Add more Dishes</button>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			foreach ($x as $row){
				$id = $row->id;
				$name = $row->name;
				$description = $row->description;
				$price = $row->price;			
				//$price = $product['price'];
		?>
    	<tr>
        	<td><img src="<?php echo base_url();?>uploads/images/<?php echo $row->picture;?>" width="100" height="100"></td>
            <td><b><?php echo $name; ?></b><br />
            		<?php echo $description; ?><br />
                   Price:<big style="color:green">
                    Rs <?php echo $price; ?></big><br /><br />
                    <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('description', $description);
					echo form_hidden('price', $price);
					echo form_submit('add', 'Add to Cart');
					echo form_close();
					?>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>
</body>
</html>



