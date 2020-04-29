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
                <h2 class="mt-sm-5 mb-md-4 d-md-block">TRABAJOS DE PROSPECTIVA</h2>
            </div>

            <div class="row">
                <!-- offset-1: quita un rem de cada lado,-->
                <div class="col-12">
                    <div class="row">
                    <?php $args = array('post_type' => 'propsectiva'); ?>
                    <?php $loop = new WP_Query($args);
                    $i=1;
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="col-md-4  mb-1">
                            <div class="col-video">
                                <?php the_field( 'video' ); ?>
                            </div>
                        </div>
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


   <!-- VIDEO TESTIMONIALS -->
   <section class="carousel mt-md-4">
        <div class="container">
            <h2 class="text-center">Testimonios</h2>
            <div class="row justify-content-center">
            <?php $args = array('post_type' => 'testimonios'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                <!-- indicators -->
                <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel" >
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner justify-content-center">
                        <div class="carousel-item active" style="width: 80%">
                        <?php the_field( 'video1' ); ?>
                            <!-- <iframe width="550" height="450" src="https://www.youtube.com/embed/T4O4wGfqFqQ"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> -->
                        </div>
                        <div class="carousel-item" style="width: 80%">
                        <?php the_field( 'video2' ); ?>
                            <!-- <iframe id="" width="550" height="450" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> -->
                        </div>
                        <div class="carousel-item" style="width: 80%">
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


    <section class="section">
        <?php get_footer('comentarios'); ?>
    </section>


    <?php get_footer(); ?>

    
    <script>
      $(document).ready(function () {
        var boton = $(".boton");
        var nombre = $("#nombre");
        var tel = $("#tel");
        var email = $("#email");
        var comentarios = $("#mensaje");

        boton.on("click", function (e) {
          e.preventDefault();
          $("<h2>Gracias por tu mensaje!</h2>").appendTo(".saludo");
          $(".span1").html(nombre.val());
          $(".span2").html(tel.val());
          $(".span3").html(email.val());
          $(".span4").html(comentarios.val());
        });
      });
    </script>