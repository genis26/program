 <div class="container-fluid"> 

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
              
                </div>
                      
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
      <tr> 
        <th>No</th>
        <th>Id Transaksi</th>
        <th>Id User</th>
        <th>Tanggal</th>
        <th>Alamat</th>
        <th>Total Harga</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        foreach ($transaksi as $t) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $t->id_transaksi ?></td>
        <td><?php echo $t->id_user ?></td>
        <td><?php echo date('d F Y') ?></td>   
        <td><?php echo $t->alamat ?></td>
        <td><?php echo $t->total_bayar ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
