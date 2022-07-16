<?php
include '../../komponen/header.php';

if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $foto = $_FILES['foto']['name'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ekstensi_diperbolehkan	= array('png','jpg');
            $x = explode('.', $foto);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];

            if (!empty($foto)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
                    //Mengupload foto
                    move_uploaded_file($file_tmp, '../../upload/'.$foto);

                    $sql = "INSERT INTO pengguna (nama,email,password,role,foto) VALUES ('$nama','$email','$password','$role','$foto')";

                    $simpan_bank=mysqli_query($koneksi,$sql);

                    if ($simpan_bank) {
                        header("Location:index.php?add=berhasil");
                    }
                    else {
                        echo mysqli_error($koneksi);
                        // header("Location:index.php?add=gagal");
                    }
                    
                }
            }else {
               
            }
        }
}elseif(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "UPDATE pengguna SET nama = '$nama', email = '$email', password = '$password' WHERE id = '$id'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('location:'.admin());
    }else{
    header('location:'.admin());
    }

}elseif(isset($_GET['hapus'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM pengguna WHERE id = '$id'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php?pesan=Berhasil menghapus pengguna');
    }else{
    header('location:index.php?pesan=gagal menghapus pengguna');
    }
}

?>