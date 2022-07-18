<?php 

if(isset($_POST['pelamar'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $id_kerjaan = $_POST['id_kerjaan'];

    $sql = "UPDATE pengguna SET nama = '$nama', email = '$email', telpon = '$telpon', alamat = '$alamat' WHERE id = $_POST[id]";

}elseif(isset($_POST['berkas'])){
    $nama = $_POST['nama'];
    $berkas = $_FILES['berkas']['name'];
    $berkas_save = rand().$_FILES['berkas']['name'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // mengatur ekstensi file yang diijinkan
    $ekstensi_diperbolehkan	= array('pdf','docx','jpeg','png','jpg');
    $x = explode('.', $berkas);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['berkas']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

            //Mengupload berkas
            move_uploaded_file($file_tmp, '../../upload/'.$berkas_save);
            $sql = "INSERT INTO pengguna (nama,email,password,role,berkas) VALUES ('$nama','$email','$password','$role','$berkas_save')";
            $simpan=mysqli_query($koneksi,$sql);
            if ($simpan) {
                header("Location:index.php?pesan=Berhasil Menambahkan Pengguna");
            }
            else {
                header("Location:index.php?pesan=Gagal Menambahkan Pengguna");
            }
        }
        else{
            header("Location:index.php?pesan=Ekstensi File Tidak Diijinkan");
        }
    }      
} else {
    echo '<script>alert("Tidak ada Perubahan");window.location.href="index.php"</script>';
}