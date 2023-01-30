<?php 

$judul = 'Email Terkirim';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$query = mysqli_query($koneksi,"SELECT * FROM email_terkirim");

?>

<!-- content -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Email</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">User Profile</li>
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach($query as $data){?>
                    <tr align="center">
                        <td><?= $i++?>.</td>
                        <td><?= $data['nama']?></td>
                        <td><?= $data['email']?></td>
                        <td><?= $data['subjek']?></td>
                        <td>
                            <a href="aksi.php?hapus=<?= $data['id']?>" onclick="return confirm('Apakah anda ingin menghapus data email ini ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }?>
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