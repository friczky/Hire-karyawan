<?php

include '../../komponen/header.php';
$id = 1;
$nama_web = $_POST['nama_web'];
$deskripsi = $_POST['deskripsi'];
$maps_url = $_POST['maps_url'];

//upload logo
$logo = $_FILES['logo']['name'];
$logo_old   = $_POST['logo_old'];
$tmp = $_FILES['logo']['tmp_name'];
$logo_save = rand().$_FILES['logo']['name'];

if ($logo != '') {
    unlink('../../upload/'.$logo_old);
    move_uploaded_file($tmp, '../../upload/'.$logo_save);
}else{
    $logo_save = $logo_old;
}

// upload foto
$foto = $_FILES['foto']['name'];
$foto_old   = $_POST['foto_old'];
$tmp = $_FILES['foto']['tmp_name'];
$foto_save = rand().$_FILES['foto']['name'];

if ($foto != '') {
    unlink('../../upload/'.$foto_old);
    move_uploaded_file($tmp, '../../upload/'.$foto_save);
}else{
    $foto_save = $foto_old;
}

$sql = "UPDATE tentang SET nama_web = '$nama_web', maps_url = '$maps_url',logo = '$logo_save',foto = '$foto_save', deskripsi = '$deskripsi' ";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php"</script>';
}else{
    echo 'Gagal';
}


?>