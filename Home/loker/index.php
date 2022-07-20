<?php

$title = 'Loker';
include '../komponen/header-sub.php';
include '../komponen/navbar.php';

?>


</div>

  <!-- job section -->
  <section class="job_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Daftar Lowongan Kerja
        </h2>
      </div>
      <div class="job_container">
        <h4 class="job_heading">
          Lowongan Terbaru
        </h4>
        <div class="row">
            <?php foreach ($query_kerjaan as $data_kerjaan) { ?>
          <div class="col-lg-6">
            <div class="box">
              <div class="job_content-box">
                <div class="img-box">
                  <img src="<?= folder_upload().$data_kerjaan['foto']?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?= $data_kerjaan['nama_kerjaan']?>
                  </h5>
                  <div class="detail-info">
                    <h6>
                      <a href="<?= home()?>kategori/?kat=<?= $data_kerjaan['id_kategori']?>" class="" style="color :white">
                      <i class="fa fa-list" aria-hidden="true"> </i>
                      <span>
                        <?= $data_kerjaan['kategori']?>
                      </span>
                      </a>
                    </h6>
                    <h6>
                      <!-- <i class="fa fa-money" aria-hidden="true"></i>
                      <span>
                        $1200 - $1300
                      </span> -->
                    </h6>
                  </div>
                </div>
              </div>
              <div class="option-box">
                <!-- <button class="fav-btn">
                  <i class="fa fa-heart-o" aria-hidden="true"></i>
                </button> -->
                <a href="<?= home()?>detail/?loker=<?= $data_kerjaan['id_kerjaan']?>" class="apply-btn">
                    <i class="fa fa-eye"></i>
                  Detail
                </a>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>

      <!-- <div class="btn-box">
        <a href="">
          View All
        </a>
      </div> -->
    </div>
  </section>
  <!-- end job section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      
    </div>
  </section>
  <!-- end info_section -->

  <?php include '../komponen/footer.php'; ?>