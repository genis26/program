

<div  class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12">
					<h2 class="title text-center"> <strong>Kontak</strong></h2>
					<?=$this->session->flashdata('pesan_form');?>

					</div>
				</div>
			</div>
    		<div class="row">
	    		<div class="col-sm-7">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Kirim Pesan</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="<?=base_url().'contact/pesan/';?>" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="nama" class="form-control" required="required" placeholder="Nama">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="pesan" id="message" required="required" class="form-control" rows="8" placeholder="Silahkan Tulis Pesan"></textarea>
				            </div>
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Kirim">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-5">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Info Kontak</h2>
	    				<address>

							<p><b><span class="glyphicon glyphicon-home"></span> Alamat :</b> Jakarta Barat, Jakarta </p>
							<br>
							<p><b><span class="glyphicon glyphicon-earphone"></span> Telepon :</b> 089643266572</p>
							<br>
							<p><b><span class="glyphicon glyphicon-phone"></span> Pin BBM :</b> 007</p>
							<br>
							<p><b><span class="glyphicon glyphicon-envelope"></span> Email :</b> hijab@gmail.com</p>
	    				</address>
	    				
	    			</div>
    			</div>
	 </div>
	 </div>
</div>