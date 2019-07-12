<div class="x_panel" align="center">
  <div class="x_title">
      <h2><i class="fa fa-book"></i> Detail Barang</h2>
        <div class="clearfix"></div>
  </div> 
 
  <div class="x_content">
    <div class="row" >
      <div class="col-sm-3 col-md-3">
        <div class="thumbnail" style="height: auto; position: relative; left: 165%; width: auto;">
          <img src="<?php echo base_url();?>assets/upload/<?=$gambar;?>" style="max-width:100%; max-height: 100%; height: 150px; width: 120px">

          <div class="caption">
            <h4 style="min-height:40px;" align="center"><?=$nama_barang?></h4>
            <table class="table table-triped">
               <tr>
                <td>Nama Barang: </td><td><?=substr($nama_barang,0,30).'..'?></td>
              </tr>
              <tr>
                <td>Harga: </td><td><?=$harga?></td>
              </tr>
            <tr>
            <td>
                <label>Jumlah :</label>
                <input type="text" value="1" name="jumlah"/>  
               </td>
                </tr>
            </table>
            <p> 
              <a href="#" class="btn btn-primary" onclick="window.history.go(-1)"> Kembali</a>
              <?=anchor('keranjang/tambah_barang/' . $id, ' Pesan' , [
                'class' => 'btn btn-success',
                'role'  => 'button'
              ])?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
