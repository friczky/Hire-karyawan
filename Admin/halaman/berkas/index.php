<?php 

$judul = 'Data Berkas';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = "SELECT * FROM berkas join pengguna on berkas.id_pengguna = pengguna.id";
$query = mysqli_query($koneksi,$sql);

?>

<!-- content -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Berkas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Berkas</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <br>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Semua Berkas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Pemilik</th>
                        <th>Berkas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no =1; foreach ($query as $b){?>
                    <tr align="center">
                        <td><?= $no++?>.</td>
                        <td><?= $b['nama_berkas']?></td>
                        <td><?= $b['nama']?></td>
                        <td><a href="<?= folder_upload().$b['berkas']?>" class="btn btn-primary sm"><i class="fa fa-download"></i></a></td>
                        <td>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<?php include '../../komponen/footer.php'?>