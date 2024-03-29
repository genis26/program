
 
  <div class="container">

     <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Account!</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('berada/registration')?>">
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" 
                          id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value ('nama');?>">
                    <?php echo form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" 
                          id="email" name="email" placeholder="Alamat Email" value="<?php echo set_value ('email');?>">
                    <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                   <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" 
                          id="password" name="password" placeholder="Password">
                     <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?> 
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Daftar Account
               </button>
               
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('berada/login');?>">Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


