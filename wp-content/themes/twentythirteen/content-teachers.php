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


    $args = array('post_type' => 'teachers');
    $loop = new WP_Query($args );

    while ( $loop->have_posts() ) : $loop->the_post();

        echo '<article class="teacher-post">';
        the_post_thumbnail();
        echo '<div class="teacher-name">';
        the_title( '<a href="'.get_permalink().'"><h1 class="">', '</h1></a>' );
        echo '</div>';
        echo '<div class="teacher-specialist">';
        the_excerpt();
        echo '</div>';
        echo '<div class="teacher-content">';
        the_content();
        echo '</div>';
        echo '</article>';
    endwhile;

