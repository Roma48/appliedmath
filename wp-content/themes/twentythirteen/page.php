<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header('no-slider'); ?>
<?php get_sidebar('sidebar-1'); ?>

    <section class="content" >
    <h2 style="font-weight: bold"><?php single_post_title(); ?> </h2>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<div class="entry-content">
						<?php the_content(); ?>

					</div><!-- .entry-content -->
<!--                    --><?php //$file = get_post_meta(get_the_ID(), 'file', true);
//                    echo '<a href="'.the_attachment_link( $file, true ).'" style="color: #000 !important">';
//                    echo "link";
//                    echo "</a>";
//
//                    ?>


				</article><!-- #post -->



			<?php endwhile; ?>



        </section>
    </section>
</div>
<?php get_footer(); ?>