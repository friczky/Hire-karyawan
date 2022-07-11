<?php 
$judul = 'Upload Berkas Pendaftaran';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar-pelamar.php';
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
                        <label class="col-sm-2 col-form-label">Surat Lamaran Kerja</label>
                        <div class="col-sm-10">
                          <input type="file" name="surat" class="form-control" placeholder="Nama">
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">CV / Resmue</label>
                        <div class="col-sm-10">
                          <input type="file" name="cv" class="form-control" id="inputName" >
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
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>Surat Lamaran</th>
                        <th>CV</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td><a href="">Lihat berkas</a></td>
                        <td><a href="">Lihat berkas</a></td>
                    </tr>
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