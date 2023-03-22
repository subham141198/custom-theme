<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/v4-shims.css">
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>
        <?php wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <a class="skippy sr-only sr-only-focusable" href="#main">
        <span class="skippy-text">Skip to Content</span>
    </a>
    <a class="skippy sr-only sr-only-focusable" href="#mainNav">
        <span class="skippy-text">Skip to Navigation</span>
    </a>
    <!-- coronavirus links and resources    -->
    <div class="red_popup" role="alert">
        <div class="container-fluid">
            <form class="form-inline">
                <div class="row">
                    <div class="col-md-8 themed-grid-col campus_text_left">
                        <p class="mb-0">
                            <b>Coming to campus?</b> Everyone must complete screening questions before entering the
                            building.
                        </p>
                        <p class="mb-0">Click “Coronavirus links and resources” for
                            details.</p>
                    </div>
                    <div
                        class="col-md-4 themed-grid-col d-flex justify-content-end align-items-center campus_text_right">
                        <p class="mb-0"><a href="https://normandale.ewaycorphosting.com/home.html"
                                aria-label="Coronavirus links and resources">Coronavirus links and resources</a></p>
                        <span>
                            <button type="button" class="btn">
                                <span class="hidden" aria-hidden="true">cross</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cross.png" class="pop_cross"
                                    alt="cross">
                            </button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- coronavirus links and resources    -->
    <!-- black area/ logo/ menu    -->
    <header>
        <div class="flex-nowrap justify-content-between align-items-center header-top">
            <div class="container">
                <ul class="nav nav-list justify-content-center float-md-cente">
                    <?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'topbar_menu')); ?>
                </ul>
            </div>
        </div>
        <!-- logo/ menu    -->
        <div class="header-bottom">
            <div class="navbar">
                <div class="container-fluid">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="navbar-brand d-flex align-items-center logo" aria-label="main logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="" alt="logo">
                    </a>
                    <div class="col-6 d-flex justify-content-end align-items-center search_menu">
                        <a href="https://normandale.ewaycorphosting.com/home.html" class="link-secondary"
                            data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="search">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/search.png" class="" alt="search">
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" aria-label="cross" aria-expanded="false">
                            <span class="hidden" aria-hidden="true">cross</span>
                            <span class="animated-icon2">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-content_inner">
                            <div class="modal-header d-flex justify-content-end align-items-center">
                                <h5 class="modal-title hidden" id="exampleModalLabel">Modal title</h5>
                                <ul class="nav nav-list justify-content-center float-md-center">
                                    <li>
                                        <a href="https://normandale.ewaycorphosting.com/home.html"
                                            aria-label="directories">directories</a>
                                    </li>
                                </ul>
                                <button type="button" class="m_close" data-bs-dismiss="modal" aria-label="Close">
                                    close
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cross.png" class=""
                                        alt="cross">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row ">
                                    <div class="col-md-4 themed-grid-col">
                                        <form class="navbar-form navbar-left" role="search"
                                            action="<?php echo esc_url(home_url('/')); ?>">
                                            <div class="form-group">
                                                <label for="boxsearch" class="hidden">search</label>
                                                <input type="text" class="form-control" placeholder="Search"
                                                    id="boxsearch" name="s">
                                            </div>
                                            <button type="submit" class="btn btn-default" aria-label="cross">
                                                <span class="hidden" aria-hidden="true">cross</span>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/white_search.png"
                                                    class="" alt="search">
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-4 themed-grid-col normandal_question_1">
                                        <div class="section_inner">
                                            <h4>
                                                <a href="https://normandale.ewaycorphosting.com/home.html"
                                                    aria-label=" Why Normandale?"> Why Normandale?</a>
                                            </h4>

                                            <h4>
                                                <a href="https://normandale.ewaycorphosting.com/home.html"
                                                    aria-label="What Makes Us Different">What Makes Us Different</a>
                                            </h4>

                                            <h4>
                                                <a href="https://normandale.ewaycorphosting.com/home.html"
                                                    aria-label=" Facts & Stats"> Facts & Stats</a>
                                            </h4>

                                            <h4>
                                                <a href="https://normandale.ewaycorphosting.com/home.html"
                                                    aria-label="Support Normandale">Support Normandale</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 themed-grid-col  normandal_question_2">
                                        <h2>
                                            <a href="https://normandale.ewaycorphosting.com/home.html"
                                                aria-label="Why Normandale?">Why Normandale?</a>
                                        </h2>

                                        <h2>
                                            <a href="https://normandale.ewaycorphosting.com/home.html"
                                                aria-label="What Can I Study?">What Can I Study?</a>
                                        </h2>
                                        <h2>
                                            <a href="https://normandale.ewaycorphosting.com/home.html"
                                                aria-label="How Do I Get Started?">How Do I Get Started?</a>
                                        </h2>

                                        <h2>
                                            <a href="https://normandale.ewaycorphosting.com/home.html"
                                                aria-label="What’s it Like to Be a Student?">What’s it Like to Be a
                                                Student?</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <ul class="nav nav-list justify-content-center float-md-end">
                                    <li>
                                        <a href="https://normandale.ewaycorphosting.com/home.html"
                                            aria-label="instagram">
                                            <span class="hidden">instagram</span>
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://normandale.ewaycorphosting.com/home.html"
                                            aria-label="facebook square icon">
                                            <span class="hidden">facebook</span>
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://normandale.ewaycorphosting.com/home.html"
                                            aria-label="twitter-square icon">
                                            <span class="hidden">twitter-square</span>
                                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://normandale.ewaycorphosting.com/home.html"
                                            aria-label="youtube-play icon">
                                            <span class="hidden">youtube-play</span>
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://normandale.ewaycorphosting.com/home.html"
                                            aria-label="vimeo-square icon">
                                            <span class="hidden">vimeo-square</span>
                                            <i class="fa fa-vimeo-square" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://normandale.ewaycorphosting.com/home.html"
                                            aria-label="linkedin-square icon">
                                            <span class="hidden">linkedin-square</span>
                                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo/ menu    -->
    </header>
    <!-- black area/ logo/ menu    -->
    <main>
        <?php if(is_front_page()){
            ?>

        
        <section id="demos">
            <div class="container-fluid p-0 home_carousel_main home_slide">

                <div id="myCarousel" class="carousel slide home_carousel mx-0 px-0">
                    <div class="owl-carousel owl-theme" id="owl-carousel3">
                        <div class="item">
                            <div class="container-fluid position-relative p-0 common_banner_image">
                                <div class="image">
                                    <img src="img/slider_img.jpg" class="" alt="banner img">
                                </div>
                                <div class="image_text">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                        data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title text-uppercase">lorem ipsum amet set</div>
                                        <div class="home_slider_subtitle">Libro Velit Dolor bus</div>
                                        <!-- <div class="button button_light home_button"><a href="#">Shop Now</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid position-relative p-0 common_banner_image">
                                <div class="image">
                                    <img src="img/slide_banner.jpg" class="" alt="banner img">
                                </div>
                                <div class="image_text">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                        data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title text-uppercase">lorem ipsum amet set</div>
                                        <div class="home_slider_subtitle">Libro Velit Dolor bus</div>
                                        <!-- <div class="button button_light home_button"><a href="#">Shop Now</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid position-relative p-0 common_banner_image">
                                <div class="image">
                                    <img src="img/slider_img2.jpg" class="" alt="banner img">
                                </div>
                                <div class="image_text">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                        data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title text-uppercase">lorem ipsum amet set</div>
                                        <div class="home_slider_subtitle">Libro Velit Dolor bus</div>
                                        <!-- <div class="button button_light home_button"><a href="#">Shop Now</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid position-relative p-0 common_banner_image">
                                <div class="image">
                                    <img src="img/slider_img3.jpg" class="" alt="banner img">
                                </div>
                                <div class="image_text">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                        data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title text-uppercase">lorem ipsum amet set</div>
                                        <div class="home_slider_subtitle">Libro Velit Dolor bus</div>
                                        <!-- <div class="button button_light home_button"><a href="#">Shop Now</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="carouselButtons">
                        <a class="button secondary play" src="#"> <span class="hidden" aria-hidden="true">play</span>
                            <span class="fa fa-pause"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>