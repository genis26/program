<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?=$title ?>
  </title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">


  <link href="<?php echo base_url()?>assets/menu/css/main.css" rel="stylesheet">
 
  <link href="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
</head>
</head>

<body >


<nav class="navbar navbar-expand-lg navbar-light navbar-right " style="background-color: #e3f2fd;" >
  <a class="navbar-brand" href="#">
    <img src="" width="30" height="30" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navbar-collapse collapse   navbar-right " id="navbarNavDropdown">
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo base_url('berada')?>"><i class="fas fa-fw fa-home" ></i>Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('berada/kontak')?>"> <i class="fas fa-user"></i>Kontak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('berada/menu')?>"><i class="fas fa-store-alt"></i>Belanja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-fw fa-shopping-basket" ></i> Keranjang</a>
      </li>
     
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-user" ></i> Login
        </a>
        <div class="container">
        
        
      <form class="dropdown-menu p-2"  method="post" action="<?php echo base_url('berada/proses_login');?>">
      <?php echo $this->session->flashdata('message');?>
      <div class="form-group">
      <label for="exampleDropdownFormEmail2">Email address</label>
      <input type="text" class="form-control form-control-user" 
       id="email" name="email" placeholder="Enter Email Address." value="<?php echo set_value('email');?>">
       <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
      </div>
      <div class="form-group">
     <label for="exampleDropdownFormPassword2">Password</label>
     <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
      <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?> 
       </div>
      <div class="text">
                    <a class="small" href="<?php echo base_url('berada/registration')?>">Daftar Account!</a>
                  </div>
                  <br>
  <button type="submit" class="btn btn-primary">login</button>
</form>
</div>
</li>
</nav>