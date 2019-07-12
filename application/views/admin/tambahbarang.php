<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Data Barang</h3>
              
              <br> 
              
<?php echo validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
<form action="<?php echo base_url().'admin/tambah_barang_act' ?>" method="post" enctype="multipart/form-data">
  
    <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="nama_barang" class="form-control col-lg-6">
      <?php echo form_error('nama_barang'); ?>
    </div>

    <div class="form-group">
      <label>Stok</label>
      <input type="text" name="stok" class="form-control col-lg-6">
      <?php echo form_error('stok'); ?>
    </div>

    <div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga" class="form-control col-lg-6">
      <?php echo form_error('harga'); ?>
    </div>

      <div class="form-group">
      <label>Gambar</label>
      <input type="file" name="gambar" class="form-control col-lg-6">
      <?php echo form_error('gambar'); ?>
    </div>

    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
    
    </div>
  </div>
  </div>
</form>
