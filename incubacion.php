<?php
/*
Template Name: incubacion
*/
?>

<?php get_header(); ?>

<div class="top-shadow"></div>

<section class="mt-sm-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h3 class="mainTitular">| Incubación</h3>
      </div>
    </div>
  </div>
</section>

<!-- TEXTO -->
<section class="section seccion-parrafo my-xs-5">
  <div class="container">
    <div class="col-12">
      <div class="text-center">
        <h2 class="mb-sm-5">PROCESO DE SELECCIÓN DE PROYECTOS</h2>
      </div>
      <?php $args = array('post_type' => 'incubacioncrea'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
      <p>
      <?php the_field( 'parrafo' ); ?>
      </p>
    </div>
    <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_postdata();?>
  </div>
</section>

<!-- IMAGENES -->
<section class="seccion2-fotos mt-md-4 mb-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h2 class="mb-sm-3">QUÉ INTENTAMOS HACER?</h2>
        </div>
        <?php $args = array('post_type' => 'incubacion_hacemos'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
        <!-- <div> -->
          <p class="text-center p-convocatorias"><?php the_field( 'parrafo' ); ?></p>
        <!-- </div> -->

        <div class="col-md-6  mt-md-4 text-center mx-auto">
        <?php if ( get_field( 'imagen') ) { ?>
	        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid"/>
              <?php } ?>
          <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
        </div>
      </div>

      <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_postdata();?>
    </div>
  </div>
</section>

<section class="seccion2-fotos mt-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h2 class="mb-sm-3">METODOLOGIA DE INCUBACIÓN</h2>
        </div>
        <?php $args = array('post_type' => 'incubacionmetodolog'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
        <div class="col-md-6  mt-md-4 text-center mx-auto">
        <?php if ( get_field( 'imagen') ) { ?>
	        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid"  />
            <?php } ?>
          <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
        </div>
      </div>
      <?php endwhile;?>
                <?php endif;?>
                    <?php wp_reset_postdata();?>
    </div>
  </div>
</section>

<!-- SECCION ALIADOS ESTRATEGICOS-->
<section class="seccion2-fotos mt-md-5">
  <div class="container">
    <div class="text-center">
      <h2 class="mb-sm-3">ALIADOS ESTRATÉGICOS</h2>
    </div>

    <div class="row">
      <div class="col-10 offset-1">
        <div class="row">
          <?php $args = array('post_type' => 'incubacion_aliados'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
          <div class="col-md-4  mb-1">

                    <?php if ( get_field( 'imagen') ) { ?>
                      <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
                    <?php } ?>
            <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
            <p class="text-center titulos-fotos-inicio">
              <a href="#"><?php the_field( 'titulo' ); ?></a>
            </p>
            <p class="text-center p-convocatorias">
              <?php the_field( 'parrafo' ); ?>
            </p>
          </div>

          <?php endwhile;?>
                <?php endif;?>
                    <?php wp_reset_postdata();?>
          <!-- <div class="col-md-4  mb-1">
            <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
            <p class="text-center titulos-fotos-inicio">
              <a href="#">Aliado 2</a>
            </p>
            <p class="text-center p-convocatorias">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
              quod dicta delectus nesciunt et deserunt, animi aliquid beatae
              labore officiis hic facilis dolorum, doloremque tempore.
              Delectus quaerat et quod saepe, cumque corporis nesciunt
            </p>
          </div>
          <div class="col-md-4  mb-1">
            <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
            <p class="text-center titulos-fotos-inicio">
              <a href="#">Aliado 3</a>
            </p>
            <p class="text-center p-convocatorias">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
              quod dicta delectus nesciunt et deserunt, animi aliquid beatae
              labore officiis hic facilis dolorum, doloremque tempore.
              Delectus quaerat et quod saepe, cumque corporis nesciunt
            </p>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="seccion2-fotos mt-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h2 class="mb-sm-3">CÓMO VINCULAMOS</h2>
        </div>
        <div class="col-md-6  mt-md-4 text-center mx-auto">
          <div class="tenor-gif-embed" data-postid="15057889" data-share-method="host" data-width="100%" data-aspect-ratio="1.0"><a href="https://tenor.com/view/company-customer-factory-smoke-gif-15057889">Company Customer GIF</a> from <a href="https://tenor.com/search/company-gifs">Company GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
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

<?php get_footer(); ?>

<section class="section border-bottom">
      <div class="container">
        <h2 class="my-md-4">Dejanos un comentario:</h2>
        <div class="row">
          <div class="col-md-6 mb-5 order-2">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-4 form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" id="nombre" class="form-control" />
                </div>
                <div class="col-md-4 form-group">
                  <label for="phone">Teléfono</label>
                  <input type="text" id="tel" class="form-control" />
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 form-group">
                  <label for="message">Comentarios</label>
                  <textarea
                    name="message"
                    id="mensaje"
                    class="form-control"
                    cols="20"
                    rows="5"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 form-group">
                  <input
                    type="submit"
                    value="Enviar"
                    class="boton btn btn-contacto px-3 py-3"
                  />
                </div>
              </div>

              <!-- feedback del usuario-->
              <span class="saludo"></span>
              <div class="row">
                <div class="col-md-4 form-group">
                  <span class="span1"></span>
                </div>
                <div class="col-md-4 form-group">
                  <span class="span2"></span>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8 form-group">
                  <span class="span3"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <span class="span4"></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

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