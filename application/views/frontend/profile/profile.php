<!-- Halaman User Profile -->

<!-- CSS halaman profile -->
<style type="text/css">
   .profil img {
      margin-left: 50px;
      width: 200px;
      margin-top: 50px;
   }

   .profil h3 {
      font-family: 'Sulphur Point';
      font-size: 30px;
      margin-top: 80px;
      /* color: #aa5806; */
   }

   .profil p {
      font-family: 'Poppins';
      margin-top: -5px;
      margin-right: 200px;
      color: gray;
      font-size: 20px;
   }

   .profil a {
      background-color: #aa5806;
      color: white;
      border-radius: 10px;
      margin-top: -30px;
      font-family: 'Sulphur Point';
   }

   .grss {
      margin-left: 200px;
      margin-top: 50px;
      width: 1090px;
   }
</style>
<!-- End CSS -->

<!-- profile -->

<div class="container profil">

   <div class="row">

      <div class="col-sm-4  text-center">
         <!-- Poto profile user-->
         <img src="http://localhost:3000/<?= $profile['foto_user'] ?>" class="rounded-circle responsive-img">
      </div>

      <div class="col-sm-4">

         <!-- Nama user -->
         <h3 class="display-4"><?= $profile['username'] ?></h3>

         <!-- email -->
         <p class="lead"><?= $profile['email_user'] ?></p>

         <!-- pengaturan akun -->
         <a href="<?= base_url('profile/pengaturan/'); ?><?= $profile['id_user'] ?>" class="waves-effect waves-light btn">Pengaturan Akun</a>
      </div>
   </div>
</div>
<!-- garis -->
<hr class="grss">

<!-- Postinganku -->
<section id="postingan" class="postingan">
   <div class="container judull" style="margin-top: -100px;">
      <h4 style="font-size: 35px;">Postinganku</h4>
   </div>



   <div class="container">
      <!-- postingan -->
      <div class="row">
         <?php $post_user = $profile['tbl_post_users']; ?>
         <?php if (!$post_user) : ?>
            <h4 style="font-size: 35px;">belum ada postingan</h4>
         <?php else : ?>
            <?php foreach ($post_user as $key) : ?>
               <div class="col-md-3">
                  <img src="<?= base_url('assets/img/menu/menu/ayam_woku.jpg'); ?>" class="responsive-img materialboxed" style="margin-top: 20px;">
               </div>
            <?php endforeach; ?>
         <?php endif; ?>
      </div>
   </div>
</section>