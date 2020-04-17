<?php
/*
Template name: capacitacion
*/
?>

<?php get_header(); ?>

<!-- FOTO -->
<div class="top-shadow"></div>

<section class="mt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="mainTitular">| Capacitaciones</h3>
            </div>
        </div>
    </div>
</section>
<?php $args = array('post_type' => 'capacitacion_sn'); ?>
<?php $loop = new WP_Query($args);
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- TEXTO -->
            <section class="section seccion-parrafo my-xs-5">
                <div class="container">
                    <div class="col-12">
                        <p>
                            <?php the_field( 'texto_1' ); ?>
                        </p>
                    </div>
                </div>
            </section>

            <!-- IMAGENES -->
            <section class="seccion2-fotos mb-md-4">
                <div class="container">
                    <div class="text-center">
                        <h2 class="mb-sm-5"><?php the_field( 'titulo_1er_seccion' ); ?></h2>
                    </div>

                    <div class="row">
                    <?php $args1 = array('post_type' => 'testimonios'); ?>
                        <?php $loop1 = new WP_Query($args1);
                                if ( $loop1->have_posts() ) :
                                    while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                        <!-- offset-1: quita un rem de cada lado,-->
                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col-md-4  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '1-imagen_1') ) { ?>
                                    <img src="<?php the_field( '1-imagen_1' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '1-titulo_imagen_1' ); ?></a>
                                    </p>
                                </div>
                                <div class="col-md-4  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '1-imagen_2') ) { ?>
                                    <img src="<?php the_field( '1-imagen_2' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '1-titulo_imagen_2' ); ?></a>
                                    </p>
                                </div>
                                <div class="col-md-4  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_3.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '1-imagen_3') ) { ?>
                                    <img src="<?php the_field( '1-imagen_3' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '1-titulo_imagen_3' ); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>
            </section>


            <!-- VIDEO TESTIMONIALS -->
            <section class="carousel mt-md-4">
                <div class="container">
                    <h2 class="text-center">Testimonios</h2>
                    <div class="row justify-content-center">
                        <?php $args1 = array('post_type' => 'testimonios'); ?>
                        <?php $loop1 = new WP_Query($args1);
                                if ( $loop1->have_posts() ) :
                                    while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                        <!-- indicators -->
                        <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner justify-content-center">
                                <div class="carousel-item active">
                                    <?php the_field( 'video1' ); ?>
                                    <!-- <iframe width="550" height="450" src="https://www.youtube.com/embed/T4O4wGfqFqQ"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                                <div class="carousel-item">
                                    <?php the_field( 'video2' ); ?>
                                    <!-- <iframe id="" width="550" height="450" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                                <div class="carousel-item">
                                    <?php the_field( 'video3' ); ?>
                                    <!-- <iframe width="550" height="450" src="https://www.youtube.com/embed/T4O4wGfqFqQ"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>
            </section>

            <!-- segunda seccion -->
            <section class="seccion2-fotos mb-md-4">
                <div class="container">
                    <div class="text-center">
                        <h2 class="mb-sm-5"><?php the_field( 'titulo_2da_seccion' ); ?></h2>
                    </div>

                    <div class="row">

                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col-md-6  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '2-_imagen_1') ) { ?>
                                    <img src="<?php the_field( '2-_imagen_1' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '2-_titulo_imagen_1' ); ?></a>
                                    </p>
                                </div>
                                <div class="col-md-6  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '2-_imagen_2') ) { ?>
                                    <img src="<?php the_field( '2-_imagen_2' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '2-_titulo_imagen_2' ); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- VIDEO TESTIMONIALS -->
            <section class="carousel mt-md-4">
                <div class="container">
                    <h2 class="text-center">Testimonios</h2>
                    <div class="row justify-content-center">
                        <?php $args1 = array('post_type' => 'testimonios'); ?>
                        <?php $loop1 = new WP_Query($args1);
                                if ( $loop1->have_posts() ) :
                                    while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                        <!-- indicators -->
                        <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner justify-content-center">
                                <div class="carousel-item active">
                                    <?php the_field( 'video1' ); ?>
                                    <!-- <iframe width="550" height="450" src="https://www.youtube.com/embed/T4O4wGfqFqQ"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                                <div class="carousel-item">
                                    <?php the_field( 'video2' ); ?>
                                    <!-- <iframe id="" width="550" height="450" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                                <div class="carousel-item">
                                    <?php the_field( 'video3' ); ?>
                                    <!-- <iframe width="550" height="450" src="https://www.youtube.com/embed/T4O4wGfqFqQ"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>
            </section>

            <!-- TERCERA SECCION -->
            <section class="seccion2-fotos mb-md-4">
                <div class="container">

                    <div class="text-center">
                        <h2 class="mb-sm-5"><?php the_field( 'titulo_3era_seccion' ); ?></h2>
                    </div>

                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col-md-4  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '3-_imagen_1') ) { ?>
                                    <img src="<?php the_field( '3-_imagen_1' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '3-_titulo_imagen_1' ); ?></a>
                                    </p>
                                </div>
                                <div class="col-md-4  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '3-_imagen_1') ) { ?>
                                    <img src="<?php the_field( '3-_imagen_1' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '3-_titulo_imagen_1' ); ?></a>
                                    </p>
                                </div>
                                <div class="col-md-4  mb-1">
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" /> -->
                                    <?php if ( get_field( '3-_imagen_3') ) { ?>
                                    <img src="<?php the_field( '3-_imagen_3' ); ?>" class="img-fluid" />
                                    <?php } ?>
                                    <p class="text-center titulos-fotos-inicio">
                                        <a href="#"><?php the_field( '3-_titulo_imagen_3' ); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- VIDEO TESTIMONIALS -->
            <section class="carousel mt-md-4">
                <div class="container">
                    <h2 class="text-center">Testimonios</h2>
                    <div class="row justify-content-center">
                        <?php $args1 = array('post_type' => 'testimonios'); ?>
                        <?php $loop1 = new WP_Query($args1);
                                if ( $loop1->have_posts() ) :
                                    while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                        <!-- indicators -->
                        <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner justify-content-center">
                                <div class="carousel-item active">
                                    <?php the_field( 'video1' ); ?>
                                    <!-- <iframe width="550" height="450" src="https://www.youtube.com/embed/T4O4wGfqFqQ"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                                <div class="carousel-item">
                                    <?php the_field( 'video2' ); ?>
                                    <!-- <iframe id="" width="550" height="450" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                                <div class="carousel-item">
                                    <?php the_field( 'video3' ); ?>
                                    <!-- <iframe width="550" height="450" src="https://www.youtube.com/embed/T4O4wGfqFqQ"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> -->
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>
            </section>
            
<?php endwhile;?>
<?php endif;?>
<?php wp_reset_postdata();?>

<?php get_footer(); ?>