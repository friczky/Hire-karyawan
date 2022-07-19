<?php 

$judul = 'Data Pelamar';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = " SELECT * FROM pengguna join kerjaan  WHERE pengguna.id_kerjaan = kerjaan.id_kerjaan AND role = 1";
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
            <h3 class="card-title">Data Pelamar Kerja</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Lowongan Kerja</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no =1; foreach ($query as $data){?>
                    <tr align="center">
                        <td><?= $no++?>.</td>
                        <td><?= $data['nama']?></td>
                        <td><?= $data['email']?></td>
                        <td><?= $data['nama_kerjaan']?></td>
                        <th>
                            <?php 
                            if($data['status_kerja'] == 0){
                                echo '<div class="badge badge-danger">Belum Diterima</div>';
                            }elseif($data['status_kerja'] == 1){ 
                                echo '<div class="badge badge-success">Diterima</div>';
                            }else{
                                echo '<div class="badge badge-info">Belum Dikonfirmasi</div>';
                            }
                                ?>
                        </th>
                        <td>
                            <a href="detail.php?id=<?= $data['id']?>" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                            <a href="aksi.php?terima=<?= $data['id']?>" class="btn btn-success"><i class="fa fa-check-square xs"></i></a>
                            <a href="aksi.php?tolak=<?= $data['id']?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
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