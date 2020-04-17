
<?php get_header(); ?>

    <div class="top-shadow"></div>

    <!-- con d-none d-sm-block QUITAMOS ESTA SECTION DE MOBILE y d-sm-block la dejamos solo en desktop -->
    <section class="home-slider owl-carousel d-none d-sm-block">
        <div class="slider-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero_1.jpg');">
            <div class="container-fluid">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4 img-fluid"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <!-- <h1 class="mb-4"><span>We Are Industrial Company</span></h1>
              <p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero_2.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <!-- <h1><span>Create, Enhance and Sustain</span></h1>
              <p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->
    </div>


    <section class="section">
        <div class="container-fluid">
            <div class="row mb-5">

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 d-none d-lg-block order-lg-3">
                    <div class="btn botones d-flex align-items-center justify-content-center mt-md-0">
                        <a class="text-white" href="<?php echo esc_url( home_url('/') ); ?>convocatorias">
                            Convocatorias
                        </a>
                    </div>

                    <div class="btn botones d-flex align-items-center justify-content-center">
                        <a class="text-white">
                            Sponsor
                        </a>
                    </div>

                    <div class="btn botones d-flex align-items-center justify-content-center">
                        <a class="text-white" href="<?php echo esc_url( home_url('/') ); ?>trabajaConNosotros">
                            Trabajar con <br>nosotros
                        </a>
                    </div>

                    <div class="btn botones d-flex align-items-center justify-content-center">
                        <a class="text-white" href="<?php echo esc_url( home_url('/') ); ?>referencias">
                            Referencias <br>de interés
                        </a>
                    </div>

                    <div class="btn botones d-flex align-items-center justify-content-center">
                        <a class="ultimo text-white" href="<?php echo esc_url( home_url('/') ); ?>agenda">
                            <!-- <i class="far fa-calendar-alt"></i> -->
                            Agenda
                        </a>
                    </div>
                    <!-- <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/about_1.jpg');"></div></div></div> -->
                </div>
                <div class="d-lg-none col-12 order-lg-3">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="btn botones mx-auto my-2 d-flex align-items-center justify-content-center mt-md-0 mx-auto pb-3">
                                <a class="text-white" href="<?php echo esc_url( home_url('/') ); ?>convocatorias">
                                    Convocatorias
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="btn botones mx-auto ml-md-auto mx-md-0 my-2 d-flex align-items-center justify-content-center">
                                <a class="text-white">
                                    Sponsor
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="btn botones mx-auto mx-md-0 my-2 d-flex align-items-center justify-content-center">
                                <a class="ultimo text-white" href="<?php echo esc_url( home_url('/') ); ?>agenda">
                                    <!-- <i class="far fa-calendar-alt"></i> -->
                                    Agenda
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="btn botones mx-auto ml-md-auto mx-md-0 my-2 d-flex align-items-center justify-content-center">
                                <a class="text-white" href="<?php echo esc_url( home_url('/') ); ?>trabajaConNosotros">
                                    Trabajar con <br>nosotros
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="btn botones mx-auto mx-md-0 my-2 d-flex align-items-center justify-content-center">
                                <a class="text-white" href="<?php echo esc_url( home_url('/') ); ?>referencias">
                                    Referencias <br>de interés
                                </a>
                            </div>
                        </div>
                    </div>

                    

                    


                    
                    <!-- <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/about_1.jpg');"></div></div></div> -->
                </div>
                

                
                   
                <?php $args = array('post_type' => 'index'); ?>
                        <?php $loop = new WP_Query($args);
                        $i = 1;
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                                <?php if ($i % 2 !== 0) : 
                                    echo '<div class="col-md-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">';
                                 endif; ?>
                                    <div class="feature-1 d-md-flex">
                                        <div class="align-self-center">
                                            <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid"> -->
                                            <?php if ( get_field( 'imagen') ) { ?>
                                                <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
                                            <?php } ?>
                                            <p class="text-center titulos-fotos-inicio"><a
                                            href="<?php echo esc_url( home_url('/') ); ?><?php the_field( 'titulourl' ); ?>">
                                            <?php the_field( 'titulo' ); ?></a></p>
                                            <!-- <p class="text-center titulos-fotos-inicio"><a href="trabajos">?php the_field ('titulo') ; ?></a></p> -->
                                            <!-- <p class="text-center titulos-fotos-inicio"><a href="?php echo esc_url( home_url('/') ); ?>proyectos"> -->
                                        </div>
                                    </div>
                                    <?php if ($i % 2 == 0) :  
                                        echo '</div>';
                                     endif; 
                                     $i++?>
                            <?php endwhile;?>
                        <?php endif;?>
                    <?php wp_reset_postdata();?>
              </div>
          </div>
    </section>

  <?php get_footer(); ?>

  <?php comments_template(); ?>

