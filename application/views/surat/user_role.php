  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Role</h6>
      </div>
      <div class="card-body">
               <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
   <!--  <form action="<?php echo base_url() . 'admin/surat/';  ?>" method="post"> 
 -->
       <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newSubMenuModal">Tambah Role</a>

          <div class="table-responsive">

           

            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Role</th>
               <!--    <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                 foreach ($user_role as $ur) { ?>
                  <tr>
                    <th><?= $no++; ?></th>
                    <td><?php echo $ur['role'];?></td>
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
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/surat/'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                    <input type="text" class="form-control" id="role" name="role" placeholder="Role">
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