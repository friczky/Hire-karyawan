<?php

$title = "Home";
include 'komponen/header.php';
include 'komponen/navbar.php';
?>


<!-- slider section -->
<section class="slider_section ">
  <div class="container ">
    <div class="row">
      <div class="col-lg-7 col-md-8 mx-auto">
        <div class="detail-box">
          <h1>
            Wujudkan <br>
            Kerja Impianmu
          </h1>
          <p>
            Pilih kategori kerjaan yang ingin anda lakukan, dan kami akan menampilkan lowongan kerja tersebut kepada anda.
          </p>
        </div>
      </div>
    </div>
    <div class="find_container ">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <form action="kategori" method="get">
              <div class="form-row text-center">
                <div class="form-group col-lg-3">
                </div>

                <div class="form-group col-lg-3">
                  <select name="kat" class="form-control wide" id="inputDepartmentName">
                    <option value="">Pilih Kategori </option>
                    <?php foreach ($query_kategori as $data_kategori) { ?>
                      <option value="<?= $data_kategori['id_kategori'] ?>"><?= $data_kategori['kategori'] ?> </option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group col-lg-3 text-right">
                  <div class="btn-box">
                    <button type="submit" class="btn ">Cari Loker</button>
                  </div>
                </div>
                <div class="form-group col-lg-3">

                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>


</section>
<!-- end slider section -->
</div>


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
        <?php foreach ($query_kerjaan_home as $data_kerjaan) { ?>
          <div class="col-lg-6">
            <div class="box">
              <div class="job_content-box">
                <div class="img-box" style="padding: 5px; border-radius:10%;border:1px;">
                  <img src="<?= folder_upload() . $data_kerjaan['foto'] ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?= $data_kerjaan['nama_kerjaan'] ?>
                  </h5>
                  <div class="detail-info">
                    <h6>
                      <a href="<?= home() ?>kategori/?kat=<?= $data_kerjaan['id_kategori'] ?>" class="" style="color :white">
                        <i class="fa fa-list" aria-hidden="true"> </i>
                        <span>
                          <?= $data_kerjaan['kategori'] ?>
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
                <a href="<?= home() ?>detail/?loker=<?= $data_kerjaan['id_kerjaan'] ?>" class="apply-btn">
                  <i class="fa fa-eye"></i>
                  Detail
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="btn-box">
      <a href="<?= base_url() ?>Home/loker">
        View All
      </a>
    </div>
  </div>
</section>
<!-- end job section -->



<?php include 'komponen/footer.php'; ?>