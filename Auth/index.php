<?php 
include '../Config/koneksi.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM pengguna WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_array($query);
    if($row['email'] == $email && $row['password'] == $password){
        session_start();
        $_SESSION['email']      = $email;
        $_SESSION['password']   = $password;
        $_SESSION['role']       = $row['role'];
        $_SESSION['nama']       = $row['nama'];
        $_SESSION['id']         = $row['id'];
        header('location:'.admin());
    }else{
        session_start();
        $_SESSION['error'] = '<div class="alert alert-danger">Email atau Password Salah</div>';
        header('location:'.login());
    }
}elseif(isset($_POST['daftar'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO pengguna (email,password) VALUES ($email,$password)";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('location:'.login());
    }else{
    header('location:'.admin());
    }
}elseif(isset($_POST['logout'])){
    session_start();
    session_destroy();
    header('location:'.login());
}else{
    header('location:'.login());
}

?>