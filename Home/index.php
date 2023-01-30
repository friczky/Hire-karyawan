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
                        <?php foreach($query_kategori as $data_kategori) { ?>
                        <option value="<?= $data_kategori['id_kategori']?>"><?= $data_kategori['kategori']?> </option>
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


<?php include 'komponen/footer.php'; ?>