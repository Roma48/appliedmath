<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php


$args = array( 'post_type' => 'graduates', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

    echo '<article class="graduates-post">';

    echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
    echo the_post_thumbnail();
    echo '</a>';

    echo '<div class="graduates-title">';
    the_title( '<h1 class="lead"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
    echo '</div>';

    the_excerpt();



    echo '</article>';
endwhile; ?>



