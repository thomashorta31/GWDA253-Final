<?php get_header(); ?>

                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <!-- carousel -->
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                      <!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                      </ol>

                                      <!-- Wrapper for slides -->
                                      <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                          <img src="<?php bloginfo('template_url'); ?>/images/front-page-slider-1.jpg" alt="carousel slide 1" class="img-fluid">
                                        </div>
                                        <div class="item">
                                          <img src="<?php bloginfo('template_url'); ?>/images/front-page-slider-2.jpg" alt="carousel slide 2" class="img-fluid">
                                        </div>
                                        <div class="item">
                                          <img src="<?php bloginfo('template_url'); ?>/images/front-page-slider-3.jpg" alt="carousel slide 3" class="img-fluid">
                                        </div>
                                      </div>

                                      <!-- Controls -->
                                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                                    <h2>Welcome to Behavioral Health Services</h2>
                                    <p class="remove-left-padding">
                                        Behavioral Health Services is a not-for-profit community-based healthcare organization providing substance abuse, mental health, drug-free transitional living, older adult services, HIV/AIDS education and prevention, and other related health services to the residents of Southern California.</br>
                                        BHS began providing outpatient substance abuse treatment services to adolescents and young adults in the Centinela Valley in 1973. Realizing the enormity of need throughout Los Angeles County, we expanded reach and now operate from 21 locations covering the South Bay, East Los Angeles, the San Gabriel Valley, and the metropolitan areas of Los Angeles County.</br>
                                        We strongly believe in partnering not only with our clients and their families, but also with other service organizations throughout the community in order to ensure that clients and their families have the greatest opportunity for long-term recovery from substance abuse.
                                    </p>
                                </div> <!-- END 6-column grid -->
                                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                    <a href="http://www.bhs-inc.org/family-health-center"><img src="<?php bloginfo('template_url'); ?>/images/bhs-clinic-ad.png" alt="clinic ad image" class="img-fluid"></a>
                                </div>

                            </div> <!-- END 12-column grid -->
                        </div> <!-- END .row -->


      <?php get_footer(); ?>
