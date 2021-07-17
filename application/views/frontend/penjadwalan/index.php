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
            <img src="<?php echo base_url()?>assets/img/slider/2.png"> <!-- random image -->
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
        <h5>Mamamia Planner</h5>
        <h4>Jadwal Masakku</h4>
       </div>
     </div>
   </div>
  
  <!-- Form -->

  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
      </select>
      </div>
      <div class="col-md-4 mb-3">
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-md-4 mt-1 mb-3 ">
        <button type="button" class="btn btn-link brown"><i class="bi bi-search"></i></button>
      </div>
    </div>
  </div>

  <!-- Akhir Form -->
 
  <!-- Card -->

  <div class="swiper-container mySwiper2">
      <div class="swiper-wrapper2">
        <div class="swiper-slide">

         <div class="container penjadwalan1">
          <div class="row">
            <div class="col-md-4">
              <div class="card kotak text-center">
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
              <div class="card kotak">
                <div class="card-body kotak2 center">
                  <div class="row">
                    <div class="col-md-12">
                    <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img class="materialboxed center" src="<?php echo base_url()?>assets/img/slider/2.png">
                        <h5>1 Juli 2021</h5>
                        <h6>Ayam Woku</h6>
                        <h6>Sulawesi</h6>
                        <p>400 Kalori/Porsi</p>

                        <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                        <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a></div>
                      
                      <div class="swiper-slide"><img class="materialboxed center" src="<?php echo base_url()?>assets/img/slider/2.png">
                        <h5>1 Juli 2021</h5>
                        <h6>Ayam Woku</h6>
                        <h6>Sulawesi</h6>
                        <p>400 Kalori/Porsi</p>

                        <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                        <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a></div>

                    </div>
                    <div class="swiper-button-next" style="margin-top:20px;"></div>
                    <div class="swiper-button-prev" style="margin-top:20px;"></div>
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card kotak text-center">
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

          <div class="row">
            <div class="col-md-4">
            <div class="card kotak text-center">
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
    
  <!-- Akhir Card -->


   <!-- Modal Structure -->
   <div id="modal1" class="modal modalpenjadwalan">
    <div class="modal-content">
      <h4>Pilih Menu Masakan</h4>
      <div class="divider"></div>
      <div class="content">
          <div class="row">
            <div class="col s12">
              <div class="row">
                <div class="input-field col s12">
                <i class="bi bi-search prefix"></i>
                  <input type="text" id="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Cari Masakan</label>
                </div>
              </div>
          </div>
          <h5>Menu 1</h5>
          <select class="form-select" ria-label="Default select example" style="margin-bottom:10px;">
            <option selected>Soto</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select" aria-label="Disabled select example" disabled>
            <option >Sulawesi</option>
          </select>
          <h5 style="padding-top:20px;">Menu 2</h5>
          <select class="form-select" ria-label="Default select example" style="margin-bottom:10px;">
            <option selected>Soto</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select" aria-label="Disabled select example" disabled>
            <option >Sulawesi</option>
          </select>
          <a href="" class="text-end"><i class="bi bi-plus tambahmasakan"></i></a>
      </div>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn keluar">Keluar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn simpan">Simpan</a>
    </div>
  </div>


  
  

  </body>
</html>
