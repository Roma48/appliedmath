<?php
/**
 * Template Name: Contacts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header('contacts'); ?>
<?php get_sidebar('sidebar-1'); ?>

    <section class="contakt-info" >
    <h2 style="margin-bottom: 50px; font-weight: bold"><?php single_post_title(); ?> </h2>


                <div class="contacts-widget">
                <?php dynamic_sidebar('contacts'); ?>

                <div class="write-to-us">
                    <h3>Напишіть нам <i class="fa fa-envelope-o fa-2x"></i></h3>

                    <?php wd_contact_form_maker(3); ?>

                </div>

                </div>








        </section>
    </section>
</div>
<?php get_footer(); ?>