<?php 
$judul = 'Upload Berkas Pendaftaran';
include '../../komponen/header.php';
include '../../komponen/navbar-pelamar.php';
include '../../komponen/sidebar-pelamar.php';

$sql3 = "SELECT * FROM kerjaan";
$query3 = mysqli_query($koneksi,$sql3);

$sql = "SELECT * FROM pengguna join kerjaan on pengguna.id_kerjaan = kerjaan.id_kerjaan where pengguna.id = '$_SESSION[id]'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tentang Aplikasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tentang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
               Form Pendaftaran Kerja
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                  <div class="tab-pane" id="settings">
                    <form action="aksi.php" method="post" class="form-horizontal">

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" value="<?= $row2['nama']?>" class="form-control" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" name="email" value="<?= $row2['email']?>" class="form-control" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telpon (Whatsapp)</label>
                        <div class="col-sm-10">
                          <input type="text" name="telpon" value="<?= $row2['telpon']?>" class="form-control" placeholder="Masukan Nomer Telpon">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea name="alamat" placeholder="Masukan Alamat" id="" cols="30" rows="3" class="form-control"><?= $row2['alamat']?></textarea>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kerjaan</label>
                        <div class="col-sm-10">
                          <select name="id_kerjaan" class="form-control" id="">
                            <option value="<?= $row2['id_kerjaan']?>"><?php if($row2['id_kerjaan'] == null) { echo 'Plihi Loker' ;} else { echo $data['nama_kerjaan'].' ( Saat Ini )'; }?></option>
                            <?php foreach($query3 as $loker){?>
                              <option value="<?= $loker['id_kerjaan']?>"><?= $loker['nama_kerjaan']?></option>
                            <?php }?>
                          </select>
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="hidden" name="id" value="<?= $row2['id']?>">
                          <button type="submit" name="pelamar" class="btn btn-primary">Perbahrui</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php include '../../komponen/footer.php'?>