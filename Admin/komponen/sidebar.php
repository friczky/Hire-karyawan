<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= home()?>" class="brand-link">
      <img src="<?= admin_assets() ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= admin_assets() ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
            <!-- halaman dashboard  -->
          <li class="nav-item menu-open">
            <a href="<?= admin()?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

            <!-- halaman master kerjaan  -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Kerjaan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= admin()?>halaman/kerjaan/tambah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kerjaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= admin()?>halaman/kerjaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kerjaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= admin()?>halaman/kerjaan/kategori.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori Kerja</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- halaman data pelamar  -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/pelamar" class="nav-link">
              <i class="nav-icon fa fa-user-astronaut"></i>
              <p>
                Data Pelamar
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          </li>

          <!-- halaman berkas  -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/berkas" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>
                Data Berkas
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          </li>

         <!-- halaman master pengguna  -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/pengguna" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Master Pengguna
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= admin()?>halaman/pengguna/tambah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= admin()?>halaman/pengguna" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
            </ul>
          </li>

          
            <!-- halaman email terkirim  -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/email" class="nav-link">
              <i class="nav-icon fa fa-at"></i>
              <p>
                Email Terkirim
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          </li>

          <!-- halaman data kontak  -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/kontak" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Data Kontak 
              </p>
            </a>
          </li>

          <!-- halaman tentang aplikasi  -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/tentang" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Tentang Aplikasi
              </p>
            </a>
          </li>

          <!-- halaman profile -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/profile" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profile 
              </p>
            </a>
          </li>
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>