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
    <section class=" s-pageheader--home">

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

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">جستجو برای  :</span>
                            <input type="search" class="search-field" placeholder="جستجو" value="" name="s" title="جستجو برای:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="جستجو">
                    </form>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">بستن</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>منو</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">نویگیشن</h2>



                    <ul class="header__nav">

                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu')); ?>

                    </ul>

                                    <!-- <li class="current"><a href="index.html" title="">خانه</a></li>
                        <li class="has-children">
                            <a href="#0" title="">دسته ها</a>
                            <ul class="sub-menu">
                            <li><a href="category.html">چرخه زندگی</a></li>
                            <li><a href="category.html">زندگی</a></li>
                            <li><a href="category.html">فامیل</a></li>
                            <li><a href="category.html">مدیریت</a></li>
                            <li><a href="category.html">مسافرت</a></li>
                            <li><a href="category.html">کار</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#0" title="">وبلاگ</a>
                            <ul class="sub-menu">
                            <li><a href="single-video.html">پست ویدیو </a></li>
                            <li><a href="single-audio.html">پست صدا </a></li>
                            <li><a href="single-gallery.html">پست عکس ها </a></li>
                            <li><a href="single-standard.html">پست استاندارد</a></li>
                            </ul>
                        </li>
                        <li><a href="style-guide.html" title="">استایل ها</a></li>
                        <li><a href="about.html" title="">درباره</a></li>
                        <li><a href="contact.html" title="">تماس با ما</a></li>

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">بستن</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->