<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php get_sidebar('sidebar-1'); ?>


<section class="content" >
    <h2 style="margin-bottom: 50px; font-weight: bold">Останні новини</h2>
		<?php echo do_shortcode('[wmls name="front" id="1"]'); ?>

</section>
    </section>
    </div>


<?php get_footer(); ?>