<div class="row">
					<!-- looping products -->
					  <?php foreach($buku as $buku) { ?>
					  <div class="col-sm-3 col-md-3">
						<div class="thumbnail" style="height: 370px;">
							<img src="<?php echo base_url();?>assets/upload/<?=$buku->gambar;?>" style="max-width:100%; max-height: 100%; height: 150px; width: 120px">

						  <div class="caption">
							<h4 style="min-height:40px;"><?=$buku->pengarang?></h4>
							<p><?=substr($buku->judul_buku,0,30).'..'?></p>
							<p><?=$buku->penerbit?></p>
							<p><?=substr($buku->thn_terbit,0,4)?></p>
							<p>
								<?=anchor('peminjaman/tambah_pinjam/' . $buku->id_buku, ' Booking' , [
									'class'	=> 'btn btn-primary',
									'role'	=> 'button'
								])?>
								<?=anchor('buku/katalog_detail/' . $buku->id_buku, ' Detail' , [
									'class'	=> 'btn btn-warning glyphicon glyphicon-zoom-in',
									'role'	=> 'button'
								])?>
							</p>
						  </div>
						</div>
					  </div>
					  <?php } ?>
					<!-- end looping -->
					</div>
				</div>