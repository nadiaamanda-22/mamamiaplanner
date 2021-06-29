<!DOCTYPE html>
<html>

<head>

    <title>Mamamia Planner</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/materialize/css/materialize.min.css " media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/materialize/css/style.css " media="screen,projection" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Fredoka+One&family=Nunito:wght@700&family=Pacifico&display=swap" rel="stylesheet">
    <!-- css swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- flaticon -->
    <link href="<?php echo base_url() ?>assets/uicons/css/uicons-regular-rounded.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/materialize/css/menu.css'); ?>">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class=" amber lighten-4">
            <div class="container">
                <div class="nav-wrapper ">
                    <a href="#home" class="brand-logo responsive-img logobaru"><img src="<?php echo base_url() ?>assets/img/logo/logobaru.png" alt="">
                        <span class="right brown-text">Mamamia Planner</span>
                    </a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons brown-text">menu</i></a>
                    <ul class=" right hide-on-med-and-down login">
                        <?php if ($this->session->userdata() != null) : ?>
                            <li><a href="<?php echo base_url() ?>Auth" class="brown-text"><i class=" material-icons left">account_circle</i><?= $this->session->userdata('username') ?></a></li>
                        <?php else : ?>
                            <li><a href="<?php echo base_url() ?>Auth" class="brown-text"><i class=" material-icons left">account_circle</i>Masukk / Daftar</a></li>
                        <?php endif; ?>

                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                        sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on bottom
                        </button>

                    </ul>
                    <ul class="menu right hide-on-med-and-down">
                        <li><a href="<?php echo base_url() ?>home" class="brown-text">Beranda</a></li>
                        <li><a href="<?php echo base_url() ?>penjadwalan" class="brown-text">Penjadwalan</a></li>
                        <li><a href="<?= base_url() ?>menu" class="brown-text">Menu</a></li>
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