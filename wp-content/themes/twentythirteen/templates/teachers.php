<?php
/**
 * Template Name: Teachers
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header('no-slider'); ?>
<?php get_sidebar('sidebar-1'); ?>

    <section class="content" >
    <h2 style="margin-bottom: 50px; font-weight: bold"><?php single_post_title(); ?> </h2>

        <?php get_template_part( 'content-teachers', get_post_format() ); ?>

    </section>
    </section>
</div>
<?php get_footer(); ?>