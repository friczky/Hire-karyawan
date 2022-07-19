<?php 

include '../../komponen/header.php';

if(isset($_POST['pelamar'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $id_kerjaan = $_POST['id_kerjaan'];

    $sql = "UPDATE pengguna SET nama = '$nama', email = '$email', telpon = '$telpon', alamat = '$alamat', id_kerjaan = '$id_kerjaan' WHERE id = $_POST[id]";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        echo "<script>alert('Data Berhasil Diubah');</script>";
        echo "<script>location='index.php?';</script>";
    }else{
        // echo "<script>alert('Data Gagal Diubah');</script>";
        // echo "<script>location='index.php?';</script>";
    }

}elseif(isset($_POST['berkas'])){
    $nama = $_POST['nama_berkas'];
    $berkas = $_FILES['berkas']['name'];
    $berkas_save = rand().$_FILES['berkas']['name'];
    $id_pengguna    = $_POST['id_pengguna'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // mengatur ekstensi file yang diijinkan
    $ekstensi_diperbolehkan	= array('pdf','docx','jpeg','png','jpg');
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['berkas']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

            //Mengupload berkas
            move_uploaded_file($file_tmp, '../../upload/'.$berkas_save);
            $sql = "INSERT INTO berkas (nama_berkas, berkas, id_pengguna) VALUES ('$nama', '$berkas_save', '$id_pengguna')";
            $simpan=mysqli_query($koneksi,$sql);
            if ($simpan) {
                echo '<script>alert("Berhasil Mengupload Berkas");window.location.href="berkas.php"</script>';
            }
            else {
                echo '<script>alert("Gagal Mengupload Berkas , File tidak sesuai.");window.location.href="berkas.php"</script>';
            }
        }
        else{
            header("Location:index.php?pesan=Ekstensi File Tidak Diijinkan");
        }
    }      
}elseif(isset($_GET['download'])){
    $id = $_GET['download'];
    $sql = "SELECT * FROM berkas WHERE id = $id";
    $query = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_array($query);
    $berkas = $data['berkas'];
    $file = '../../upload/'.$berkas;
    $nama_berkas = $data['nama_berkas'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . Filesize($file));
    readfile($file);
    exit;

} else {
    echo '<script>alert("Tidak ada Perubahan");window.location.href="index.php"</script>';
}

