<?php 

include '../../komponen/header.php';
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $foto = $_FILES['foto']['name'];
    $foto_old = $_POST['foto_old'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = folder_upload().$foto;
    move_uploaded_file($tmp,$path);
    $sql = "UPDATE pengguna SET nama = '$nama', email = '$email', password = '$password', foto = '$foto' WHERE id = $id";
    $query = mysqli_query($koneksi,$sql);
    if($query){
      if($foto != $foto_old){
        $filename = folder_upload().$foto_old;
        if(file_exists($filename)){
          unlink($filename);
        }
      }
        // echo '<script>alert("Data Berhasil Diubah");window.location.href="index.php"</script>';
    }else{
        echo 'Gagal';
    }
}

?>