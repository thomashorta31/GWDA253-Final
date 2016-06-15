<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
     <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="<?php bloginfo('template_url'); ?>/images/summit.jpg" alt="summit image" class="img-fluid">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="results">Search Results</h2>
                <hr>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php endwhile; else : ?>
                    <h3><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h3>
                <?php endif; ?>
            </div>
        </div> <!-- END 12-column grid -->
    </div> <!-- END .row -->

<?php get_footer(); ?>

