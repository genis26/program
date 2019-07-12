<br>
<div class="container">
  <div class="row">

    <?php foreach($barang as $b) { ?>
    <div class="col-lg-3 col-lg-3">
    <div class="thumbnail" style="height: 400px;">
    <img src="<?php echo base_url();?>assets/upload/<?=$b->gambar;?>" 
    style="max-width:100%; max-height: 100%; height: 250px; width: 200px" class="img-thumbnail"> 

    <p class="text-left">Nama : <?=substr($b->nama_barang,0,10).'..'?></p>
    <p class="text-left">Harga : <?=$b->harga?></p>
    <a class="left">
                <?=anchor('barang/detail_barang/' . $b->id_barang, ' Detail' , [
                  'class' => 'btn btn-warning fas fa-eye',
                  'role'  => 'button'
                ])?>
                <?=anchor('keranjang/tambah_barang/' . $b->id_barang, ' pesan' , [
                  'class' => 'btn btn-warning fas fa-tags',
                  'role'  => 'button'
                ])?>
                </a>
              </p>
              </div>
            </div>
    <?php }
    ?>
    </div>

</div>
