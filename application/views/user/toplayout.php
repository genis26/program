<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> <?=$title ?> </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/menu/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/menu/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url()?>assets/menu/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- L -->
  <link href="<?php echo base_url()?>assets/menu/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- zoom -->
  <link href="<?php echo base_url()?>assets/menu/lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <!--  ini -->
  <link href="<?php echo base_url()?>assets/menu/lib/hover/hoverex-all.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url()?>assets/menu/css/style.css" rel="stylesheet">

  <link href="<?php echo base_url()?>assets/menu/css/main.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/menu/css/animate.css" rel="stylesheet">



<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
	  <?=anchor('user', 'Hijab', ['class'=>'navbar-brand'])?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
		<li><?php echo anchor('user', 'Home');?></li>
        <li>
			<?php
				$text_cart_url  = '<span class="fa fa-shopping-cart" aria-hidden="true"></span>';

				$text_cart_url .= ' Keranjang: '. $this->m_hijab->edit_data(array('id_barang'=>$this->session->userdata('id_barang')),'barang')->num_rows() .' barang';
			?>
			<?=anchor('lihat/lihat_keranjang', $text_cart_url)?>
		</li>
		<?php if($this->session->userdata('id')) { ?>
			<li><div style="line-height:50px;">Hai <b><?=$this->session->userdata('nama')?></b></div></li>
			<li><?php echo anchor('user/logout', 'Logout');?></li>
		<?php } else { ?>
			<li><?php echo anchor('berada', 'Login');?></li>
		<?php } ?>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
