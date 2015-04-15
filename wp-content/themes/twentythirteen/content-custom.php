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
    if ( 'graduates' == get_post_type() ) {
        $args = array( 'category_name' => $name, 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();

            echo '<article class="student-post">';
                the_post_thumbnail();
                echo '<div class="student-name">';
                the_title( '<h1 class="">', '</h1>' );
                echo '</div>';
                the_excerpt();
                echo '</article>';
        endwhile;
    } else { ?>
        <article>
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><h4><?php the_title(); ?><time>12.10.14</time></h4></a>
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
        </article>
<?php } ?>
