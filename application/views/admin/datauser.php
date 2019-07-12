 
<div class="container-fluid"> 
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
              <br> 
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
      <tr>
        <th>No</th>
        <th>Nama User</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Tanggal Gabung</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($user as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nama ?></td>
        <td><?php echo $a->alamat ?></td>
        <td><?php echo $a->email ?></td>
        <td><?php echo date('d F Y') ?></td>
        <td nowrap="nowrap">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_user/'.$a->id_user; ?>"><span class="fa fa-search"></span></a>
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
          <a class="btn btn-primary" href="<?php echo base_url().'admin/hapus_user/'.$a->id_user; ?>">Hapus</a>
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
</div>