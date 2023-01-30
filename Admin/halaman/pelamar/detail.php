<?php 

$judul = 'Data Pelamar';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$id = $_GET['id'];
$sql = " SELECT * FROM pengguna join kerjaan  WHERE pengguna.id_kerjaan = kerjaan.id_kerjaan AND id=$id";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);

$sql2 = " SELECT * FROM berkas WHERE id_pengguna = $id";
$query2 = mysqli_query($koneksi,$sql2);
?>

<!-- content -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pelamar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Data Pelamar</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <br>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Email Terkirim</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-data">
                <label for="">Nama</label>
                <input type="text" class="form-control" value="<?= $data['nama']?>" name="" disabled>
            </div>
            <div class="form-data">
                <label for="">Email</label>
                <input type="text" class="form-control" value="<?= $data['email']?>" name="" disabled>
            </div>
            <div class="form-data">
                <label for="">Nomor Telpon</label>
                <input type="text" class="form-control" value="<?= $data['telpon']?>" name="" disabled>
            </div>
            <div class="form-data">
                <label for="">Alamat</label>
                <input type="text" class="form-control" value="<?= $data['alamat']?>" name="" disabled>
            </div>
            <div class="form-data">
                <label for="">Melamar Perkerjaan</label>
                <input type="text" class="form-control" value="<?= $data['nama_kerjaan']?>" name="" disabled>
            </div>
            <br><hr>
            <div class="form-data">
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; while($berkas = mysqli_fetch_assoc($query2)) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?php if($berkas['nama_berkas'] == '1'){echo 'CV/RESUME/PORTFOLIO';}else{echo 'Surat Lamaran Kerja';}?></a></td>
                        <td><a href="<?= folder_upload().$berkas['berkas']?>" target="blank">Lihat File</a></td>
                        <td>
                          <a href="aksi.php?download=<?= $berkas['id']?>" class="btn btn-primary"><i class="fa fa-download"></i></a>
                          <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
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