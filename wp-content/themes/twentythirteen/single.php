<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */


if ( 'graduates' == get_post_type() ) {
get_header('no-slider'); } else {
    get_header('no-slider');
}?>
<?php get_sidebar('sidebar-1'); ?>

<section class="content" >
<?php if ( 'graduates' == get_post_type() ) { ?>
<h2 style="margin-bottom: 35px; font-weight: bold">Випускники</h2> <?php } else { ?>
        <h2 style="margin-bottom: 35px; font-weight: bold"><?php single_post_title(); ?> </h2>
        <?php } ?>

    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; ?>

        </section>
    </section>
</div>





<?php get_footer(); ?>