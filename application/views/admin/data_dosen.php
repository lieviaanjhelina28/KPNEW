<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form dosen</h6>
    </div>


    <?php echo $this->session->flashdata('message'); ?>

    <div class="card-body">
      <form action="<?php echo base_url() . 'admin/form_dosen/dosen_selesai/';  ?>" method="post">
        <div class="table-responsive">
          <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Kebutuhan</th>
                <th>Keperluan</th>
                <th>Upload file</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($form_dosen as $fd) { ?>
                <tr>

                  <td><input type="hidden" name="id_dosen" value="<?php echo $fd->id_dosen; ?>" class="form-control"><?php echo $no++ ?></td>
                  <td><?php echo $fd->nama_dosen ?></td>
                  <td><?php echo $fd->NIK ?></td>
                  <td><?php echo $fd->kebutuhan ?></td>
                  <td><?php echo $fd->keperluan ?></td>
                  <td><input type="file" name="file_admin" onchange="uploads(this, '<?= $fd->id_dosen ?>')" class="form-control-file" id="file_admin"> </td>

                  <td>
                    <select name="status" class="status" data-id="<?php echo $fd->id_dosen; ?>">
                      <option value="0">Belum</option>
                      <option value="1">selesai</option>
                    </select>
                  </td>

                  <td>
                    <!-- <input type="submit" value="Simpan" class="btn btn-success btn-sm"> 
                <br> -->
                    <?php echo anchor('admin/form_dosen/download/' . $fd->file, '<div class="btn btn-primary btn-sm">Download</div'); ?>
              
                  </td>



                </tr>
              <?php } ?>

            </tbody>
          </table>
      </form>
      <input id="dataterakhir1" value="<?php echo $dd1 ?>" hidden>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->