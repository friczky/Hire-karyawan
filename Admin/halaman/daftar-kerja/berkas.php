<?php 
$judul = 'Upload Berkas Pendaftaran';
include '../../komponen/header.php';
include '../../komponen/navbar-pelamar.php';
include '../../komponen/sidebar-pelamar.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM berkas JOIN pengguna ON berkas.id_pengguna = pengguna.id WHERE id_pengguna = $id";
$query = mysqli_query($koneksi,$sql);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload Berkas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload Berkas</li>
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
               Form Upload Berkas
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <select name="" id="" class="form-control">
                            <option value="">Pilih Jenis Berkas</option>
                            <option value="CV/Resume/Portfolio">CV/Resume/Portfolio</option>
                            <option value="Surat Lamaran Kerja">Surat Lamaran Kerja</option>
                          </select>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">File (pdf,docx)</label>
                        <div class="col-sm-10">
                          <input type="file" name="berkas" class="form-control" id="inputName" >
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Upload</button>
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

            <div class="card">
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Download</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; while($berkas = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $berkas['nama']?>">Lihat berkas</a></td>
                        <td><a href="<?= folder_upload()?><?= $berkas['berkas']?>">Lihat berkas</a></td>
                        <td><a href="" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>
                </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php include '../../komponen/footer.php'?>