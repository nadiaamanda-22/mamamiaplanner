<!-- Halaman Detail -->

<!-- Slider -->
<div class="slider detail">
   <ul class="slides">
      <li>
         <img src="<?= base_url('assets/img/menu/menu/menu1.jpeg'); ?>">
         <div class="caption center-align">
            <h3>Cara Pembuatan</h3>
         </div>
      </li>
   </ul>
</div>
<!-- Content -->
<div class="container">
   <!-- Nama Masakan -->
   <h4 style="font-size: 47px;"><?= $resep['nama_resep'] ?></h4>
   <hr>
   <!-- Keterangan -->
   <p class="deskripsi"><?= $resep['deskripsi_resep'] ?></p>

   <!-- gambar -->
   <div class="woku" style="text-align: center;">
      <img src="http://localhost:3000/<?= $resep['gambar_resep'] ?>">
      <!-- Kalori -->
      <h5 style="color: #aa5806;">Kalori : <?= $resep['kalori'] ?> / Porsi</h5>
   </div>

   <!-- Bahan2 -->
   <div class="bahan">
      <h4>Bahan-bahan</h4>
      <hr>
      <ul>
         <?php foreach ($bahan as $b) : ?>
            <li>- <?= $b['bahan'] ?></li>
         <?php endforeach; ?>
      </ul>
   </div>

   <!-- Cara Masak -->
   <div class="cara">
      <h4>Cara Membuat</h4>
      <hr>
      <ol type="A">
         <?php foreach ($masak as $m) : ?>
            <li><?= $m['langkah_masak'] ?></li>
         <?php endforeach; ?>
      </ol>
   </div>

   <?php
   $thumbs = explode('=', $resep['link_youtube']);
   ?>

   <!-- Tutorial Youtube -->
   <div class="link">
      <h4>Tutorial Pembuatan</h4>
      <div class="card" style="width: 300px;">
         <div class="card-image">
            <div class="video-container">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $thumbs[1] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
         <div class="card-content">
            <h5><?= $resep['nama_resep'] ?></h5>
         </div>
         <div class="card-action">
            <a href="<?= $resep['link_youtube'] ?>" class="waves-effect waves-light btn" target="_blank" style="background-color: #aa5806;">Lihat Di YouTube</a>
         </div>
      </div>
   </div>


</div>