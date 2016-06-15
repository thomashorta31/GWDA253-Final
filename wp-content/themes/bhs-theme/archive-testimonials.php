<?php
/*
  Template Name: template-testimonials
 */
?>

<?php get_header(); ?>

                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                              <!-- tbs class for headers -->
                              <div class="page-header">
                                <!-- the_title() is WP function that shows the title of the post -->
                                <h1><?php the_title(); ?></h1>
                              </div>
                              <!-- WP function that outputs post content -->
                              <?php the_content(); ?>

                            <?php endwhile; else: ?>
                               <!-- we run this else if there is no content -->
                              <div class="page-header">
                                <h1>Wups!</h1>
                              </div>

                              <p>Looks like we have no content for this page?</p>

                    <?php endif; ?>
                    </div> <!-- END 12-column grid -->
                </div> <!-- END .row -->


<?php get_footer(); ?>
