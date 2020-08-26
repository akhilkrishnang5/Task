
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
        <a class="nav-link active" href="<?php echo site_url('products/retrieve'); ?>">Food List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Home/index2'); ?>">Admin Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="bg">
<h1 class=" text-center text-light" style="padding-top: 10px" class="">Dishes</h1> 
  <table border="2" cellpadding="2px" width="400px" class="table table-dark">
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
                   Price:<big>
                    Rs <?php echo $price; ?></big><br /><br />
                    <?php
          echo form_open('cart/add');
          echo form_hidden('id', $id);
          echo form_hidden('name', $name);
          echo form_hidden('description', $description);
          echo form_hidden('price', $price);
          echo form_submit('add', 'Add to Cart',"class='btn btn-success'");
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