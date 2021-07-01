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
  <div class="container penjadwalan1">
    <div class="row">
      <div class="col-md-4">
        <div class="card kotak">
          <div class="card-body text-center">
            <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card kotak">
          <div class="card-body center">
            <a href=""><i class="bi bi-plus-circle plus"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card kotak">
          <div class="card-body center">
            <a href=""><i class="bi bi-plus-circle plus"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card kotak">
          <div class="card-body center">
            <a href=""><i class="bi bi-plus-circle plus"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card kotak">
          <div class="card-body center">
            <a href=""><i class="bi bi-plus-circle plus"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card kotak">
          <div class="card-body center">
            <a href=""><span><i class="bi bi-plus-circle plus"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Card -->


   <!-- Modal Structure -->
   <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>


  
  

  </body>
</html>
