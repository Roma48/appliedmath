<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */ ?>

<aside class="sidebar">


        <div class="news">
            <?php
            wp_nav_menu( array(
                'menu_class'     => 'nav-menu',
                'theme_location' => 'left',
            ) );

            get_search_form('Знайти'); ?>

        </div>





                <div class="links">
                    <?php dynamic_sidebar('sidebar-1') ?>
                </div>
</aside>
