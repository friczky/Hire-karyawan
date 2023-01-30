<?php

include '../../komponen/header.php';
$host = $_POST['host'];
$email = $_POST['email'];
$password = $_POST['password'];
$port = $_POST['port'];
$id = 1;
$sql = "UPDATE smtp_mail SET host = '$host', email = '$email', password = '$password', port = '$port' WHERE id = $id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php"</script>';
}else{
    echo 'Gagal';
}

?>