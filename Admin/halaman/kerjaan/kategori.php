<?php 

$judul = 'Kategori Kerjaan';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori Kerjaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori Kerjaan</li>
            </ol>
          </div>
        </div>
      
   
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                <h1>Data Kategori</h1>
                </div>
                <br>
                <div class="form-group row">
                        <div class="col-sm-6">
                        <input type="text" class="form-control" name="kategori" placeholder="Masukan Nama Kategori">
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                </div>
                <br><hr>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr align="center">
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr align="center">
                            <td>1.</td>
                            <td>Kerjaan</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


    </section>
</div>
</div>




<?php include '../../komponen/footer.php'?>