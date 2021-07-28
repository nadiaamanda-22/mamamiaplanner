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
                    <li><a class="brown-text text-lighten-3" href="<?= base_url() ?>">Beranda</a></li>
                    <li><a class="brown-text text-lighten-3" href="<?= base_url() ?>penjadwalan">Pendjadwalan</a></li>
                    <li><a class="brown-text text-lighten-3" href="<?= base_url() ?>menu">Menu </a></li>
                    <li><a class="brown-text text-lighten-3" href="<?= base_url() ?>forum">Forum</a></li>
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

<div class="fixed-action-btn buttonfix">
    <a class="btn-floating btn-large add">
        <i class="large material-icons">add</i>
    </a>
    <ul>
        <li><a class="btn-floating request"><i class="fas fa-concierge-bell"></i></a></li>
        <li><a href="#modal2" class="btn-floating upload modal-trigger addpost"><i class="bi bi-upload"></i></a></li>
    </ul>
</div>

<!-- Modal Structure -->
<div id="modal2" class="modal modalpenjadwalan2">
    <div class="modal-content" style="height: max-content;">
        <h4>Bagikan Resep Masakan</h4>
        <div class="divider"></div>
        <form action="" id="form_post_user">
            <div class="content">
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-group mt-3">
                                <input type="file" class="form-control" id="gambar_resep" name="gambar_resep" placeholder="Recipient's username">
                            </div>
                        </div>
                    </div>
                    <input id="is_active" name="is_active" type="hidden" value="1">
                    <input id="tanggal_upload" name="tanggal_upload" type="hidden" value="<?= date('Y-m-d') ?>">
                    <input id="id_user" name="id_user" type="hidden" value="<?= $this->session->userdata('id_user') ?>">
                    <h5>Judul</h5>
                    <div class="form-floating">
                        <input id="headline" name="headline" type="text">
                    </div>
                    <h5>Deskripsi</h5>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect btn  keluar2">Keluar</a>
        <button type="submit" class="modal-close waves-effect waves-green btn simpan2">Simpan</button>
    </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
            direction: 'top',
            hoverEnabled: false
        });
    });
</script>

<script>
    const fixedButton = document.querySelectorAll('.fixed-action-btn');
    M.Fixedbutton.init(fixedButton);
    //  document.addEventListener('DOMContentLoaded', function() {
    //   var elems = document.querySelectorAll('.fixed-action-btn');
    //   var instances = M.FloatingActionButton.init(elems, options);
    // });
</script>

<!--JavaScript at end of body for optimized loading-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/materialize/js/script.js"></script>
<!-- Js Bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Popover -->
<script src="<?php echo base_url() ?>assets/materialize/js/popover.js"></script>

<!-- slider js -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>js/F_Forum.js"></script>

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
    var swiper = new Swiper(".mySwiper2", {
        navigation: {
            nextEl: ".slide2",
            prevEl: ".slide3",
        },
    });
</script>

<script>
    const modal = document.querySelectorAll('.modal');
    M.Modal.init(modal);

    const select = document.querySelectorAll('.select');
    M.Select.init(select);
</script>



</body>

</html>