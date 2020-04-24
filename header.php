<!DOCTYPE html>
<html lang="en">

<head>
    <title>CREA</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/owl-carousel/owl.carousel.css" />

    <!-- Theme Style -->
    <link rel="stylesheet" href="/<?php echo get_stylesheet_directory_uri(); ?>calendar.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss/estilos.css">


</head>

<body>

    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-fluid"
                        style="width: 17rem;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav pl-md-4 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url('/') ); ?>sobre-nosotros">Sobre
                                Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( home_url('/') ); ?>contacto">Contactanos</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>
       

    </header>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3" style="text-align: right; padding-right: 35px";>
                        <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>