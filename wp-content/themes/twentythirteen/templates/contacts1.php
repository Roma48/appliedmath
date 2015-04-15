<?php
/**
 * Template Name: Contacts1
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php get_sidebar('sidebar-1'); ?>

    <section class="contakt-info" >
    <h2 style="margin-bottom: 50px"><?php single_post_title(); ?> </h2>


                <div class="contacts-widget">
                <?php dynamic_sidebar('contacts'); ?>

                <div class="write-to-us">
                    <h3>Напишіть нам <i class="fa fa-envelope-o fa-2x"></i></h3>

                    <?php echo do_shortcode('[contact-form-7 id="90" title="Contact form 1"]'); ?>

                </div>

                </div>








        </section>
    </section>
</div>
<?php get_footer(); ?>