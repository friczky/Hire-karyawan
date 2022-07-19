<?php 

include '../../komponen/header.php';

if(isset($_GET['terima'])){
    $id = $_GET['terima'];
    $sql = "UPDATE pengguna SET status_kerja = '1' WHERE id = $id";
    $query = mysqli_query($koneksi,$sql);
    $sql2 = "select * from pengguna where id = $id";
    $query = mysqli_query($koneksi,$sql2);
    $data = mysqli_fetch_assoc($query);
    if($query){
        $nama = $data['nama'];
        $email = $data['email'];
        $subjek = "Pendaftaran Berhasil";
        $sql = "INSERT INTO email_terkirim (nama,email,subjek) VALUES ('$nama','$email','$subjek')";
        $query = mysqli_query($koneksi,$sql);
        echo "<script>alert('Berhasil Menerima Pelamar');</script>";
        echo "<script>location='index.php?';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>location='index.php?';</script>";
    }
}elseif(isset($_GET['tolak'])){
    $id = $_GET['tolak'];
    $sql = "UPDATE pengguna SET status_kerja = '0' WHERE id = $id";
    $query = mysqli_query($koneksi,$sql);
    $sql2 = "select * from pengguna where id = $id";
    $query = mysqli_query($koneksi,$sql2);
    $data = mysqli_fetch_assoc($query);
    if($query){
        $nama = $data['nama'];
        $email = $data['email'];
        $subjek = "Pendaftaran Berhasil";
        $sql = "INSERT INTO email_terkirim (nama,email,subjek) VALUES ('$nama','$email','$subjek')";
        $query = mysqli_query($koneksi,$sql);
        echo "<script>alert('Berhasil Menolak Pelamar');</script>";
        echo "<script>location='index.php?';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>location='index.php?';</script>";
    }
}elseif(isset($_GET['download'])){
    $id = $_GET['download'];
    $sql = "SELECT * FROM berkas WHERE id = $id";
    $query = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_array($query);
    $berkas = $data['berkas'];
    $file = '../../upload/'.$berkas;
    $nama_berkas = $data['nama_berkas'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . Filesize($file));
    readfile($file);
    exit;

} else {
    echo '<script>alert("Tidak ada Perubahan");window.location.href="index.php"</script>';
}

