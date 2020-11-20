<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pengaturan->nama ?> - <?php echo $pengaturan->deskripsi ?></title>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta name="description" content="<?php echo $meta_description ?>">
    <meta name="keywords" content="<?php echo $meta_keyword ?>">

    <!-- Favicons -->
    <link href="<?php echo base_url().'/gambar/website/'.$pengaturan->logo; ?>" rel="icon">
    <link href="<?php echo base_url(); ?>assets_frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600,700,900&amp;display=swap">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>src/css/skin-5.css">
</head>
<body>

    <!-- Loading -->
    <div id="preloader" class="preloader">
        <div class="preloader-inner">
            <div class="preloader-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- / -->
    
    <!-- Start Header -->
    <header class="site-header">
        <div class="header-logo">
            <a href="#" title="Syabab Muslim - Web">Syabab Muslim.</a>
        </div>
        <div class="header-menu button-open-sidenav">
            <a href="#">
                <span></span>
            </a>
        </div>
        <div class="header-follow">
            <ul>
                <li>
                    <a href="<?php echo $pengaturan->link_instagram ?>"><i class="ti-instagram"></i></a>
                </li>
                <li>
                    <a href="<?php echo $pengaturan->link_facebook ?>"><i class="ti-facebook"></i></a>
                </li>
                <li>
                    <a href="<?php echo $pengaturan->link_github ?>"><i class="ti-github"></i></a>
                </li>
            </ul>
            <p>Find me on </p>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Sidenav -->
    <div class="site-sidenav">
        <div class="sidenav-menu">
            <h2 class="logo">Syabab Muslim.</h2>
            <button class="button button-close-sidenav"></button>
            <ul class="menu">
                <li>
                    <a href="#home">Home</a>
                    <i class="ti-arrow-right"></i>
                </li>
                <li>
                    <a href="#about">About</a>
                    <i class="ti-arrow-right"></i>
                </li>
                <li>
                    <a href="#resume">Resume</a>
                    <i class="ti-arrow-right"></i>
                </li>
                <li>
                    <a href="#services">Services</a>
                    <i class="ti-arrow-right"></i>
                </li>
                <li>
                    <a href="#portfolio">Portfolio</a>
                    <i class="ti-arrow-right"></i>
                </li>
                <li>
                    <a href="#testimonials">Testimonials</a>
                    <i class="ti-arrow-right"></i>
                </li>
                <li>
                    <a href="#blog">Product</a>
                    <i class="ti-arrow-right"></i>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                    <i class="ti-arrow-right"></i>
                </li>
            </ul>
        </div>
        <span class="sidenav-close"></span>
    </div>
    <!-- End Sidenav -->