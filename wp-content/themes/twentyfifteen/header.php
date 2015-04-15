<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/wp-content/themes/twentyfifteen/css/style.css" />
    <link href="/wp-content/themes/twentyfifteen/css/screen.css" media="screen, projection" rel="stylesheet" />
    <link href="/wp-content/themes/twentyfifteen/css/print.css" media="print" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <link href="/wp-content/themes/twentyfifteen/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!--for slider-->
    <link rel="stylesheet" href="/wp-content/themes/twentyfifteen/css/flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="/wp-content/themes/twentyfifteen/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/wp-content/themes/twentyfifteen/js/slider.js"></script>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!--for cloud-->
    <script type="text/javascript" src="/wp-content/themes/twentyfifteen/js/swfobject.js"></script>
    <script type="text/javascript" src="/wp-content/themes/twentyfifteen/js/cloud.js"></script>
    <script type="text/javascript">
        jQuery(document).ready( function($){
            $( "form" ).addClass( "fa fa-search fa-2x" );
            $( "section.wrapp .sidebar .news ul li ").addClass( "fa fa-chevron-right fa-lg" );
        });
    </script>


</head>

<body <?php body_class(); ?>>

<!--**************HEADER************-->
<div class="big-header">
    <header>
        <div class="conteiner">
            <div class="header-wrap">

                <h1>
                    <a href="/">
                        <img src="/wp-content/themes/twentyfifteen/images/logo.jpg" alt="Кафедра ПМ" />Кафедра ПМ
                    </a>
                </h1>
                <nav class="nav-main">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-menu' ) ); ?>
                </nav>
            </div>


        </div>
        <div class="flexslider">
            <div class="conteiner">

                <ul class="slides">
                    <li>
                        <img src="/wp-content/themes/twentyfifteen/images/slide_one.jpg" alt="Університет" />
                        <div>
                            <h2>Вітаємо вас на нашому сайті</h2>
                            <span>Математичний портал ЧНУ</span>
                        </div>
                    </li>
                    <li>
                        <img src="/wp-content/themes/twentyfifteen/images/slide_one.jpg" alt="Університет" />
                        <div>
                            <h2>Вітаємо вас на нашому сайті</h2>
                            <span>Математичний портал ЧНУ</span>
                        </div>
                    </li>
                    <li>
                        <img src="/wp-content/themes/twentyfifteen/images/slide_one.jpg" alt="Університет" />
                        <div>
                            <h2>Вітаємо вас на нашому сайті</h2>
                            <span>Математичний портал ЧНУ</span>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <!--**************SLIDER************-->

</div>

<div class="conteiner">
    <section class="wrapp">
        <?php get_sidebar(); ?>
        <!--**************CONTENT*************-->

        <section class="content">
            <h2>Останні новини</h2>

