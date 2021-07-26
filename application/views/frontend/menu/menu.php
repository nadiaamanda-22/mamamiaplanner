   <!-- Menu -->

   <!-- Slider -->
   <div class="slider menu">
      <ul class="slides">
         <li>
            <img src="<?= base_url('assets/img/menu/menu/menu1.jpeg'); ?>"> <!-- random image -->
            <div class="caption center-align">
               <h3 class="white-text judul" style="font-weight: normal;">Menu Masakan</h3>
            </div>
         </li>
      </ul>
   </div>

   <div class="container menu2">
      <h4 class="judul-menu"><?= $result['total_data'] ?> Menu Tersedia</h4>
       <div class="div">
          <div class="row">
             <div class="col-m12">
                <div class="input-group">
                  <button class="btn btn-outline-secondary dropdown-toggle dropdownfilter mt-4 " type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Masakan Daerah</a></li>
                     <li><hr class="dropdown-divider"></li>
                     <li><a class="dropdown-item" href="#">
                          <form action="#">
                              <p>
                                 <label>
                                 <input name="group1" type="radio" checked />
                                 <span>Red</span>
                                 </label>
                              </p>
                              <p>
                                 <label>
                                 <input name="group1" type="radio" />
                                 <span>Yellow</span>
                                 </label>
                              </p>
                              <p>
                                 <label>
                                 <input class="with-gap" name="group1" type="radio"  />
                                 <span>Green</span>
                                 </label>
                              </p>
                              <p>
                                 <label>
                                 <input name="group1" type="radio" disabled="disabled" />
                                 <span>Brown</span>
                                 </label>
                              </p>
                           </form>
                     </a></li>
                  </ul>
                  <div class="input-field col s6 ">
                  <input id="icon_telephone" type="tel" class="validate">
                  <label for="icon_telephone">Telephone</label>
               </div>
                  <button type="button" class="btn btn-link brown mt-4" ><i class="bi bi-search"></i></button>
               </div>
             </div>
          </div>
       </div>
      <div class="row">
         <?php foreach (array_slice($reseps, 0, 9) as $resep) : ?>
            <div class="col-sm-4">
               <div class="card menu">
                  <div class="card-image waves-effect waves-block waves-light">
                     <img class="activator responsive-img" src="http://localhost:3000/<?= $resep['gambar_resep']  ?>">
                  </div>
                  <div class="card-content">
                     <span class="card-title activator" style="font-weight: bold;"><?= $resep['nama_resep'] ?>
                        <i class="material-icons right">more_vert</i>
                     </span>
                     <hr style="width: 90%;">
                     <p style="text-align: left;"><button><a href="<?= base_url() ?>Menu/details/<?= $resep['id_resep'] ?>" style="color:#aa5806;">Detail</a></button></p>
                  </div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4"><?= $resep['nama_resep'] ?><i class="material-icons right">close</i></span>
                     <p>Bahan :</p>
                     <?php foreach ($resep['tbl_bahans'] as $key) : ?>
                        <ul type="cirle">
                           <li> > <?= $key['bahan'] ?></li>
                        </ul>
                     <?php endforeach;
                     ?>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>

   <script src="<?= base_url() ?>js/F_resep.js"></script>

   <!-- End Menu -->
