<!DOCTYPE html>
<html>

<head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/materialize/css/materialize.min.css " media="screen,projection" />
   <!-- font google -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&family=Poppins:wght@300;400&family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <!-- CSS -->
   <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/materialize/css/styleregis.css " media="screen,projection" />

   <title>Halaman Registrasi</title>
</head>

<body>
   <!-- regis -->
   <section id="regis" class="regis">
      <div class="container">
         <div class="row">
            <div class="col m6 s12">
               <img src="<?php echo base_url() ?>assets/img/login/img/logoo.png" alt="" class="responsive-img">
            </div>
            <div class="col m6 s12">
               <div class="input-field col s12">
                  <form action="" method="post">
                     <h5>Daftar</h5>
                     <p class="text">Silahkan Isi Data pada Kolom yang Tersedia</p>
                     <div class="row">
                        <div class="input-field col s10 name">
                           <i class="material-icons prefix">account_circle</i>
                           <input placeholder="Username" name="username" id="username" type="text" value="<?= $this->form_validation->set_value('username') ?>">
                           <label for="username">Username</label>
                           <span class="helper-text"><?= $this->form_validation->error('username'); ?></span>
                        </div>

                        <div class="input-field col s10 email">
                           <i class="material-icons prefix">email</i>
                           <input placeholder="Email" name="email" id="email" type="text" value="<?= $this->form_validation->set_value('email') ?>">
                           <label for="email">Alamat Email</label>
                           <span class="helper-text"><?= $this->form_validation->error('email'); ?></span>
                        </div>

                        <div class="input-field col s10 password">
                           <i class="material-icons prefix">lock</i>
                           <input placeholder="Kata Sandi" name="password1" id="password1" type="password">
                           <label for="password1">Kata Sandi</label>
                           <span class="helper-text"><?= $this->form_validation->error('password1'); ?></span>
                        </div>

                        <div class="input-field col s10 password">
                           <i class="material-icons prefix">lock</i>
                           <input placeholder="Kata Sandi" name="password2" id="password2" type="password">
                           <label for="password2">Ulangi Kata Sandi</label>
                           <span class="helper-text"><?= $this->form_validation->error('password2'); ?></span>
                        </div>

                        <div class="row center">
                           <div class="col s12 center">
                              <button type="submit" name="submit_registrasi" class="waves-effect waves-teal btn-flat button">Daftar</button>
                              <p class="reg center">Sudah Punya Akun? <a href="<?php echo base_url() ?>auth" class="here">Masuk Disini</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/materialize.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <?php if ($this->session->flashdata('error')) : ?>
      <script>
         Swal.fire({
            icon: 'error',
            title: 'Email sudah digunakan !!',
            text: 'Silahkan gunakan email yang berbeda',
         })
      </script>
   <?php else : ?>
   <?php endif; ?>
   <?php if ($this->session->flashdata('success')) : ?>
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Registrasi berhasil !!',
            text: 'Silahkan login',
            time: 1000
         }).then(function() {
            window.location = '<?= base_url() ?>Auth';
         });
      </script>
   <?php endif; ?>
</body>

</html>