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
   <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/materialize/css/forgot.css " media="screen,projection" />

   <title>Halaman Lupa Password</title>
</head>

<body>

   <!-- Forgot Password -->
   <section id="regis" class="regis">
      <div class="container center">
         <div class="row">
            <div class="col m12 s12">
               <div class="card">

                  <div class="card-action white-text center">
                     <h3>Reset password</h3>
                     <p class="silahkan">Silahkan masukkan password baru</p>
                  </div>

                  <div class="card-content">
                     <div class="form-field center">
                        <form action="" method="POST">
                           <div class="row">
                              <div class="input-field col s11">
                                 <i class="material-icons prefix">lock</i>
                                 <input id="password1" name="password1" type="password" class="validate" required>
                                 <label for="password1">Password baru</label>
                              </div>
                              <div class="input-field col s11">
                                 <i class="material-icons prefix">lock</i>
                                 <input id="password2" name="password2" type="password" class="validate" required>
                                 <label for="password2">Masukan ulang password</label>
                              </div>
                              <div class="form-field center">
                                 <button type="submit" class="waves-effect waves-teal btn-flat button">Kirim</button>
                              </div>
                        </form>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      </div>
   </section>


   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/materialize.min.js"></script>
   <?php if ($this->session->flashdata('newpass')) : ?>
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Password berhasil direset',
            text: 'Silahkan login !!',
            time: 1000
         }).then(function() {
            window.location = '<?= base_url() ?>Auth';
         });
      </script>
   <?php endif; ?>

</body>

</html>