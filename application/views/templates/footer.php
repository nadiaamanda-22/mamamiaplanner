        <!-- footer -->
        <footer class="amber lighten-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L48,106.7C96,85,192,43,288,69.3C384,96,480,192,576,197.3C672,203,768,117,864,96C960,75,1056,117,1152,117.3C1248,117,1344,75,1392,53.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
          </svg>
          <div class="container content ">
            <div class="row">
              <div class="col l6 s12 ">
                <h5 class="brown-text logo">Logo Mamamia</h5>
                <img src="<?php echo base_url() ?>assets/img/logo/mamamia.png" alt="" class="left">
              </div>
              <div class="col l6 s12">
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
          <div class="footer-copyright amber lighten-3">
            <div class="container center textcopy brown-text">
              © 2021 Mamamia Planner
            </div>
          </div>
        </footer>
        <!-- end -->

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/script.js"></script>
        <!-- Js Bootsrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Popover -->
        <script src="<?php echo base_url() ?>assets/materialize/js/popover.js"></script>

        <!-- slider js -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
          const sideNav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);

          const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 300,
            interval: 3000
          });

          const parallax = document.querySelectorAll('.parallax');
          M.Parallax.init(parallax);

          const dropdown = document.querySelectorAll('.dropdown-trigger');
          M.Dropdown.init(dropdown);

          // yg kepake di menu
          const slidemenu = document.querySelectorAll('.menu');
          M.Slidemenu.init(slidemenu, {
            indicators: false,
            height: 400
          });

          // yg kepake di detail
          const slidedetail = document.querySelectorAll('.detail');
          M.Slidedetail.init(slidedetail, {
            indicators: false,
            height: 200
          });
        </script>

        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper('.swiper2', {
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

        <script>
          var swiper = new Swiper(".mySwiper", {
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });
        </script>

        <script>
          var swiper1 = new Swiper('.swiper1', {
            navigation: {
              nextEl: ".slide2",
              prevEl: ".slide3",
            },
          });
        </script>



        <script>
          new Splide('.splide').mount();
        </script>



        <script>
          const modal = document.querySelectorAll('.modal');
          M.Modal.init(modal);

          const select = document.querySelectorAll('.select');
          M.Select.init(select);
        </script>

        <!-- JS Forum here -->
        <!-- All JS Custom Plugins Link Here here -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/vendor/modernizr-3.5.0.min.js"></script> -->
        <!-- Jquery, Popper, Bootstrap -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/bootstrap.min.js"></script> -->
        <!-- Jquery Mobile Menu -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/jquery.slicknav.min.js"></script> -->

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/slick.min.js"></script> -->

        <!-- One Page, Animated-HeadLin -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/animated.headline.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/jquery.magnific-popup.js"></script> -->

        <!-- Nice-select, sticky -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/jquery.sticky.js"></script> -->

        <!-- contact js -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/contact.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/jquery.form.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/mail-script.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/jquery.ajaxchimp.min.js"></script> -->

        <!-- Jquery Plugins, main Jquery -->
        <!-- <script src="<?php echo base_url() ?>assets/materialize/js/plugins.js"></script>
        <script src="<?php echo base_url() ?>assets/materialize/js/main.js"></script> -->

        </body>

        </html>