<?php  
require_once 'admin/config.php';

?>

    <!-- Modals -->

    <!--  Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Transportasi</h2>
              <hr class="star-dark mb-5">
              
                <table id="dataBarang" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Barang</th>
                          <th>Nama Barang </th>
                          <th>Merk (Model) </th>
                          <th>Jumlah </th>
                          <th>Tanggal Beli </th>
                          <th>Tahun Buat </th>
                          <th>Kondisi </th>
                      </tr>
                  </thead>
                  <tbody>
                     <?php 
                      $q = mysqli_query ($konek, "SELECT * FROM (( barang 
                        INNER JOIN jenis ON barang.jenis = jenis.id_jenis) 
                        INNER JOIN kondisi ON barang.kondisi = kondisi.id_kondisi ) WHERE jenis=2 ") ;

                      $no = 1;

                      while ( $row = mysqli_fetch_assoc($q)) {
                        echo "
                        <tr>
                          <td>$no</td>
                          <td>$row[kode_barang]</td>
                          <td>$row[nama_barang]</td>
                          <td>$row[merk_model]</td>
                          <td>$row[jumlah] $row[satuan]</td>
                          <td>$row[tanggal_beli]</td>
                          <td>$row[tahun_buat]</td>
                          <td>$row[nama_kondisi]</td>
                        </tr>
                        ";
                        $no++;
                      }
                      ?>
                     
                  </tbody>
              </table>

            </div>
          </div>
          <a class="btn btn-primary rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Tutup </a>
        </div>
      </div>
    </div>

    <!--  Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Aset</h2>
              <hr class="star-dark mb-5">
              
              <table id="dataBarang" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Barang</th>
                          <th>Nama Barang </th>
                          <th>Merk (Model) </th>
                          <th>Jumlah </th>
                          <th>Tanggal Beli </th>
                          <th>Tahun Buat </th>
                          <th>Kondisi </th>
                      </tr>
                  </thead>
                  <tbody>
                     <?php 
                      $q = mysqli_query ($konek, "SELECT * FROM (( barang 
                        INNER JOIN jenis ON barang.jenis = jenis.id_jenis) 
                        INNER JOIN kondisi ON barang.kondisi = kondisi.id_kondisi ) WHERE jenis=1 ") ;

                      $no = 1;

                      while ( $row = mysqli_fetch_assoc($q)) {
                        echo "
                        <tr>
                          <td>$no</td>
                          <td>$row[kode_barang]</td>
                          <td>$row[nama_barang]</td>
                          <td>$row[merk_model]</td>
                          <td>$row[jumlah] $row[satuan]</td>
                          <td>$row[tanggal_beli]</td>
                          <td>$row[tahun_buat]</td>
                          <td>$row[nama_kondisi]</td>
                        </tr>
                        ";
                        $no++;
                      }
                      ?>
                     
                  </tbody>
              </table>

            </div>
          </div>
          <a class="btn btn-primary rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Tutup </a>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Alat Kantor</h2>
              <hr class="star-dark mb-5">
              
              <table id="dataBarang" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Barang</th>
                          <th>Nama Barang </th>
                          <th>Merk (Model) </th>
                          <th>Jumlah </th>
                          <th>Tanggal Beli </th>
                          <th>Tahun Buat </th>
                          <th>Kondisi </th>
                      </tr>
                  </thead>
                  <tbody>
                     <?php 
                      $q = mysqli_query ($konek, "SELECT * FROM (( barang 
                        INNER JOIN jenis ON barang.jenis = jenis.id_jenis) 
                        INNER JOIN kondisi ON barang.kondisi = kondisi.id_kondisi ) WHERE jenis=3 ") ;

                      $no = 1;

                      while ( $row = mysqli_fetch_assoc($q)) {
                        echo "
                        <tr>
                          <td>$no</td>
                          <td>$row[kode_barang]</td>
                          <td>$row[nama_barang]</td>
                          <td>$row[merk_model]</td>
                          <td>$row[jumlah] $row[satuan]</td>
                          <td>$row[tanggal_beli]</td>
                          <td>$row[tahun_buat]</td>
                          <td>$row[nama_kondisi]</td>
                        </tr>
                        ";
                        $no++;
                      }
                      ?>
                     
                  </tbody>
              </table>

            </div>
          </div>
          <a class="btn btn-primary rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Tutup</a>
        </div>
      </div>
    </div>

    <!--  Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Modal 4</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Modal 5</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Modal 6</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
