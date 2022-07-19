<?php 

$judul = 'Data Kerjaan';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = "SELECT * FROM kerjaan join kategori_kerjaan on kerjaan.id_kategori = kategori_kerjaan.id_kategori";
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
                    <h1>Data Kerjaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Kerjaan</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <br>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kerjaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no =1; foreach ($query as $k){?>
                    <tr align="center">
                        <td><?= $no++?>.</td>
                        <td><?= $k['nama_kerjaan']?></td>
                        <td><?= substr($k['deskripsi'],0,30)?>....</td>
                        <td><?= $k['kategori']?></td>
                        <td><img src="<?= folder_upload()?><?= $k['foto']?>" width="50px" alt=""></td>
                        <td>
                            <a href="edit.php?id=<?= $k['id_kerjaan']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="aksi.php?hapus_kerjaan=<?= $k['id_kerjaan']?>" onclick="return confirm('Apakah ingin menghapus data kerjaan ini ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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