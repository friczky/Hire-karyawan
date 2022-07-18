<?php

include '../../komponen/header.php';

if(isset($_POST['tambah_kerjaan'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $id_kategori = $_POST['id_kategori'];
    $foto = $_FILES['foto']['name'];
    $foto_save = rand().$_FILES['foto']['name'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // mengatur ekstensi file yang diijinkan
    $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

            //Mengupload foto
            move_uploaded_file($file_tmp, '../../upload/'.$foto_save);
            $sql = "INSERT INTO kerjaan (nama,deskripsi,id_kategori,foto) VALUES ('$nama','$deskripsi','$id_kategori','$foto_save')";
            $simpan=mysqli_query($koneksi,$sql);
            if ($simpan) {
                header("Location:index.php?pesan=Berhasil Menambahkan Pengguna");
            }
            else {
                header("Location:index.php?pesan=Gagal Menambahkan Pengguna");
            }
        }
        else{
            header("Location:index.php?pesan=Ekstensi File Tidak Diijinkan");
        }
    } 
}

if(isset($_POST['edit_kerjaan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $id_kategori = $_POST['id_kategori'];
    $foto = $_POST['foto'];
    $sql = "UPDATE kerjaan SET nama='$nama', deskripsi='$deskripsi', id_kategori='$id_kategori', foto='$foto' WHERE id='$id'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        echo "<script>alert('Data Berhasil Diubah');</script>";
        echo "<script>location='index.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>location='index.php';</script>";
    }
}

if (isset($_GET['hapus_kerjaan'])) {
    $id = $_GET['hapus_kerjaan'];
    $sql = "DELETE FROM kerjaan WHERE id='$id'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        echo "<script>location='index.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus');</script>";
        echo "<script>location='index.php';</script>";
    }
}

if (isset($_POST['tambah_kategori'])){
    $nama = $_POST['kategori'];
    $sql = "INSERT INTO kategori_kerjaan (kategori) VALUES ('$nama')";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script>location='kategori.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Ditambahkan');</script>";
        echo "<script>location='kategori.php';</script>";
    }

}

if (isset($_POST['edit_kategori'])){
    $id = $_POST['id'];
    $nama = $_POST['kategori'];
    $sql = "UPDATE kategori_kerjaan SET kategori='$nama' WHERE id_kategori='$id'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        echo "<script>alert('Data Berhasil Diubah');</script>";
        echo "<script>location='kategori.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>location='kategori.php';</script>";
    }
    
}

if (isset($_GET['hapus_kategori'])){
    $id = $_GET['hapus_kategori'];
    $sql = "DELETE FROM kategori_kerjaan WHERE id_kategori='$id'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        echo "<script>location='kategori.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Dihapus');</script>";
        echo "<script>location='kategori.php';</script>";
    }
    
}


?>