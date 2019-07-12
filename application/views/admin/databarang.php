<div class="container-fluid"> 

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
              <br> 
                <a href="<?php echo base_url().'admin/tambah_barang'; ?>" class="btn btn-primary btn-xs">
            <span class="fa fa-plus"></span> Tambah Barang Baru</a></div>
                      
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
      <tr> 
        <th>No</th>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Tanggal Di Tambahkan</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody> 
      <?php
      $no = 1;
      foreach ($barang as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><img src="<?php echo base_url().'/assets/upload/'.$a->gambar; ?>" width="80" height="80" alt="gambar tidak ada"></td>
        <td><?php echo $a->nama_barang ?></td>
        <td><?php echo $a->stok ?></td>
        <td><?php echo $a->harga ?></td>
        <td><?php echo date('d F Y') ?></td>
        
        <td nowrap="nowrap">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_barang/'.$a->id_barang; ?>"><span class="fa fa-search"></span></a>
          <a class="btn btn-warning btn-xs" href="" data-toggle="modal" data-target="#hapusModal"><span class="fa fa-trash-alt"></span></a>
        </td>
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yaking Ingin Menghapus?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Hapus Jika Ingin Hapus.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url().'admin/hapus_barang/'.$a->id_barang; ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
