<?php

include '../../komponen/header.php';
$nama_web = $_POST['nama_web'];
$maps_url = $_POST['maps_url'];
$id = 1;
$sql = "UPDATE tentang SET nama_web = '$nama_web', maps_url = '$maps_url' WHERE id = $id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php"</script>';
}else{
    echo 'Gagal';
}

?>