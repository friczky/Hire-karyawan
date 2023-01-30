<?php
    // ini_set( 'display_errors', 1 );   
    // error_reporting( E_ALL );    
    // $from = "testing@warisman.com";    
    // $to = "friczky@gmail.com";    
    // $subject = "Checking PHP mail";    
    // $message = "PHP mail berjalan dengan baik";   
    // $headers = "From:" . $from;    
    // mail($to,$subject,$message, $headers);    
    // echo "Pesan email sudah terkirim.";
    include '../../komponen/header.php';
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $sql = "DELETE FROM email_terkirim WHERE id = $id";
        $query = mysqli_query($koneksi,$sql);
        if($query){
            echo "<script>alert('Berhasil Menghapus Data Email');</script>";
            echo "<script>location='index.php?';</script>";
        }else{
            // echo "<script>alert('Data Gagal Diubah');</script>";
            // echo "<script>location='index.php?';</script>";
        }
    }
?>

