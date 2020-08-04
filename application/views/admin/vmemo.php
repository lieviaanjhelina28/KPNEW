 <!-- Begin Page Content -->
 <div class="container-fluid">
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-4s">
       <h6 class="m-0 font-weight-bold text-primary">Memo</h6>
     </div>
     <?php echo $this->session->flashdata('message'); ?>

<!--      <div class="panel-body">
      <br>
       <div class="container-fluid">
         <?= form_open('admin/Memo'); ?>
         <div class="form-group row">
             <label class="col-sm-2 col-form-label"><b>Nama</b></label>
             <div class="col-sm-10">
                <input type="text" readonly="" name="nama" class="form-control" id="nama" value="<?php echo $user['nama']; ?>">
             </div>
         </div>
         <div class="form-group row">
             <label for="inputPassword3" class="col-sm-2 col-form-label"><b>Pesan</b></label>
             <div class="col-sm-10">
               <textarea type="text" name="pesan" class="form-control" id="pesan" placeholder="Tulis Memo"></textarea>
         <?php echo form_error('pesan', ' <small class="text-danger pl-3">', '</small> '); ?>
             </div>
         </div>

        <!--<input type="hidden" name="status" class="form-control" id="status" value="0">
     </div>  -->
       
<!-- 
     <button type="submit" id="kirim" class="btn btn-primary btn-xl">Kirim</button>
     <?= form_close(); ?>

<hr> -->

     <div class="card-body">
      <!--  <form action="<?php echo base_url() . 'admin/memo/';  ?>" method="post"> -->

        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newSubMenuModal">Tambah Pesan</a>
         <div class="table-responsive">

           <table class="table table-bordered" id="example3" width="100%" cellspacing="0">
             <thead>
               <tr>
                 <th>No</th>
                 <th>Nama</th>
                 <th>Pesan</th>
                 <th>Status</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
               <?php
                $no = 1;
                foreach ($memo as $m) { ?>
                 <tr>
                   <td><?php echo $no++ ?></td>
                   <td><?php echo $m->nama ?></td>
                   <td><?php echo $m->pesan ?></td>

                       <td>
                  <select name="status" class="status" data-id="<?php echo $m->id_memo;?>">
                    <option value="0">Belum</option>
                    <option value="1">Selesai</option>
                  </select>
                </td>

                   <td onclick="javascript: return confirm('Anda yakin akan Menghapus? data yang sudah di hapus tidak bisa dikembalikan')"><?php echo anchor('Admin/memo/hapus/' . $m->id_memo, '<div class="btn btn-danger btn-sm">Hapus</div>');  ?></td>

                 </tr>
               <?php } ?>
             </tbody>
           </table>
       </form>
         <input id="dataterakhirmemo" value="<?php echo $bb ?>" hidden>
     </div>
   </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->

 <!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Memo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/memo/';  ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label"><b>Nama</b></label>
                      <div class="col-sm-10">
                     <input type="text" readonly class="form-control-plaintext" name="nama" class="form-control" id="nama" value="<?php echo $user['nama']; ?>">
                </div>
              </div>
                <div class="form-group row">
                   <!-- <label for="inputPassword3" class="col-sm-2 col-form-label"><b>Pesan</b></label> -->
                 <!--   <div class="col-sm-10"> -->
                   <textarea type="text" name="pesan" class="form-control" id="pesan" placeholder="Tulis Memo"></textarea>
                   <?php echo form_error('pesan', ' <small class="text-danger pl-3">', '</small> '); ?>
             <!-- </div> -->
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