<?php

include '../../komponen/header.php';

if(isset($_POST['tambah_kerjaan'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $id_kategori = $_POST['id_kategori'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "../../upload/".$foto;
    move_uploaded_file($tmp, $path);
    $query = mysqli_query($koneksi, "INSERT INTO kerjaan VALUES('','$nama','$deskripsi','$id_kategori','$foto')");
    if($query){
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script>location='index.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Ditambahkan');</script>";
        echo "<script>location='index.php';</script>";
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
    $nama = $_POST['nama'];
    $sql = "INSERT INTO kategori_kerjaan (nama) VALUES ('$nama')";
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
    $nama = $_POST['nama'];
    $sql = "UPDATE kategori_kerjaan SET nama='$nama' WHERE id='$id'";
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
    $sql = "DELETE FROM kategori_kerjaan WHERE id='$id'";
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