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
         <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
         <label class="custom-file-label" for="validatedInputGroupCustomFile">Ubah Poto Profil</label>
      </div>
   </div>

   <form action="" method="Post">
      <div class="row ">
         <div class="col-md-6  mb-3">
            <label for="name" style="font-size: 20px;">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="Nadia" required>
         </div>

         <div class="col-md-6  mb-3">
            <label for="email" style="font-size: 20px;">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="nadiaamanda@gmail.com" required>
         </div>

         <div class="col-md-6  mb-3">
            <label for="pass1" style="font-size: 20px;">Kata Sandi</label>
            <input type="password" class="form-control" id="pass1" name="pass1" value="12345" required>
         </div>

         <div class="col-md-6  mb-3">
            <label for="pass2" style="font-size: 20px;">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="pass2" name="pass2" required>
         </div>
      </div>

      <div class="form-group text-center">
         <button type="submit" class="btn btn-gradient" style="background-color: #aa5806; color:white;">Ubah</button>
         <a href="<?= base_url('profile'); ?>" class="btn btn-gradient" style="background-color: #aa5806; color:white;">Batal</a>
      </div>
   </form>
</div>