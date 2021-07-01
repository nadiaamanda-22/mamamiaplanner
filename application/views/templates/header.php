<!DOCTYPE html>
<html>

<head>

    <title>Mamamia Planner</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <link rel="stylesheet" href="<?= base_url('assets/materialize/css/menu.css'); ?>">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<ul id="dropdown1" class="dropdown-content dropmenu" style="width:100%;">
  <li><a href="#!">Profil</a></li>
  <li class="divider"></li>
  <li><a href="#!"><i class="fi-rr-sign-in"></i>Logout</a></li>
</ul> 
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class=" amber lighten-4">
            <div class="container" style="width:85%">
                <div class="nav-wrapper ">
                <a class="navbar-brand" href="#">
					<img
						src="<?php echo base_url() ?>assets/img/logo/logobaru.png"
						alt=""
						width="30"
						height="63"
						class="d-inline-block align-text-center "
					/>
					<span>Mamamia Planner</span>
				</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons brown-text">menu</i></a>
                    <ul class=" right hide-on-med-and-down login">
                        <?php if ($this->session->userdata() != null) : ?>
                            <li><a href="#!" class="brown-text dropdown-trigger" data-target="dropdown1"><i class=" material-icons left">account_circle</i><?= $this->session->userdata('username') ?></a></li>
                        <?php else : ?>
                            <li><a href="<?php echo base_url() ?>Auth" class="brown-text"><i class=" material-icons left">account_circle</i>Masukk / Daftar</a></li>
                        <?php endif; ?>

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