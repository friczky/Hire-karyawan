<?php

$host     = 'localhost';
$username = 'hire';
$password = 'hire';
$database = 'hire';

$koneksi = mysqli_connect($host,$username,$password,$database);

if(!$koneksi){
    echo 'Gagal Menghubungkan ke database';
}else{

}
include 'route.php';

?>
