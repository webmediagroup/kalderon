<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kalderon_Template
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
<?php wp_head(); ?>

    <script>
        jQuery(document).ready(function($) {
            $('.fade').slick({
                rtl: true,
                autoplay: true,
                dots: false,
                infinite: true,
                speed: 500,
                autoplaySpeed: 1000,
                fade: true,
                cssEase: 'linear'
            });
        });
    </script>

</head>

<body <?php body_class(); ?>>

<div class="overlay"></div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kalderon' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="menuLogo container">
            <div class="logo">
                <?php
                $logo_img = get_field ('logo', 'option')['url'];
                ?>
                <a href="/index.php"><img src="<?php echo $logo_img; ?>" /></a>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
            <div class="clear"></div>
        </div>
        <a class="phoneBtn" href=""><i class="fa fa-phone" aria-hidden="true"></i></a>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
