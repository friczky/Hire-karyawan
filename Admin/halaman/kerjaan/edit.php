<?php 
$judul = 'Edit Kerjaan';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM kerjaan join kategori_kerjaan WHERE kerjaan.id_kerjaan='$id' AND kerjaan.id_kategori=kategori_kerjaan.id_kategori";
  $edit = mysqli_query($koneksi,$sql);
  $data = mysqli_fetch_assoc($edit);
}

$sql2 = "SELECT * FROM kategori_kerjaan";
$query = mysqli_query($koneksi,$sql2);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kerjaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kerjaan</li>
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
               Form Edit Kerjaan
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                  <div class="tab-pane" id="settings">
                    <form action="aksi.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" value="<?= $data['nama_kerjaan']?>" class="form-control" id="inputName" placeholder="Judul Kerjaan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                          <select name="id_kategori" id="" class="form-control">
                            <option value="<?= $data['id_kategori']?>"><?= $data['kategori']?> (Pilihan Saat Ini)</option>
                            <?php foreach($query as $k){?>
                              <option value="<?= $k['id_kategori']?>"><?= $k['kategori']?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="deskripsi" id="summernote" cols="30" rows="10"><?= $data['deskripsi']?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                         <input type="file" name="foto" class="form-control" id="customFile">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="hidden" name="id" value="<?= $data['id']?>">
                          <input type="hidden" name="foto_old" value="<?= $data['foto']?>">
                          <button type="submit" name="edit_kerjaan" class="btn btn-primary">Simpan</button>
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