<?php


include '../Config/koneksi.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM pengguna WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_array($query);
    if ($row['email'] == $email && $row['password'] == $password) {
        if ($row['role'] == '0') {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['pesan'] = '<div class="alert alert-success">Anda berhasil login !</div>';
            header("Location:" . login());
            header("Location:" . admin());
        } elseif ($row['role'] == '1') {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            header("Location:../Admin/halaman/daftar-kerja");
        }
    } else {
        session_start();
        $_SESSION['pesan'] = '<div class="alert alert-danger">Email atau Password Salah</div>';
        header('location:' . login());
    }
} elseif (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $data = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email='$email'");
    $cek = mysqli_num_rows($data);
    if ($cek > 0) {
        session_start();
        $_SESSION['pesan'] = '<div class="alert alert-danger">Email Sudah Terdaftar !</div>';
        header('location:index.php');
        exit;
    }

    $sql = "INSERT INTO pengguna (nama,email,password,role) VALUES ('$nama','$email','$password','1')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        session_start();

        include 'mail.php';

        $_SESSION['pesan'] = '<div class="alert alert-success">Berhasil Membuat Akun , Silahkan Cek Email Anda !</div>';
        header('location:index.php');
        // echo "<script LANGUAGE='JavaScript'>
        //     window.alert('Berhasil Mendaftar , Silahkan Cek Email Anda !');
        //     window.location.href='index.php';
        //     </script>";
    }
} elseif (isset($_GET['logout'])) {
    session_start();
    $_SESSION['pesan'] = '<div class="alert alert-success">Anda Berhasil Logout !</div>';
    header('location:index.php');
} else {
    header('location:' . login());
}
