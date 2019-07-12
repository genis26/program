<div class="container-fluid"> 

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Data Transaksi</h3>
              <br> 
             </div>                       
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
						<tr>
							<th>No</th>
							<th>Gambar</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Pilihan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							foreach ($keranjang as $b){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><img src="<?php echo base_url();?>assets/upload/'.$b->gambar; ?>" width="70"></td>
							<td style="max-width: 200px"><?php echo $b->harga; ?></td>							
							<td></td>
							
							</form>
							<td>
								<a class="btn btn-sm btn-danger" href="<?php echo base_url().'keranjang/hapus_keranjang/'
								.$b->id_barang; ?>"><span class="glyphicon glyphicon-remove"></span></a>
								<br/>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</td>
	</tr>
	<tr><td colspan="3"><hr></td></tr>
	<tr>
		<td align="left">
			<a class="btn btn-sm btn-primary" href="<?php echo base_url().'member'; ?>"><span class="glyphicon glyphicon-delete"></span> Pilih Lagi</a>
		</td>
		<td>
			&nbsp;
		</td>
		<td align="right">
			<a class="btn btn-sm btn-success" href="<?php echo base_url().'peminjaman/selesai_booking/'.$this->session->userdata('id_agt'); ?>"><span class="glyphicon glyphicon-delete"></span> Lanjut tansaksi</a>
		</td>
	</tr>
</table>
</div>
</div>
