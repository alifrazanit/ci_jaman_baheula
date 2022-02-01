<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--line ini hanya akan aktif jika ada koneksi internet-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/337/css/bootstrap.css');?>">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="<?php echo base_url('home');?>">LauMart</a>
  <a href="<?php echo base_url('home');?>" class="active">Home</a>
  <a href="<?php echo base_url('barang');?>">Barang Jualan</a>
  <a href="<?php echo base_url('contact');?>">Contact</a>
  <a href="<?php echo base_url('signup');?>">Sign Up</a>
  <a href="<?php echo base_url('signupadm');?>">Sign Up Admin</a>
  <a href="<?php echo base_url('login');?>">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="headerbreadcrumb">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <?php echo $breadcrumb;?>      
      </ol>
    </div>
</div>
</div>
<div class="container">
  <?php echo $contents;?>
</div>


<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>