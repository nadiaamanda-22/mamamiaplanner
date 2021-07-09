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

   <div class="container">
      <h4 class="judul-menu"><?= $result['total_data'] ?> Menu Tersedia</h4>
      <div class="row">
         <?php foreach ($reseps as $resep) : ?>
            <div class="col m4 s12">
               <div class="card menu">
                  <div class="card-image waves-effect waves-block waves-light">
                     <img class="activator responsive-img" src="http://localhost:3000/<?= $resep['gambar_resep']  ?>">
                  </div>
                  <div class="card-content">
                     <span class="card-title activator" style="font-weight: bold;"><?= $resep['nama_resep'] ?>
                        <i class="material-icons right">more_vert</i>
                     </span>
                     <hr>
                     <p><button><a href="<?= base_url() ?>Menu/details/<?= $resep['id_resep'] ?>">Detail</a></button></p>
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