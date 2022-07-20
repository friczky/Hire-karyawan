<?php

$title = 'Tentang';
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
                Tentang <?= $data_tentang['nama_web']?>
              </h2>
            </div>
            <p>
              <?= $data_tentang['deskripsi']?>
            </p>
            <a href="<?= login()?>">
              Login / Daftar
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= folder_upload()?><?= $data_tentang['foto']?>" alt="">
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
  <!-- <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-2 info_links">
          <h4>
            Menu
          </h4>
          <ul>
            <li>
              <a href="index.html">
                Home
              </a>
            </li>
            <li class="active">
              <a href="about.html">
                About
              </a>
            </li>
            <li>
              <a href="job.html">
                Jobs
              </a>
            </li>
            <li>
              <a href="freelancer.html">
                Freelancers
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4>
            Jobs
          </h4>
          <p>
            Established fact that a reader will be distracted by the readable content of a page when looking at its
            layout. The point of using Lorem Ipsum
          </p>
        </div>
        <div class="col-md-3">
          <div class="info_social">
            <h4>
              Social Link
            </h4>
            <div class="social_container">
              <div>
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </div>
              <div>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </div>
              <div>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <div>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_form">
            <h4>
              Newsletter
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- end info_section -->

<?php include '../komponen/footer.php'?>