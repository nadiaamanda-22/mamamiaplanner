<!DOCTYPE html>
<html>
    <head>
        
        <title>Mamamia Planner</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/materialize/css/penjadwalan.css" media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
  <body>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <!-- sliders -->
    <div class="slider">
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
   <div class="container jadwal">
     <div class="row center">
       <div class="col m5 s12">
          <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Materialize Select</label>
        </div>
       </div>
       <div class="col m5 s12">
          <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Materialize Select</label>
        </div>
       </div>
       <div class="col m2 s12 cari">
       <button class="btn brown waves-light" type="submit" name="action">
         <i class="material-icons">search</i>
       </button>
       </div>
     </div>
   </div>

   <!-- card -->
   <div class="container">
    <div class="row center">
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row center">
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
          <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
         <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">navigate_next</i>
          </span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!--JavaScript at end of body for optimized loading-->
  <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
      });

  // Or with jQuery

      $(document).ready(function(){
        $('select').formSelect();
      });
  </script>

  <script>
  var myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
  </script>

  </body>
</html>
