<?php
/*
Template Name: trabaja con nosotros
*/
?>

<?php get_header(); ?>

<section class="mt-sm-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h3 class="mainTitular">| Trabaja con nosotros</h3>
      </div>
    </div>
  </div>
</section>

<section class="mt-sm-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12 d-sm-block">
        <form action="#" method="post">
          <div class="form-group">
            <label for="text" class="ml-2">Nombre</label>
            <input type="text" id="name" class="form-control" />
          </div>

          <div class="form-group">
            <label for="text" class="ml-2">Apellido</label>
            <input type="text" id="lastname" class="form-control" />
          </div>

          <div class="form-group">
            <label for="text" class="ml-2">Profesión</label>
            <input type="text" id="profesion" class="form-control" />
          </div>

          <div class="form-group">
            <label for="text" class="ml-2">Edad</label>
            <input type="text" id="edad" class="form-control" />
          </div>
          <div class="form-group">
            <label for="text" class="ml-2">Donde vivís?</label>
            <input type="email" id="email" class="form-control" />
          </div>
        </form>
        <h5>Adjuntar CV</h5>
        <div class="d-flex">
          <input type="file" id="myFile" name="filename2" />

          <!-- <button type="submit" value="Enviar" class="btn  btn-contacto d-sm-block d-none">
            Enviar
          </button> -->
        </div>
        <div class="d-none d-md-block">
          <p class="my-md-4 p-trabajaconnosotros">
            CONTANOS EN 1 MINUTO POR QUÉ QUERÉS TRABAJAR CON NOSOTROS
          </p>
          <div class="">
            <input type="file" id="myFile" name="filename2" />
          </div>
          <button type="submit" value="Enviar" class="btn  btn-contacto d-sm-block mt-4 d-block">
            Enviar
          </button>
        </div>
      </div>

      <!-- VIDEO -->
      <?php $args = array('post_type' => 'trabajaconnosotros'); ?>
      <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-md-5 d-none d-sm-block text-center ml-md-4">
        <?php the_field( 'video' ); ?>
        <!-- <iframe width="560" height="560" src="https://www.youtube.com/embed/ULPpT-tix5M" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
      </div>
      <!-- <div class="col-md-6 d-none d-sm-block">
          <img src="?php echo get_stylesheet_directory_uri(); ?>/images/about_1.jpg" class="img-fluid ml-md-4" />
        </div> -->
      <?php endwhile;?>
      <?php endif;?>
      <?php wp_reset_postdata();?>
    </div>
  </div>
</section>


<section class="section">
        <div class="container">
            <button class="comentar my-md-5 btn btn-contacto">Dejar<br>comentario</button>
            <div class="row">
                <div class="col-md-12 order-2">
                    <form action="#" method="post" class="formulario">
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
                                <textarea name="message" id="mensaje" class="form-control" cols="14"
                                    rows="3"></textarea>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="submit" value="Enviar" class="boton btn btn-contacto px-3" />
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