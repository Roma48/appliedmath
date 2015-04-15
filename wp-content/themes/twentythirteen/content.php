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
    $caption = single_post_title('', false);

    echo '<div class="header-graduates">';

    echo '<h4 class="caption-year">'.$caption.'</h4>';

    echo the_excerpt();

    echo '</div>';



    $post = get_post(get_the_ID());
    $slug = $post->post_name;

    $args = array('post_type' => 'students', 'category_name' => $slug);
    $loop = new WP_Query($args );
    echo '<div class="block-content" style="position: relative; float: left">';
    while ( $loop->have_posts() ) : $loop->the_post();

        echo '<article class="student-post">';
        the_post_thumbnail();
        echo '<div class="student-name">';
        the_title( '<h1 class="">', '</h1>' );
        echo '</div>';
        echo '<div class="student-specialist">';
        the_excerpt();
        echo '</div>';
        echo '<div class="student-content">';
        the_content();
        echo '</div>';
        echo '</article>';

    endwhile;
    echo '<a class="back-button" href="'.get_permalink( 19 ).'">Назад</a>';
    echo '</div>';
} elseif ( 'teachers' == get_post_type() ) { ?>
    <div class="block-content" style="position: relative; float: left; width: 100%">
    <article>
        <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark"><h4><?php the_title(); ?><time>12.10.14</time></h4></a>
        <?php echo '<div class="teacher-specialist">';
        the_excerpt();
        echo '</div>'; ?>
        <?php echo '<div class="content-article">';
        the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) );
        echo '</div>'; ?>

    </article>
    <?php echo '<a class="back-button" href="'.get_permalink( 17 ).'">Назад</a>'; ?>
    </div>
<?php } elseif ( 'student' == get_post_type() ) { ?>
    <div class="block-content" style="position: relative; float: left; width: 100%">
    <article>
        <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark"><h4><?php the_title(); ?><time>12.10.14</time></h4></a>
        <?php echo '<div class="teacher-specialist">';
        the_excerpt();
        echo '</div>'; ?>
        <?php echo '<div class="content-article">';
        the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) );
        echo '</div>'; ?>
    </article>
    <a class="back-button" href="<?php echo get_permalink( 125 ); ?>">Назад</a>
    </div>
<?php } elseif ( 'page' == get_post_type() ) { ?>
    <div class="block-content" style="position: relative; float: left; width: 100%">
        <article>
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
        </article>
        <a class="back-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Назад</a>
    </div>
<?php } else { ?>
    <div class="block-content" style="position: relative; float: left; width: 100%">
    <article>

        <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark"><h4><?php the_title(); ?><time>12.10.14</time></h4></a>


        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>


    </article>
        <a class="back-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Назад</a>
    </div>
<?php } ?>