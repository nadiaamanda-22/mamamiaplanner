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
                  <button class="btn btn-outline-secondary dropdown-toggle dropdownfilter mt-4 brown" type="button" data-bs-toggle="dropdown" aria-expanded="false">Asal Masakan</button>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">
                           <form action="#">
                              <p>
                                 <label>
                                    <input name="group1" type="radio" checked />
                                    <span>Bogor</span>
                                 </label>
                              </p>
                              <p>
                                 <label>
                                    <input name="group1" type="radio" />
                                    <span>Jakarta</span>
                                 </label>
                              </p>
                              <p>
                                 <label>
                                    <input name="group1" type="radio" />
                                    <span>Depok</span>
                                 </label>
                              </p>
                              <p>
                                 <label>
                                    <input name="group1" type="radio" />
                                    <span>Sulawesi</span>
                                 </label>
                              </p>
                           </form>
                        </a></li>
                  </ul>
                  <div class="input-field col s6 ">
                     <input id="icon_telephone" type="tel" class="key_resep_menu">
                     <label for="icon_telephone">Masukan kata kunci resep.....</label>
                  </div>
                  <button type="button" class="btn btn-link brown mt-4 buttoncari"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                     </svg></button>
               </div>
            </div>
         </div>
      </div>
      <div class="row box_menu">
         <?php foreach (array_slice($reseps, 0, 9) as $resep) : ?>
            <div class="col-sm-4">
               <div class="card menu" style="max-height: 350px;">
                  <div class="card-image waves-effect waves-block waves-light">
                     <img class="activator responsive-img" src="http://localhost:3000/<?= $resep['gambar_resep']  ?>" width="100%" height="100%">
                  </div>
                  <div class="card-content">
                     <span class="card-title activator" style="font-weight: bold;"><?= $resep['nama_resep'] ?>
                        <i class="material-icons right">visibility</i>
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