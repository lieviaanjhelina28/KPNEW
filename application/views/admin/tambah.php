  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengguna Sistem</h6>
      </div>
      <div class="card-body">
            <!--    <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?> -->
   <!--  <form action="<?php echo base_url() . 'admin/surat/';  ?>" method="post"> -->
         <?php echo $this->session->flashdata('message'); ?>
       <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newSubMenuModal">Tambah Data</a>

          <div class="table-responsive">

           

            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>NIK</th>
                  <th>NPM</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                 foreach ($tambah as $t) { ?>
                  <tr>
                    <th><?= $no++; ?></th>
                    <td><?php echo $t->nama?></td>
                     <td><?php echo $t->email?></td>
                     <td><?php echo $t->NIK?></td>
                     <td><?php echo $t->NPM?></td>
                     <td><?php echo $t->role_id?></td>
                     <td><?php echo $t->aktif?></td>
                     
              

                    <td><?php echo anchor('admin/surat/hapus/' . $t->id_user, '<div class="btn btn-danger btn-sm">Hapus</div>');  ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
       <!--  </form> -->
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/tambah/add'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                    <?php echo form_error('nama', ' <small class="text-danger pl-3">', '</small> '); ?>
                     </div>
            
                    <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    <?php echo form_error('email', ' <small class="text-danger pl-3">', '</small> '); ?>
                     </div>
             
                    <div class="form-group">
                    <input type="text" class="form-control" id="NIK" name="NIK" placeholder="NIK">
                     <?php echo form_error('NIK', ' <small class="text-danger pl-3">', '</small> '); ?>
                     </div>
      
                    <div class="form-group">
                    <input type="text" class="form-control" id="NPM" name="NPM" placeholder="NPM">
                    <?php echo form_error('NPM', ' <small class="text-danger pl-3">', '</small> '); ?>
                     </div>

                    <div class="form-group">
                      <select name="role_id" id="role_id" class="form-control">
                            <option value="">Pilih Role</option>
                            <?php foreach ($user_role as $ur) : ?>
                            <option value="<?php echo $ur->role; ?>"><?php echo $ur->role; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="aktif" id="aktif" checked>
                            <label class="form-check-label" for="aktif">
                                Status
                            </label>
                        </div>
                    </div>
                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div> 