<?php
/*
Template Name: referencias
*/
?>
<?php get_header(); ?>

<div class="top-shadow"></div>

<section class="mt-sm-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 mb-4 d-none">
        <h3 class="mainTitular">| Noticias</h3>
      </div>
    </div>
  </div>
</section>



<!-- IMAGENES -->
<section class="seccion2-fotos">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-sm-5 text-center">Noticias de la semana</h2>
        <div class="row">
          <?php $args = array('post_type' => 'referencias_home'); ?>
          <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="col-md-6">
          <blockquote class="twitter-tweet">
              <p lang="en" dir="ltr">Sunsets don&#39;t get much better than this one over <a
                  href="https://twitter.com/GrandTetonNPS?ref_src=twsrc%5Etfw">@GrandTetonNPS</a>. <a
                  href="https://twitter.com/hashtag/nature?src=hash&amp;ref_src=twsrc%5Etfw">#nature</a> <a
                  href="https://twitter.com/hashtag/sunset?src=hash&amp;ref_src=twsrc%5Etfw">#sunset</a> <a
                  href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a></p>&mdash; US Department of the Interior
              (@Interior) <a href="https://twitter.com/Interior/status/463440424141459456?ref_src=twsrc%5Etfw">May 5,
                2014</a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <!-- ?php if ( get_field( 'imagen') ) { ?>
            <img src="?php the_field( 'imagen' ); ?>" />
            ?php } ?> -->
          </div>
          <div class="col-md-6">
          <blockquote class="twitter-tweet">
              <p lang="es" dir="ltr">El cirujano que operó a Kim Jong Un, ahora. <a
                  href="https://t.co/YhMJOwVZyY">pic.twitter.com/YhMJOwVZyY</a></p>&mdash; Víctor Barreto (@victorbar67)
              <a href="https://twitter.com/victorbar67/status/1252463571906199553?ref_src=twsrc%5Etfw">April 21,
                2020</a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <!-- ?php if ( get_field( 'imagen') ) { ?>
            <img src="?php the_field( 'imagen' ); ?>" />
            ?php } ?> -->
            <!-- <iframe frameborder=0 height=250 width=550 class="col-md-12"
                                src="https://twitframe.com/show?url=https%3A%2F%2Ftwitter.com%2Fjack%2Fstatus%2F20"></iframe> -->
          </div>
          <?php endwhile;?>
          <?php endif;?>
          <?php wp_reset_postdata();?>
        </div>
      </div>

      <div class="col-md-12 mt-2">
        <h2 class="mb-sm-5 text-center">Los videos de la semana</h2>
        <div class="row">
          <?php $args = array('post_type' => 'refer_videos'); ?>
          <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-md-6 text-center">
            <?php the_field( 'video' ); ?>
            <!-- <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/sitA91-zWm0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
          </div>
          <div class="col-md-6 text-center">
            <?php the_field( 'video' ); ?>
            <!-- <iframe class="col-md-6" width="560" height="315"
                            src="https://www.youtube.com/embed/sitA91-zWm0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
          </div>
          <?php endwhile;?>
          <?php endif;?>
          <?php wp_reset_postdata();?>
        </div>
      </div>

      <div class="col-md-12  mt-5 insta-feed">
        <h2 class="mb-sm-5 text-center">A quién seguir?</h2>
        <div class="row">
          <?php $args = array('post_type' => 'refer_aquien_seguir'); ?>
          <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="col-md-6">
            <?php if ( get_field( 'imagen') ) { ?>
            <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
            <?php } ?>
            <!-- <script src=" https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-0f5adf44-5d5c-4cc2-a1fd-eb8a3ff910d9" style="width: 100%;"></div> -->
          </div>

          <div class="col-md-6">
            <?php if ( get_field( 'imagen') ) { ?>
            <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
            <?php } ?>
            <!-- <script src=" https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-0f5adf44-5d5c-4cc2-a1fd-eb8a3ff910d9" style="width: 100%;"></div> -->
          </div>
          <?php endwhile;?>
          <?php endif;?>
          <?php wp_reset_postdata();?>
        </div>
      </div>


      <div class="col-md-12 mt-md-5">
        <h2 class="mb-sm-5 text-center">Webs</h2>
        <div class="row">
          <?php $args = array('post_type' => 'refer_webs'); ?>
          <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="col-md-6  mb-1">
            <blockquote class="twitter-tweet">
              <p lang="en" dir="ltr">Sunsets don&#39;t get much better than this one over <a
                  href="https://twitter.com/GrandTetonNPS?ref_src=twsrc%5Etfw">@GrandTetonNPS</a>. <a
                  href="https://twitter.com/hashtag/nature?src=hash&amp;ref_src=twsrc%5Etfw">#nature</a> <a
                  href="https://twitter.com/hashtag/sunset?src=hash&amp;ref_src=twsrc%5Etfw">#sunset</a> <a
                  href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a></p>&mdash; US Department of the Interior
              (@Interior) <a href="https://twitter.com/Interior/status/463440424141459456?ref_src=twsrc%5Etfw">May 5,
                2014</a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <!-- ?php if ( get_field( 'imagen') ) { ?>
                            <img src="?php the_field( 'imagen' ); ?>" class="img-fluid"/>
                        ?php } ?> -->
            <!-- <img src="images/img_1.jpg" class="img-fluid" /> -->
            <!-- <p class="text-center titulos-fotos-inicio"> -->
              <!-- ?php the_field( 'titulo' ); ?> -->
              <!-- <a href="https://syloper.com">WEB1</a> -->
            </p>
          </div>
          <div class="col-md-6  mb-1">
            <blockquote class="twitter-tweet">
              <p lang="es" dir="ltr">El cirujano que operó a Kim Jong Un, ahora. <a
                  href="https://t.co/YhMJOwVZyY">pic.twitter.com/YhMJOwVZyY</a></p>&mdash; Víctor Barreto (@victorbar67)
              <a href="https://twitter.com/victorbar67/status/1252463571906199553?ref_src=twsrc%5Etfw">April 21,
                2020</a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <!-- ?php if ( get_field( 'imagen') ) { ?>
            <img src="?php the_field( 'imagen' ); ?>" class="img-fluid" />
            ?php } ?> -->
            <!-- <img src="images/img_1.jpg" class="img-fluid" /> -->
            <!-- <p class="text-center titulos-fotos-inicio"> -->
              <!-- ?php the_field( 'titulo' ); ?> -->
              <!-- <a href="https://google.com">WEB2</a> -->
            </p>
          </div>
          <?php endwhile;?>
          <?php endif;?>
          <?php wp_reset_postdata();?>
        </div>
      </div>

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
            <div class="col-md-6 form-group">
              <label for="nombre">Nombre</label>
              <input type="text" id="nombre" class="form-control" />
            </div>
            <div class="col-md-6 form-group">
              <label for="phone">Teléfono</label>
              <input type="text" id="tel" class="form-control" />
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Comentarios</label>
              <textarea name="message" id="mensaje" class="form-control" cols="20" rows="5"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="submit" value="Enviar" class="boton btn btn-contacto px-3 py-3" />
            </div>
          </div>

          <!-- feedback del usuario-->
          <span class="saludo"></span>
          <div class="row">
            <div class="col-md-6 form-group">
              <span class="span1"></span>
            </div>
            <div class="col-md-6 form-group">
              <span class="span2"></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <span class="span3"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
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
      var saludo = $("<h2>Gracias!</h2>").append(".saludo");
      $(".span1").html(nombre.val());
      $(".span2").html(tel.val());
      $(".span3").html(email.val());
      $(".span4").html(comentarios.val());
    });
  });
</script>