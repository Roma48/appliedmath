<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header('no-slider'); ?>
<?php get_sidebar('sidebar-1'); ?>

    <section class="content" >
    <h2 style="font-weight: bold"><?php printf( __( 'Результати пошуку: %s', 'twentythirteen' ), get_search_query() ); ?></h2>

		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-search', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

        </section>
    </section>
</div>
<?php get_footer(); ?>