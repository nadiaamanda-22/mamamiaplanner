<!DOCTYPE html>
<html>

<head>

  <title>Mamamia Planner</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/materialize/css/penjadwalan.css'); ?>">
</head>

         <div class="container penjadwalan1">
          <div class="row">
            <div class="col-md-4">
              <div class="card kotak text-center">
                <div class="kotakheader"><p>2021-12-01</p></div>
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

        <!-- Form -->

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

        <!-- Akhir Form -->

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

        <!-- Slider main container -->
        <div class="container penjadwalan1">
          <div class="swiper-container swiper1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <?php for ($i = 0; $i < $slide; $i++) : ?>
                <div class="swiper-slide">
                  <div class="row page1">
                    <?php for ($j = 0; $j < 6; $j++) : ?>
                      <?php $search = array_search($tahun . '-' . $bulan . '-' . $k, array_column($jadwals, 'for_date')); ?>
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
                                        <h6>
                                          <?= $jadwals[$found_key]['tbl_resep']['nama_resep'] ?>
                                        </h6>
                                        <h6><?= $jadwals[$found_key]['tbl_resep']['asal_masakan'] ?></h6>
                                        <p><?= $jadwals[$found_key]['tbl_resep']['kalori'] ?> Kalori/Porsi</p>

                                        <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                                        <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a>
                                      </div>

                                      <div class="swiper-slide">
                                        <img class="materialboxed center" src="<?php echo base_url() ?>assets/img/slider/2.png">
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
                      <?php else : ?>
                        <div class="col-md-4" name="kotaks[]">
                          <div class="card kotak text-center">
                            <div><?= $tahun . '-' . $bulan . '-' .  $k ?></div>
                            <form action=""><input type="text" name="loop_tanggal[]" value="" class="loop_tanggal"></form>
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
              <?php endfor; ?> -->
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev slide2"></div>
            <div class="swiper-button-next slide3"></div>

          </div>
        </div>

          <div class="row">
            <div class="col-md-4">
            <div class="card kotak text-center">
              <div class="kotakheader"><p>2021-12-01</p></div>
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
            <div class="col-md-4">
              <div class="card kotak text-center">
                <div class="kotakheader"><p>2021-12-01</p></div>
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
            
            <div class="col-md-4">
            <div class="card kotak text-center">
              <div class="kotakheader"><p>2021-12-01</p></div>
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

        <script src="<?= base_url() ?>js/F_penjadwalan.js"></script>

        <!-- </body>

</html> -->
