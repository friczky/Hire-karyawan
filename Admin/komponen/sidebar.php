
<?php 

if (($_SESSION['role']) == '0') {
   
} elseif(($_SESSION['role']) == '1') {
    echo "<script>alert" ;
    echo "('Anda Tidak Memiliki Akses, Silahkan Login');" ;
    echo "window.location.href='../../../Auth/login.php';" ;
    echo "</script>" ;
} else {
    echo "<script>alert" ;
    echo "('Anda Tidak Memiliki Akses, Silahkan Login');" ;
    echo "window.location.href='../../../Auth/login.php';" ;
    echo "</script>" ;
}
    


$sql = "SELECT * FROM tentang" ;
$query = mysqli_query($koneksi,$sql) ;
$row = mysqli_fetch_array($query) ;

$id = $_SESSION['id'];
$sql2 = "SELECT * FROM pengguna WHERE id ='$id' ";
$query2 = mysqli_query($koneksi,$sql2);
$row2 = mysqli_fetch_array($query2);

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= home()?>" class="brand-link">
      <img src="<?= folder_upload()?><?= $row['logo']?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= folder_upload() ?><?php if($row2['foto'] == null){echo 'profile.png';}else{echo $row2['foto'];}?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['nama']?></a>
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
          <li class="nav-item">
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
              </p>
            </a>
          </li>

          <!-- halaman berkas  -->
          <li class="nav-item">
            <a href="<?= admin()?>halaman/berkas" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>
                Data Berkas
              </p>
            </a>
          </li>

         <!-- halaman master pengguna  -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Master Pengguna
                <i class="fas fa-angle-left right"></i>
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
              <i class="nav-icon fa fa-paper-plane"></i>
              <p>
                Email Terkirim
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