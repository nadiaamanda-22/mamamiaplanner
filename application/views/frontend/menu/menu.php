   <!-- Menu -->

   <!-- Slider -->
   <div class="slider menu">
      <ul class="slides">
         <li>
            <img src="<?= base_url('assets/img/menu/menu/menu1.jpeg'); ?>"> <!-- random image -->
            <div class="caption center-align">
               <h3>Menu Masakan</h3>
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
         <?php foreach ($resep as $r) : ?>
            <div class="col m4 s12">
               <div class="card menu">
                  <div class="card-image waves-effect waves-block waves-light">
                     <img class="activator responsive-img" src="http://localhost:3000/<?= $r['gambar_resep']  ?>">
                  </div>
                  <div class="card-content">
                     <span class="card-title activator" style="font-weight: bold;"><?= $r['nama_resep'] ?>
                        <i class="material-icons right">more_vert</i>
                     </span>
                     <hr>
                     <p><button><a href="<?= base_url() ?>Menu/details/<?= $r['id_resep'] ?>">Detail</a></button></p>
                  </div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4"><?= $r['nama_resep'] ?><i class="material-icons right">close</i></span>
                     <p>Bahan :</p>
                     <?php $bahan = explode(',', $r['bahan']); ?>
                     <?php foreach ($bahan as $key => $value) : ?>
                        <ul type="cirle">
                           <li> > <?= $value ?></li>
                        </ul>
                     <?php endforeach;
                     ?>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>

      <div class="container">
         <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect active"><a href="menu.html">1</a></li>
            <li class="waves-effect"><a href="<?= base_url('menu2.php'); ?>">2</a></li>
            <li class="waves-effect"><a href="<?= base_url('menu3.php'); ?>">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
         </ul>
      </div>
   </div>

   <!-- End Menu -->