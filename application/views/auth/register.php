<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
            </div>

            <form class="user" method="post" action="<?php echo base_url('auth/register'); ?>">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>">
                <?php echo form_error('nama', ' <small class="text-danger pl-3">', '</small> '); ?>


              </div>

              <!-- email -->
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email', ' <small class="text-danger pl-3">', '</small> '); ?>
              </div>

              <!-- NPM -->
              <div class="form-group">
                <input type="number" class="form-control form-control-user" id="NPM" name="NPM" placeholder="NPM" value="<?php echo set_value('NPM'); ?>">
                <?php echo form_error('NPM', ' <small class="text-danger pl-3">', '</small> '); ?>
              </div>

              <!-- Tempat Lahir -->
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" value="<?php echo set_value('tempat_lahir'); ?>">
                <?php echo form_error('tempat_lahir', ' <small class="text-danger pl-3">', '</small> '); ?>
              </div>

              <!-- Tanggal Lahir -->
              <div class="form-group">
                <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal lahir" value="<?php echo set_value('tanggal_lahir'); ?>">
                 <small class="text pl-3">Format Tanggal Lahir : (Bulan/Tanggal/Tahun)</small>
                <?php echo form_error('tanggal_lahir', ' <small class="text-danger pl-3">', '</small> '); ?>
              </div>

              <!-- password -->
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                  <?php echo form_error('password1', ' <small class="text-danger pl-3">', '</small> '); ?>
                </div>

                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-user btn-block">
                Buat Akun </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?php echo base_url('auth'); ?>">Sudah Punya Akun? Masuk!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>