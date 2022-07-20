<!DOCTYPE html>
<html>

<head>
  
  <?php 
    if(file_exists('../Config/koneksi.php')){
        include '../Config/koneksi.php';
        include 'data.php';
    }else{
        include '../../Config/koneksi.php';
        include 'data.php';
    }
    ?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?= $title?> - <?= $data_tentang['nama_web']?></title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= home_assets() ?>css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="<?= home_assets() ?>css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="<?= home_assets() ?>css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= home_assets() ?>css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">
  <div class="hero_area">