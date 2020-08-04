  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Surat Dosen</h6>
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
       <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newSubMenuModal">Tambah Data</a>

          <div class="table-responsive">

           

            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama surat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                 foreach ($namas as $ns) { ?>
                  <tr>
                    <th><?= $no++; ?></th>
                    <td><?php echo $ns->nama_surat ?></td>
                    <td><?php echo anchor('admin/surat/hapus/' . $ns->id_surat, '<div class="btn btn-danger btn-sm">Hapus</div>');  ?></td>
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
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/surat/tambah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                    <textarea type="text" class="form-control" id="nama_surat" name="nama_surat" placeholder="Nama Surat"></textarea>
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