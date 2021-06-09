<!DOCTYPE html>
<html>

<head>

   <title>Menu Masakan</title>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
   <link type="text/css" rel="stylesheet" href="css/materialize/css/style.css " media="screen,projection" />
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link
      href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Fredoka+One&family=Nunito:wght@700&family=Pacifico&display=swap"
      rel="stylesheet">
   <!-- css swiper -->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

   <!-- css -->
   <link rel="stylesheet" href="css/stylemenu.css">

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

   <!-- Navbar -->
   <div class="navbar-fixed">
      <nav class=" amber lighten-4">
         <div class="container">
            <div class="nav-wrapper ">
               <a href="#home" class="brand-logo responsive-img logobaru"><img src="img/logoo.png" alt=""></a>

               <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i
                     class="material-icons brown-text">menu</i></a>

               <ul class=" right hide-on-med-and-down login">
                  <li><a href="" class="brown-text"><i class=" material-icons left">account_circle</i>Masuk atau
                        Daftar</a></li>
               </ul>

               <ul class="menu right hide-on-med-and-down">
                  <li><a href="<?php echo base_url()?>home" class="brown-text">Beranda</a></li>
                  <li><a href="<?php echo base_url()?>penjadwalan" class="brown-text">Penjadwalan</a></li>
                  <li><a href="#services" class="brown-text">Menu</a></li>
                  <li><a href="#portfolio" class="brown-text">Forum</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </div>
   <!-- end -->

   <!-- sidenav -->
   <ul class="sidenav" id="mobile-nav">
      <li><a href="#about" class="brown-text">Beranda</a></li>
      <li><a href="#clients" class="brown-text">Penjadwalan</a></li>
      <li><a href="#services" class="brown-text">Menu</a></li>
      <li><a href="#portfolio" class="brown-text">Forum</a></li>
      <li><a href="#contact" class="brown-text">About</a></li>
   </ul>
   <!-- end -->



   <!-- Menu -->

   <!-- Slider -->
   <div class="slider">
      <ul class="slides">
         <li>
            <img src="img/menu/menu1.jpeg"> <!-- random image -->
            <div class="caption center-align">
               <h3>Menu Masakan</h3>
            </div>
         </li>
      </ul>
   </div>

   <div class="container">
      <h4 class="judul-menu">100 Menu Tersedia</h4>
      <div class="row">
         <div class="col m4 s12">
            <div class="card menu">
               <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/menu/boba_tea.jpg">
               </div>
               <div class="card-content">
                  <span class="card-title activator" style="font-weight: bold;">Bubble Tea
                     <i class="material-icons right">more_vert</i>
                  </span>
                  <hr>
                  <p><button type="submit" href="#">Detail</button></p>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Bubble Tea<i
                        class="material-icons right">close</i></span>
                  <p>Bahan :</p>
               </div>
            </div>
         </div>

         <div class="col m4 s12">
            <div class="card menu">
               <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/menu/kelapa_muda.jpg">
               </div>
               <div class="card-content">
                  <span class="card-title activator" style="font-weight: bold;">Cincau Kelapa Muda
                     <i class="material-icons right">more_vert</i>
                  </span>
                  <hr>
                  <p><button type="submit" href="#">Detail</button></p>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Cincau Kelapa Muda<i
                        class="material-icons right">close</i></span>
                  <p>Bahan :</p>
               </div>
            </div>
         </div>

         <div class="col m4 s12">
            <div class="card menu">
               <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/menu/es_jagung.jpg">
               </div>
               <div class="card-content">
                  <span class="card-title activator" style="font-weight: bold;">Es Jagung Jelly
                     <i class="material-icons right">more_vert</i>
                  </span>
                  <hr>
                  <p><button type="submit" href="#">Detail</button></p>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Es Jagung Jelly<i
                        class="material-icons right">close</i></span>
                  <p>Bahan :</p>
               </div>
            </div>
         </div>

         <div class="col m4 s12">
            <div class="card menu">
               <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/menu/angsie.jpg">
               </div>
               <div class="card-content">
                  <span class="card-title activator" style="font-weight: bold;">Angsle
                     <i class="material-icons right">more_vert</i>
                  </span>
                  <hr>
                  <p><button type="submit" href="#">Detail</button></p>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Angsle<i
                        class="material-icons right">close</i></span>
                  <p>Bahan :</p>
               </div>
            </div>
         </div>

         <div class="col m4 s12">
            <div class="card menu">
               <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/menu/es_kuwut.jpg">
               </div>
               <div class="card-content">
                  <span class="card-title activator" style="font-weight: bold;">Es Kuwut
                     <i class="material-icons right">more_vert</i>
                  </span>
                  <hr>
                  <p><button type="submit" href="#">Detail</button></p>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Es Kuwut<i
                        class="material-icons right">close</i></span>
                  <p>Bahan :</p>
               </div>
            </div>
         </div>

         <div class="col m4 s12">
            <div class="card menu">
               <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator responsive-img" src="img/menu/es_semangka.jpg">
               </div>
               <div class="card-content">
                  <span class="card-title activator" style="font-weight: bold;">Es Semangka Susu
                     <i class="material-icons right">more_vert</i>
                  </span>
                  <hr>
                  <p><button type="submit" href="#">Detail</button></p>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Es Semangka Susu<i
                        class="material-icons right">close</i></span>
                  <p>Bahan :</p>
               </div>
            </div>
         </div>

      </div>

      <div class="pag">
         <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="menu.html">1</a></li>
            <li class="waves-effect"><a href="menu2.html">2</a></li>
            <li class="waves-effect"><a href="menu3.html">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
         </ul>
      </div>
   </div>

   <!-- End Menu -->


   <!-- footer -->
   <footer class="amber lighten-4">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
         <path fill="#ffffff" fill-opacity="1"
            d="M0,128L48,106.7C96,85,192,43,288,69.3C384,96,480,192,576,197.3C672,203,768,117,864,96C960,75,1056,117,1152,117.3C1248,117,1344,75,1392,53.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
         </path>
      </svg>
      <div class="container content ">
         <div class="row">
            <div class="col l6 s12 ">
               <h5 class="brown-text logo">Logo Mamamia</h5>
               <img src="img/logoo.png" alt="" class="left">
            </div>
            <div class="row">
               <div class="col l4 offset-l2 s12">
                  <h5 class="brown-text">Menu</h5>
                  <ul>
                     <li><a class="brown-text text-lighten-3" href="#!">Beranda</a></li>
                     <li><a class="brown-text text-lighten-3" href="#!">Pendjadwalan</a></li>
                     <li><a class="brown-text text-lighten-3" href="#!">Menu </a></li>
                     <li><a class="brown-text text-lighten-3" href="#!">Forum</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-copyright amber lighten-3">
         <div class="container center textcopy brown-text">
            © 2021 Mamamia Planner
         </div>
      </div>
   </footer>
   <!-- end -->

   <!--JavaScript at end of body for optimized loading-->
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"></script>
   <script type="text/javascript" src="css/materialize.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>

   <!-- slider js -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
         indicators: false,
         height: 400,
         transition: 300,
         interval: 3000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const dropdown = document.querySelectorAll('.dropdown-trigger');
      M.Dropdown.init(dropdown);

      // yg kepake di menu
      const slidemenu = document.querySelectorAll('.slider');
      M.Slidemenu.init(slidemenu, {
         indicators: false,
         height: 400
      });

   </script>

   <!-- Initialize Swiper -->
   <script>
      var swiper = new Swiper('.swiper-container', {
         spaceBetween: 80,
         centeredSlides: true,
         autoplay: {
            delay: 4000,
            disableOnInteraction: false,
         },
         pagination: {
            el: '.swiper-pagination',
            clickable: true,
         },
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
      });
   </script>

</body>

</html>