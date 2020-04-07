<?php
/*
Template name: prospectiva
*/
?>

<?php get_header(); ?>

<div class="top-shadow"></div>

    <section class="mt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3 class="mainTitular">| Prospectiva</h3>
                </div>
            </div>
        </div>
    </section>


    <!-- IMAGENES -->
    <section class="seccion2-fotos">
        <div class="container">
            <div class="text-center">
                <h2 class="mt-sm-5 mb-md-4 d-none d-md-block">TRABAJOS DE PROSPECTIVA</h2>
            </div>

            <div class="row">
                <!-- offset-1: quita un rem de cada lado,-->
                <div class="col-12">
                    <div class="row">
                    <?php $args = array('post_type' => 'prospectiva_trabajos'); ?>
                    <?php $loop = new WP_Query($args);
                   
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="col-md-4  mb-1">
                        <?php the_field( 'video' ); ?>
                            <!-- <iframe width="360" height="315" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> -->
                        </div>
                        <!-- <div class="col-md-4  mb-1">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4  mb-1">
                            <iframe width="360" height="315" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div> -->
                        <?php $i++; endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="seccion2-fotos">
        <div class="container">
            <div class="text-center">
                <h2 class="mt-sm-5 mb-md-4">CONSULTORIAS</h2>
            </div>

            <div class="row">
                <div class="col-10 offset-1">
                    <div class="row">

                    <?php $args = array('post_type' => 'prospectiva_consulto'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 

                        <div class="col-md-4  mb-1">
                            <?php if ( get_field( 'imagen') ) { ?>
                             <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid"/>
                                <?php } ?>
                            <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
                            <p class="text-center titulos-fotos-inicio">
                                <a href="#">
                                <?php the_field( 'titulo' ); ?>
                                </a>
                            </p>
                        </div>
                        <!-- <div class="col-md-4  mb-1">
                            <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
                            <p class="text-center titulos-fotos-inicio">
                                <a href="#">Consultoria 1</a>
                            </p>
                        </div>
                        <div class="col-md-4  mb-1">
                            <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
                            <p class="text-center titulos-fotos-inicio">
                                <a href="#">Consultoria 1</a>
                            </p>
                        </div> -->
                        <?php endwhile;?>
                        <?php endif;?>
                       <?php wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="seccion2-fotos">
        <div class="container">
            <div class="text-center">
                <h2 class="mt-sm-5 mb-md-4">TRABAJOS ENTRE AREAS I + D</h2>
            </div>

            <div class="row">
                <div class="col-10 offset-1">
                    <div class="row">
                      <?php $args = array('post_type' => 'prospectiva_trabajos'); ?>
                      <?php $loop = new WP_Query($args);
                        if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                        <div class="col-md-4  mb-1">
                        <?php if ( get_field( 'imagen') ) { ?>
	                        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
                            <?php } ?> 
                            <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
                            <p class="text-center titulos-fotos-inicio">
                                <a href="#">
                                <?php the_field( 'titulo' ); ?>
                                </a>
                            </p>
                        </div>
                        <!-- <div class="col-md-4  mb-1">
                            <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
                            <p class="text-center titulos-fotos-inicio">
                                <a href="#">Trabajo</a>
                            </p>
                        </div>
                        <div class="col-md-4  mb-1">
                            <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
                            <p class="text-center titulos-fotos-inicio">
                                <a href="#">Trabajo</a>
                            </p>
                        </div> -->
                        <?php endwhile;?>
                        <?php endif;?>
                    <?php wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TERCER TESTIMONIAL -->

    <section class="my-5" style="background-color: lightgrey; height: 200px;">
        <div class="container">
            <div class="owl-carousel owl-theme">
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

    <?php get_footer(); ?>