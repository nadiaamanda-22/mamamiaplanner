<!DOCTYPE html>
<html>

<head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/materialize/css/materialize.min.css "  media="screen,projection"/>
   <!-- font google -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&family=Poppins:wght@300;400&family=Sulphur+Point:wght@300;400;700&display=swap"
      rel="stylesheet">

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <!-- CSS -->
   <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/materialize/css/styleregis.css " media="screen,projection"/>

   <title>Halaman Registrasi</title>
</head>

<body>

   <!-- regis -->
   <section id="regis" class="regis">
      <div class="container">
         <div class="row">
            <div class="col m6 s12">
               <img src="<?php echo base_url()?>assets/img/login/img/logoo.png" alt="" class="responsive-img">
            </div>

            <div class="col m6 s12">
               <div class="input-field col s12">
                  <form>
                     <h5>Daftar</h5>
                     <p class="text">Silahkan Isi Data pada Kolom yang Tersedia</p>
                     <div class="row">
                        <div class="input-field col s10 name">
                           <i class="material-icons prefix">account_circle</i>
                           <input placeholder="Username" id="name" name="name" type="text" class="validate" required>
                           <label for="name">Username</label>
                           <span class="helper-text" data-error="Username tidak sesuai" data-success></span>
                        </div>

                        <div class="input-field col s10 email">
                           <i class="material-icons prefix">email</i>
                           <input placeholder="Email" id="email" name="email" type="email" class="validate" required>
                           <label for="email">Alamat Email</label>
                           <span class="helper-text" data-error="Email tidak sesuai" data-success></span>
                        </div>

                        <div class="input-field col s10 password">
                           <i class="material-icons prefix">lock</i>
                           <input placeholder="Kata Sandi" id="password" type="password" class="validate" required>
                           <label for="password">Kata Sandi</label>
                           <span class="helper-text" data-error="Password tidak sesuai" data-success></span>
                        </div>

                        <div class="row center">
                           <div class="col s12 center">
                              <a class="waves-effect waves-teal btn-flat button">Daftar</a>
                              <p class="reg center">Sudah Punya Akun? <a href="<?php echo base_url()?>login" class="here">Masuk Disini</a>
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
   <script type="text/javascript" src="<?php echo base_url()?>assets/materialize/js/materialize.min.js"></script>
</body>

</html>