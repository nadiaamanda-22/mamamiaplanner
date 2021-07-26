<!DOCTYPE html>
<html>

<head>

  <title>Mamamia Planner</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="<?= base_url('assets/materialize/css/penjadwalan.css'); ?>">
</head>

<body>

  <!-- sliders -->
  <div class="slider mb-4">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url() ?>assets/img/slider/2.png"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="white-text judul ">Penjadwalan</h3>
        </div>
      </li>
  </div>
  <!-- end -->

  <!-- Dropdown -->
  <div class="container jadwal">
    <div class="row center">
      <div class="col m12 s12">
        <!-- Dropdown -->
        <div class="container jadwal">
          <div class="row center">
            <div class="col m12 s12">
              <h5>Mamamia Planner</h5>
              <h4>Jadwal Masakku</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <select class="form-select list_bulan" aria-label="Default select example">
          <option selected>-----Pilih bulan------</option>
        </select>
      </div>
      <div class="col-md-4 mb-3">
        <select class="form-select list_tahun" aria-label="Default select example">
          <option selected>-----Pilih tahun------</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
        </select>
      </div>
      <div class="col-md-4 mt-1 mb-3 ">
        <button type="button" class="btn btn-link brown"><i class="bi bi-search"></i></button>
      </div>
    </div>
  </div>
  <?php
  $start = 0;
  $bulan = date('m');
  $tahun = date('Y');
  $end = date('t');
  $limit = 6;
  $slide = floor($end / $limit);
  $k = 1;
  $kotak = 1;
  ?>

  <!-- Form -->
  <div class="container">
    <div class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php for ($i = 0; $i < $slide; $i++) : ?>
            <li class="splide__slide">
              <div class="container penjadwalan1">
                <div class="row">
                  <?php for ($j = 0; $j < 6; $j++) : ?>
                    <?php
                    $for_date = array_column($jadwals, 'for_date');
                    $found_key = array_search($tahun . '-' . $bulan . '-' . $k, $for_date);
                    ?>
                    <?php if (false !== $found_key) : ?>
                      <div class="col-md-4">
                        <div class="card kotak">
                          <div class="card-body kotak2 center">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="swiper-container mySwiper">
                                  <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                      <img class="materialboxed center" src="<?php echo base_url() ?>assets/img/slider/2.png">
                                      <h5><?= $jadwals[$found_key]['for_date'] ?></h5>
                                      <h6><?= $jadwals[$found_key]['tbl_resep']['nama_resep'] ?></h6>
                                      <h6><?= $jadwals[$found_key]['tbl_resep']['asal_masakan'] ?></h6>
                                      <p><?= $jadwals[$found_key]['tbl_resep']['kalori'] ?> Kalori/Porsi</p>

                                      <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                                      <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a>
                                    </div>

                                    <div class="swiper-slide">
                                      <div class="card-body">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <h3 class="card-title mb-3">Tambah Masakan</h3>
                                              <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                  </div>
                                  <div class="swiper-button-next" style="margin-top:20px;"></div>
                                  <div class="swiper-button-prev" style="margin-top:20px;"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php else : ?>
                      <div class="col-md-4">
                        <div class="card kotak text-center">
                          <div class="kotakheader">
                            <p><?= $tahun . '-' . $bulan . '-' .  $k ?></p>
                          </div>
                          <div class="card-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12">
                                  <h3 class="card-title mb-3">Tambah Masakan</h3>
                                  <a href="#modal1" class="modal-trigger add_penjadwalan_user" data-tanggal="<?= $tahun . '-' . $bulan . '-' .  $k ?>"> <span><i class="bi bi-plus-circle plus"></i></span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php $k++ ?>
                  <?php endfor; ?>
                </div>
              </div>
            </li>
          <?php endfor; ?> -->
        </ul>
      </div>
    </div>


  </div>
  <!-- Akhir Form -->

  <!-- <div class="container">
    <div class="swiper-container swiper1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="container penjadwalan1">
            <div class="row">
              <div class="col-md-3">
                <div class="card kotak text-center">
                  <div class="kotakheader">
                    <p>2021-12-01</p>
                  </div>
                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <h3 class="card-title mb-3">Tambah Masakan</h3>
                          <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card kotak">
                  <div class="card-body kotak2 center">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="swiper-container mySwiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img class="materialboxed center" src="<?php echo base_url() ?>assets/img/slider/2.png">
                              <h5>1 Juli 2021</h5>
                              <h6>Ayam Woku</h6>
                              <h6>Sulawesi</h6>
                              <p>400 Kalori/Porsi</p>

                              <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                              <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a>
                            </div>

                            <div class="swiper-slide"><img class="materialboxed center" src="<?php echo base_url() ?>assets/img/slider/2.png">
                              <h5>1 Juli 2021</h5>
                              <h6>Ayam Woku</h6>
                              <h6>Sulawesi</h6>
                              <p>400 Kalori/Porsi</p>

                              <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                              <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a>
                            </div>

                          </div>
                          <div class="swiper-button-next" style="margin-top:20px;"></div>
                          <div class="swiper-button-prev" style="margin-top:20px;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card kotak text-center">
                  <div class="kotakheader">
                    <p>2021-12-01</p>
                  </div>
                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <h3 class="card-title mb-3">Tambah Masakan</h3>
                          <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card kotak text-center">
                  <div class="kotakheader">
                    <p>2021-12-01</p>
                  </div>
                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <h3 class="card-title mb-3">Tambah Masakan</h3>
                          <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card kotak text-center">
                  <div class="kotakheader">
                    <p>2021-12-01</p>
                  </div>
                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <h3 class="card-title mb-3">Tambah Masakan</h3>
                          <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="swiper-slide">Slide 2</div>

      </div>
      <div class="swiper-button-next slide2"></div>
      <div class="swiper-button-prev slide3"></div>
    </div>


  </div> -->

  <!-- Card -->

  <!-- Akhir Card -->
  <div id="modal1" class="modal modalpenjadwalan">
    <div class="modal-content">
      <h4>Pilih Menu Masakan</h4>
      <div class="divider"></div>
      <div class="content">
        <div class="row">
          <div class="col s12">
            <div class="row">
              <form action="" id="form_penjadwalan_user">
                <div class="input-field col s12">
                  <i class="bi bi-search prefix"></i>
                  <input type="text" id="key_resep_jadwal" name="key_resep_jadwal" autocomplete="off">
                  <label for="key_resep_jadwal">Cari Masakan</label>
                  <div id="resep_notfound" class="form-text text-danger"></div>
                </div>
            </div>
          </div>
          <h5>Menu</h5>
          <select class="form-select list_resep" ria-label="Default select example" style="margin-bottom:10px;">
            <option selected class="option_list">-----List Resep Masakan------</option>
          </select>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Asal Masakan" id="asal_masakan" name="" type="text" readonly>
              <label for="asal_masakan">
                <h5>Asal Masakan</h5>
              </label>
            </div>
            <div class="input-field col s3">
              <input id="kalori_perporsi" placeholder="kalori_perporsi" type="text" readonly>
              <label for="kalori_perporsi">
                <h5>Kalori</h5>
              </label>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="catatan" name="catatan" class="materialize-textarea"></textarea>
                <label for="catatan">Catatan</label>
              </div>
            </div>
          </div>


          <!-- <h5 style="padding-top:20px;">Menu 2</h5>
                <select class="form-select" ria-label="Default select example" style="margin-bottom:10px;">
                  <option selected>Soto</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <select class="form-select" aria-label="Disabled select example" disabled>
                  <option>Sulawesi</option>
                </select> -->
          <!-- <a href="" class="text-end"><i class="bi bi-plus tambahmasakan"></i></a> -->
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button href="#!" class="modal-close waves-effect waves-green btn keluar">Keluar</button>
      <button href="#!" type="submit" class="waves-effect waves-green btn simpan">Simpan</button>
    </div>
    </form>
  </div>




  <!-- Modal Structure -->



</body>

</html>
<script src="<?= base_url() ?>js/F_penjadwalan.js"></script>