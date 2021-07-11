<!-- Halaman pengaturan profil -->
<style>
   .atur img {
      width: 200px;
      margin-top: 30px;
      margin-bottom: 10px;
   }
</style>

<div class="container">
   <div class="container atur text-center">
      <h4 style="font-size: 30px;">Pengaturan Akun</h4>

      <!-- Poto profile user-->
      <div class="poto">
         <img src="<?= base_url('assets/img/team/nadia.jpg'); ?>" class="rounded-circle responsive-img">
      </div>

      <!-- ubah poto profil -->
      <div class="custom-file" style="width:300px; margin-top:20px; margin-bottom:50px;">
         <input type="file" class="custom-file-input" id="foto_user" name="foto_user" required>
         <label class="custom-file-label" for="foto_user">Ubah Poto Profil</label>
      </div>
   </div>

   <form action="" method="Post">
      <div class="row ">
         <div class="col-md-6  mb-3">
            <label for="username" style="font-size: 20px;">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="Nadia" required>
         </div>

         <div class="col-md-6  mb-3">
            <label for="full_name" style="font-size: 20px;">Fullname</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="Nadia Amanda" required>
         </div>

         <div class="col-md-6  mb-3">
            <label for="email_user" style="font-size: 20px;">Email</label>
            <input type="text" class="form-control" id="email_user" name="email_user" value="nadiaamanda@gmail.com" required>
         </div>

         <div class="col-md-6  mb-3">
            <label for="password_user" style="font-size: 20px;">Kata Sandi</label>
            <input type="password" class="form-control" id="password_user" name="password_user" value="12345" required>
         </div>
      </div>

      <div class="form-group text-center">
         <button type="submit" class="btn btn-gradient" style="background-color: #aa5806; color:white;">Ubah</button>
         <a href="<?= base_url('profile'); ?>" class="btn btn-gradient" style="background-color: #aa5806; color:white;">Batal</a>
      </div>
   </form>
</div>