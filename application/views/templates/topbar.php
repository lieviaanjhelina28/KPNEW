<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>



      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">


        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>

            <!-- Counter - Alerts -->

            <span class="badge badge-danger badge-counter notif"></span>
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" style="height: auto; overflow-y: auto;">
            <h6 class="dropdown-header">
              Alerts Centersss
            </h6>
            <div id="notif">
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 12, 2019</div>
                  <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
              </a>
            </div>
            <!-- 
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-success">
                  <i class="fas fa-donate text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 7, 2019</div>
                $290.29 has been deposited into your account!
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-warning">
                  <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 2, 2019</div>
                Spending Alert: We've noticed unusually high spending for your account.
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-warning">
                  <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 2, 2019</div>
                Spending Alert: We've noticed unusually high spending for your account.
              </div>
            </a> -->
            <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url('admin/dashboard'); ?>">Show All Alerts</a>
          </div>
        </li>

        <!-- memo -->
<!-- <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-book fa-fw"></i>
 -->
            <!-- Counter - Alerts -->

           <!--  <span class="badge badge-danger badge-counter notif"></span>
          </a> -->
          <!-- Dropdown - Alerts -->
        <!--   <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" style="height: auto; overflow-y: auto;">
            <h6 class="dropdown-header">
              Memo
            </h6>
            <div id="memo">
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 12, 2019</div>
                  <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
              </a>
            </div>
           
                <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url('admin/memo') ?>">Read More Memo</a>
              </div>
            </li> -->

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user['nama']; ?></span>
            <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>assets/img/foto.jpg">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo base_url('admin/surat'); ?>">
              <i class="far fa-file fa-sm fa-fw mr-2 text-gray-400"></i>
              Tambah Surat Dosen
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('admin/surat/surat2'); ?>">
              <i class="far fa-file fa-sm fa-fw mr-2 text-gray-400"></i>
             Tambah Surat Mahasiswa
            </a>
            <div class="dropdown-divider"></div>
            
            <a class="dropdown-item" href="<?php echo base_url('admin/memo'); ?>">
             <!--  <div id="memo"> -->
              <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
              Memo
            </a> 
      <!--     </div> -->
          <!--   <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('admin/tambah'); ?>">
              <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
              Tambah User
            </a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Keluar
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>