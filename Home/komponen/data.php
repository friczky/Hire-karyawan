<?php 

$tentang = "SELECT * FROM tentang where id=1";
$query_tentang = mysqli_query($koneksi,$tentang);
$data_tentang = mysqli_fetch_array($query_tentang);


$kontak = "SELECT * FROM kontak";
$query_kontak = mysqli_query($koneksi,$kontak);
$data_kontak = mysqli_fetch_array($query_kontak);


$kerjaan = "SELECT * FROM kerjaan join kategori_kerjaan on kerjaan.id_kategori = kategori_kerjaan.id_kategori";
$query_kerjaan = mysqli_query($koneksi,$kerjaan);
$data_kerjaan = mysqli_fetch_array($query_kerjaan);

$kategori = "SELECT * FROM kategori_kerjaan";
$query_kategori = mysqli_query($koneksi,$kategori);
$data_kategori = mysqli_fetch_array($query_kategori);

if(isset($_GET['kat'])){
    $id = $_GET['kat'];
    $kerjaan = "SELECT * FROM kerjaan join kategori_kerjaan on kerjaan.id_kategori = kategori_kerjaan.id_kategori where kerjaan.id_kategori='$id'";
    $query_kerjaan = mysqli_query($koneksi,$kerjaan);
    $data_kerjaan = mysqli_fetch_array($query_kerjaan);
    if($data_kerjaan == null){
        echo "<script>alert('Data tidak ditemukan');</script>";
        echo "<script>location='../';</script>";
    }
    $query_kerjaan = mysqli_query($koneksi,$kerjaan);
    $data_kerjaan = mysqli_fetch_array($query_kerjaan);
    
}

if(isset($_GET['loker'])){
    $id = $_GET['loker'];
    $kerjaan = "SELECT * FROM kerjaan join kategori_kerjaan on kerjaan.id_kategori = kategori_kerjaan.id_kategori where kerjaan.id_kerjaan='$id'";
    $query_kerjaan = mysqli_query($koneksi,$kerjaan);
    $data_kerjaan = mysqli_fetch_array($query_kerjaan);
}



?>
