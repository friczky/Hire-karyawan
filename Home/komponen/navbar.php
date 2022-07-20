<!-- header section strats -->
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?= home()?>">
            <span>
            <img src="<?= folder_upload() ?><?= $data_tentang['logo']?>" class="navbar-logo" alt="" width="5%">
              <?= $data_tentang['nama_web']?>
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= home()?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= home()?>tentang"> Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= home()?>loker">Loker</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= home()?>kontak">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= login()?>" target="blank">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= daftar()?>" target="blank">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Daftar
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->