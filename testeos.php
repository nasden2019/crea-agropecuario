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
    <?php $args = array('post_type' => 'testeos_sn'); ?>
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
                            <div class="text-center d-md-block d-none">
                                <h2><?php the_field( 'titulo_2do_parrafo' ); ?></h2>
                                <p class="seccion-parrafo"><?php the_field( '2do_parrafo' ); ?></p>
                            </div>
                        </div>
                    </section>


                    <section class="seccion2-fotos mt-md-5">
                        <div class="container">
                            <div class="text-center d-md-block d-none">
                                <h2><?php the_field( 'titulo_3er_parrafo' ); ?></h2>
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
                    <?php endwhile;?>
            <?php endif;?>
        <?php wp_reset_postdata();?>

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

        <section class="section">
      <div class="container">
        <h2 class="my-md-5">Dejanos un comentario:</h2>
        <div class="row">
          <div class="col-md-12 order-2">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-2 form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" id="nombre" class="form-control" />
                </div>
                <div class="col-md-2 form-group">
                  <label for="phone">Teléfono</label>
                  <input type="text" id="tel" class="form-control" />
                </div>
                <div class="col-md-2 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control" />
                </div>
                <div class="col-md-6 form-group">
                  <label for="message">Comentarios</label>
                  <textarea
                    name="message"
                    id="mensaje"
                    class="form-control"
                    cols="14"
                    rows="3"
                  ></textarea>
                </div>
                <div class="col-md-4 form-group">
                  <input
                    type="submit"
                    value="Enviar"
                    class="boton btn btn-contacto px-3"
                  />
                </div>
              </div>

              <!-- feedback usuario-->
              <span class="saludo"></span>
              <div class="row my-4">
                <div class="col-md-2 form-group">
                  <span class="span1"></span>
                </div>
                <div class="col-md-2 form-group">
                  <span class="span2"></span>
                </div>
                <div class="col-md-2 form-group">
                  <span class="span3"></span>
                </div>

                <div class="col-md-6 form-group">
                  <span class="span4"></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
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