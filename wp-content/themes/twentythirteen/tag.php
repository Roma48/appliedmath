<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header('no-slider'); ?>
<?php get_sidebar('sidebar-1'); ?>

<section class="content" >
    <h2 style="font-weight: bold"><?php single_tag_title(); ?> </h2>


                <?php if(single_tag_title('', false) == Випускники){
                    while ( have_posts() ) : the_post();

                        get_template_part( 'content-graduates', get_post_format() );

                    endwhile;
                   } elseif (single_tag_title('', false) == Викладачі){
                    while ( have_posts() ) : the_post();

                        get_template_part( 'content-teachers', get_post_format() );

                    endwhile;
                }

                elseif (single_tag_title('', false) == Контакти){
                 ?> <section class="contakt-info" style="width: 100%">
                    <div class="contacts-widget"> <?php
                dynamic_sidebar('contacts'); ?>

                <div class="write-to-us">
                    <h3>Напишіть нам <i class="fa fa-envelope-o fa-2x"></i></h3>

                    <?php wd_contact_form_maker(3); ?>

                </div>

                </div>
                </section><?php
                }
                else
                {
                    while ( have_posts() ) : the_post();

                        get_template_part( 'content', get_post_format() );

                    endwhile;
                } ?>


</section>
    </section>
    </div>
<?php get_footer(); ?>