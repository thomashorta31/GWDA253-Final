
<?php get_header(); ?>

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                    <img src="<?php bloginfo('template_url'); ?>/images/resources-pic.jpg" alt="front page image" class="img-fluid">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <h2>Welcome to Behavioral Health Services</h2>
                                    <p class="remove-left-padding test-remove-this">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente illo, ut amet libero eius quaerat ea excepturi modi repellendus maxime repudiandae voluptas veritatis minima et non unde inventore iste cupiditate.
                                    </p>
                                </div> <!-- END 6-column grid -->
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                              <article class="post clearfix">
                                                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                                <!-- date() only shows date for post on that day, time() function better here -->
                                                <!-- add name in users section of Dashboard to offer better name display -->
                                                <p>By <?php the_author(); ?>
                                                   on <?php echo the_time('l, F jS, Y'); ?>
                                                   in <?php the_category( ', ' ); ?>
                                                   <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                                                </p>
                                                <?php the_post_thumbnail(); ?>
                                                <?php the_excerpt(); ?>
                                              </article>
                                              <!-- WP function that outputs post content -->

                                            <?php endwhile; else: ?>
                                               <!-- we run this else if there is no content -->
                                              <div class="page-header">
                                                <h1>Wups!</h1>
                                              </div>

                                              <p>Looks like we have no content for this page?</p>

                                            <?php endif; ?>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                  <?php get_sidebar('blog'); ?>
                                </div>
                            </div> <!-- END 12-column grid -->
                        </div> <!-- END .row -->


<?php get_footer(); ?>
