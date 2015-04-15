<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

	<![endif]-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/twentythirteen/css/style.css" />
    <link href="/wp-content/themes/twentythirteen/css/screen.css" media="screen, projection" rel="stylesheet" />
    <link href="/wp-content/themes/twentythirteen/css/print.css" media="print" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
	<?php wp_head(); ?>
    <script type="text/javascript">
        jQuery(document).ready( function($){
            $( "form" ).addClass( "" );
            $( "section.wrapp .sidebar .news ul li ").addClass( "" );
        });
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/wp-content/themes/twentythirteen/js/main.js " ></script>




</head>

<body <?php body_class(); ?>>

<!--**************HEADER************-->

    <header style="position: relative; width: 100%; height: 524px;">

        <div class="conteiner">
            <div class="header-wrap">
                <h1>
                        <a href="/"><img src="/wp-content/themes/twentythirteen/images/logo.jpg" alt="Кафедра ПМ" /></a>
                    </h1>
                <nav class="nav-main">
                    <?php
                    wp_nav_menu( array(
                    'menu_class'     => 'main-menu',
                    'theme_location' => 'top',
                    ) ); ?>
                </nav>
            </div>







        </div>
        <img style="width: 100%; position: absolute; top: 74px; height: 450px;" src="/wp-content/themes/twentythirteen/images/map.jpg" alt="Sitis map"/>

    </header>
    <!--**************SLIDER************-->


<div class="conteiner">
    <section class="wrapp">
