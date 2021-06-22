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
   <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/materialize/css/stylelogin.css " media="screen,projection" />

   <title>Halaman Masuk</title>
</head>

<body>

   <!-- login -->
   <section id="login" class="login">
      <div class="container">
         <div class="row">
            <div class="col m6 s12">
               <img src="<?php echo base_url() ?>assets/img/login/img/logoo.png" alt="" class="responsive-img">
            </div>

            <div class="col m6 s12">
               <div class="input-field col s12">
                  <form>
                     <h5>Masuk untuk Melanjutkan</h5>
                     <p class="text">Harap Masuk untuk Melanjutkan</p>

                     <div class="row">
                        <div class="input-field col s10 email">
                           <i class="material-icons prefix">email</i>
                           <input placeholder="Username atau Email" id="nama" name="nama" type="text" class="validate" required>
                           <label for="nama">Alamat Email</label>
                           <span class="helper-text" data-error="Email / Username tidak sesuai" data-success></span>
                        </div>
                        <div class="input-field col s10 password">
                           <i class="material-icons prefix">lock</i>
                           <input placeholder="Kata Sandi" id="password" type="password" class="validate" required>
                           <label for="password">Kata Sandi</label>
                           <span class="helper-text" data-error="Kata sandi tidak sesuai" data-success></span>
                        </div>

                        <div class="col s10 forgot">
                           <a href="<?php echo base_url() ?>forgot" class="forgot grey-text lighten-5 right">
                              <p>Lupa Kata Sandi?</p>
                           </a>
                        </div>
                        <div class="row center">
                           <div class="col s12 center">
                              <a href="<?php echo base_url() ?>home" class="waves-effect waves-teal btn-flat button">Masuk ke Akun Saya</a>
                              <p class="reg center">Belum Punya Akun? <a href="<?php echo base_url() ?>registrasi" class="here">Daftar
                                    Disini</a></p>
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
</body>

</html>