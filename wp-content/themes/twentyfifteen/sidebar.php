<!--**************SIDEBAR************-->



<aside class="sidebar">

    <div class="news">
        <?php
            wp_nav_menu( array(
                'menu_class'     => 'nav-menu',
                'theme_location' => 'left',
            ) );

        get_search_form(); ?>

    </div>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
