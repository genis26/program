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
   <link href="<?php echo base_url()?>assets/vendor/datatanles/dataTables.bootstrap4.css" rel="stylesshet">

    <link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
</head>
</head>


  <body >
  <!-- Page Wrapper -->


<nav class="navbar navbar-expand-lg navbar-light navbar-right " style="background-color: #e3f2fd;" >
  <a class="navbar-brand" href="#">
    <img src="s" width="100" height="100" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navbar-collapse collapse   navbar-right " id="navbarNavDropdown">
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo base_url('user')?>"><i class="fas fa-fw fa-home" ></i>Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/kontak')?>"> <i class="fas fa-user"></i>Kontak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/menu')?>"> <i class="fas fa-store-alt"></i>Belanja</a>
      </li>
      <li class="nav-item">

        <a class="nav-link" href="<?php echo base_url('keranjang/lihat_keranjang')?>"><span class="badge badge-light">
        <?= $this->m_hijab->edit_data(array('id_user'=>$this->session->userdata('id_user')),'transaksi')->num_rows();
        ?>
          </span>
        <i class="fas fa-fw fa-shopping-basket" ></i> Keranjang</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-user-circle" ></i><?php echo "Hallo,<b>".$this->session->userdata('nama');?>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('user/logout')?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div> 
      </li>
    </ul>
  </div>
</nav>
