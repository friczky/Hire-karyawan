<?php

$title = 'Detail Kerjaan' ;
include '../komponen/header-sub.php';
include '../komponen/navbar.php';

?>

</div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                 <?= $data_kerjaan['nama_kerjaan']?>
              </h2>
            </div>
            <hr>
            <span><i class="fa fa-list"></i> <b>Kategori</b> : <?= $data_kerjaan['kategori']?></span>
            <hr>
            <p>
              <?= $data_kerjaan['deskripsi']?>
            </p>
            <hr>
            <a href="<?= login()?>">
              Apply
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= folder_upload()?><?= $data_kerjaan['foto']?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      
    </div>
  </section>
  <!-- end info_section -->

<?php include '../komponen/footer.php'?>