<!DOCTYPE html>
<html class="no-js mt-0" lang="fa" dir="rtl">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php bloginfo('name');?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="marginb-200">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

           <?php get_search_form(); ?>
                <a class="header__toggle-menu" href="#0" title="Menu"><span>منو</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">نویگیشن</h2>



                    <ul class="header__nav">

                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu')); ?>

                    </ul>


            </div> <!-- header-content -->
        </header> <!-- header -->