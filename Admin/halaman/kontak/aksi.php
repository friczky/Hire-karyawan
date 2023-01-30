<?php

include '../../komponen/header.php';
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$id = 1;
$sql = "UPDATE kontak SET email = '$email', telpon = '$telpon', alamat = '$alamat' WHERE id = $id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php"</script>';
}else{
    echo 'Gagal';
}

?>