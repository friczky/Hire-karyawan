<?php 

$judul = 'Kategori Kerjaan';
include '../../komponen/header.php';
include '../../komponen/navbar.php';
include '../../komponen/sidebar.php';

$sql = "SELECT * FROM kategori_kerjaan";
$query = mysqli_query($koneksi,$sql);

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $sql = "SELECT * FROM kategori_kerjaan WHERE id='$id'";
  $edit = mysqli_query($koneksi,$sql);
  $data = mysqli_fetch_assoc($edit);
}

if(isset($_GET['edit'])){
  echo $nama = $data['nama'];
}else{
  echo $nama = null ;
}

if(isset($_GET['edit'])){
  echo $id = $data['id'];
}else {
  echo $id = null ;
}

if(isset($_GET['edit'])){
  echo $method_name = 'edit_kategori';
}else {
  echo $method_name = 'tambah_kategori';
}

if(isset($_GET['edit'])){
  echo $button_name = 'Perbahrui';
}else {
  echo $button_name = 'Tambah';
}

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
        <div class="card-header">
                <h1>Data Kategori</h1>
                </div>
            <div class="card-body">
                <br>
                <div class="form-group row">
                        <div class="col-sm-6">
                        <form action="aksi.php" method="post">
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kategori" value="<?= $nama ?>">
                        <input type="hidden" name="id" value="<?= $id ?>">  
                      </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" name="<?= $method_name ?>" class="btn btn-primary"><i class="fa fa-plus"></i> 
                            <?= $button_name ?></button>
                        </div>
                        </form>
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
                    <?php $no =1; foreach ($query as $k){?>
                        <tr align="center">
                            <td><?= $no++?>.</td>
                            <td><?= $k['nama']?></td>
                            <td>
                                <a href="kategori.php?edit=<?= $k['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="aksi.php?hapus_kategori=<?= $k['id']?>" onclick="return confirm('Apakah anda ingin menghapus kategori ini ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


    </section>
</div>
</div>




<?php include '../../komponen/footer.php'?>