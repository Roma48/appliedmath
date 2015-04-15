<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 1/11/15
 * Time: 9:54 PM
 */ ?>

<div id="main-sidebar">
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
         <nav id="top-menu" class="navigation" role="navigation">
                <?php
                // Primary navigation menu.
                    wp_nav_menu( array(
                        'menu_class'     => 'nav-menu',
                        'theme_location' => 'primary',
                    ) );
                ?>
         </nav><!-- .main-navigation -->
    <?php endif; ?>

    <div id="widget-area" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- .widget-area -->
</div>