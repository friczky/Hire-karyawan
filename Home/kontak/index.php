<?php

$title = 'Kontak';
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
                KONTAK <?= $data_tentang['nama_web']?>
              </h2>
            </div>
            <p>
              <ul>
                <li><i class="fa fa-at"></i> Email : <?= $data_kontak['email']?></li>
                <li><i class="fa fa-phone"></i> Telpon : <?= $data_kontak['telpon']?></li>
                <li><i class="fa fa-map-marker"></i> Alamat : <?= $data_kontak['alamat']?></li>

              </ul>
            </p>
            <a href="https://wa.me/<?= $data_kontak['telpon']?>?text=Halo, saya ingin bertanya lebih lanjut tentang pekerjaan yang tersedia di layanan website anda.">
              <i class="fa fa-whatsapp"></i> Whatsapp
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= folder_upload()?><?= $data_tentang['logo']?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
    <hr>
  <!-- maps section  -->
    <section class="container-fluid">
    <div class="" >
        <?php
        $data = $data_tentang['maps_url'];
        $replace = str_replace('width="800" height="600"', 'width="100%" height="600"', $data);
        echo $replace;
        ?>
    </div>
    </section>
  <!-- end maps section  -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">

      </div>
    </div>
  </section>
  <!-- end info_section -->

<?php include '../komponen/footer.php'?>