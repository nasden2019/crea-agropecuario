<?php
/*
Template Name: testeos
*/
?>

<?php get_header(); ?>



<div class="top-shadow"></div>

    <section class="mt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3 class="mainTitular">| Testeos</h3>
                </div>
            </div>
        </div>
    </section>
    <?php $args = array('post_type' => 'testeos'); ?>
            <?php $loop = new WP_Query($args);
            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                    <section class="seccion2-fotos mt-md-5">
                        <div class="container">
                            <div class="text-center">
                                <h2 class="d-md-block d-none"><?php the_field( 'titulo_1_parrafo' ); ?></h2>
                                <p class="seccion-parrafo"><?php the_field( '1er_parrafo' ); ?></p>
                            </div>
                        </div>
                    </section>



                    <section class="seccion2-fotos mt-md-5">
                        <div class="container">
                            <div class="text-center d-md-block d-none"><?php the_field( 'titulo_2do_parrafo' ); ?></h2>
                                <p class="seccion-parrafo"></p><?php the_field( '2do_parrafo' ); ?></p>
                            </div>
                        </div>
                    </section>


                    <section class="seccion2-fotos mt-md-5">
                        <div class="container">
                            <div class="text-center d-md-block d-none"><?php the_field( 'titulo_3er_parrafo' ); ?>
                                </h2>
                                <p class="seccion-parrafo"><?php the_field( '3er_parrafo' ); ?></p>
                            </div>
                        </div>
                    </section>


                    <section class="seccion2-fotos my-md-5 mb-5">
                        <div class="container">
                            <div class="text-center">
                                <button type="button" class="btn btn-contacto px-4 py-3 ml-3">
                                    <a class="btn-contacto" href="<?php echo esc_url( home_url('/') ); ?>testeo">VER
                                        MAS</a></button>
                            </div>
                        </div>
                    </section>


                    <section class="seccion2-fotos mt-md-5">
                        <div class="container">
                            <div class="text-center">
                                <h2 class="mb-sm-5">
                                    TESTIMONIOS DE PARTICIPANTES
                                </h2>
                            </div>
                        </div>
                    </section>


                    <!-- PRIMER TESTIMONIAL  -->
                    <section class="my-5" style="background-color: lightgrey; height: 200px;">
                        <div class="container">
                            <div class="owl-carousel owl-theme secundario">
                                <!--  -->
                                <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
                                    <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                        class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
                                </div>
                                <!--  -->
                                <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
                                    <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                        class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
                                </div>
                                <!--  -->
                                <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
                                    <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                        class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
                                </div>
                                <!--  -->
                                <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
                                    <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                        class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endwhile;?>
            <?php endif;?>
        <?php wp_reset_postdata();?>

    <?php get_footer(); ?>