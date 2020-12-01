<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package blm_basic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--- Webmaster !-->
    <meta name="google-site-verification" content="dxvRAslrSofSzAGrdagnzmVF7_iCnceMEFIBt59ybig" />
	<?php get_template_part( 'inc/favicons' ); ?>
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="overflow-x: hidden">

<div class="top-bar navbar-fixed-top sticky ">
    <div class="container fullwidth">
        <div class="row">
            <div class="col-sm-4">
                <a title="web development company contact phone"
                   href="tel:<?php echo get_theme_mod( 'phone_number' ); ?>" class=" btn--dark-gray ">
                    <i class="fa fa-phone fa-3x"></i>
                </a>
            </div>

            <div class="col-sm-4">
                <h2 style="color: white;font-style: italic;font-size: 22px;padding-top: 5px;text-align: center">
					<?php bloginfo( 'name' ); ?>
                </h2>
            </div>
            <div class="col-sm-4">
                <a title="web development company contact email" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                   class=" btn--dark-blue pull-right">
                    <i class="fa fa-envelope fa-3x"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<header id="header" role="banner">
    <div class="container">
        <div class="row">
            <div id="logo-block" class="col-lg-12">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="senior software developer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lzomedia.svg"  class="press-logo" alt="Lzo Media">
                    <br>
                </a>
            </div>

        </div>

        <div class="row hide-on-mobile">

            <div class="col-lg-12">

                <ul class="honeycomb" lang="en">
                    <li class="honeycomb-cell">
                        <div class="honeycomb-cell__image">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="honeycomb-cell__title">
                           <a href="<?php echo get_home_url(); ?>">Home</a>
                        </div>
                    </li>
                    <li class="honeycomb-cell">
                        <div class="honeycomb-cell__image">
                            <i class="fa fa-address-card"></i>
                        </div>
                        <div class="honeycomb-cell__title">
                            <a href="<?php echo get_home_url(); ?>/about">About</a>
                        </div>
                    </li>
                    <li class="honeycomb-cell">
                        <div class="honeycomb-cell__image">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="honeycomb-cell__title">
                            <a href="<?php echo get_home_url(); ?>/services" title="web development company services">Services</a>
                        </div>
                    </li>
                    <li class="honeycomb-cell">
                        <div class="honeycomb-cell__image">
                            <i class="fa fa-connectdevelop"></i>
                        </div>
                        <div class="honeycomb-cell__title">
                            <a href="<?php echo get_home_url(); ?>/works" title="web development company works">Works</a>
                        </div>
                    </li>

                    <li class="honeycomb-cell">
                        <div class="honeycomb-cell__image">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="honeycomb-cell__title">
                            <a href="<?php echo get_home_url(); ?>/blog" title="web development company blog">Blog</a>
                        </div>
                    </li>
                    <li class="honeycomb-cell honeycomb__placeholder"></li>
                    <li class="honeycomb-cell">
                        <div class="honeycomb-cell__image">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="honeycomb-cell__title">
                            <a href="<?php echo get_home_url(); ?>/contact">Contact</a>
                        </div>
                    </li>

                    <li class="honeycomb-cell honeycomb__placeholder"></li>
                </ul>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu show-on-mobile hide-on-tablet hide-on-desktop" onclick="openNav()">&#9776; Menu</div>
            </div>
        </div>


    </div>


    <nav id="navbar-primary" class="navbar-expand-lg navbar-dark  " role="navigation">
        <div class="container-fluid">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div>
		            <?php
		            wp_nav_menu( array(
			            'theme_location' => 'primary',
			            'menu_class'     => 'mainMenu',
		            ) );
		            ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</header><!-- header role="banner" --><!--================= Main  ===================-->
