
<?php
/*
Template Name: testeo home
*/
?>

<?php get_header(); ?>

<!-- SIDEBAR -->
    <!-- METER LA PANTALLA ENTERA (antes de q termine el sidebar) DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="display: none; background: turquoise;">
            <div class="sidebar-header" style="background: turquoise;">
                <h3>Testeos Generales</h3>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        CATEGORIAS
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Categorias 1</a>
                        </li>
                        <li>
                            <a href="#">Categorias 2</a>
                        </li>
                        <li>
                            <a href="#">Categorias 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="text-white" href="#">SOBRE NOSOTROS</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle 
                        text-white">HERRAMIENTAS</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a class="text-white" href="#">Herramientas 1</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Herramientas 2</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Herramientas 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="text-white" href="#">CONTACTO</a>
                </li>
            </ul>

        </nav>

 <!-- METER ACA!!!! LA PANTALLA ENTERA DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
 <div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <button type="button" id="sidebarCollapse" class="btn btn-contacto ml-sm-4">
            <i class="fas fa-search-left"></i>
            <span>Buscar Proyectos</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
    </div>
</nav>

<!-- END SIDEBAR -->


<div class="top-shadow"></div>

<section class="mt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-md-5">
                <h3 class="mainTitular ml-md-4">| Testeo</h3>
            </div>
        </div>
    </div>
</section>

<section class="section ml-md-5">
    <div class="container">
        <div class="row">
        <?php $args = array('post_type' => 'testeo_categorias'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 

            <div class="col-md-6">
                <div class="">
                <?php if ( get_field( 'imagen') ) { ?>
                    <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid"> -->
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <!-- text-center: para q ocupe el centro-->
                <div class="text-center">
                    <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>

            <!-- video en mobile-->
            <div class="col-md-5 d-md-none mt-4">
                <div class="">
                <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>


            <div class="col-md-12">
                <div>
                    <span class="mainTitular titularchiquito">| Categorías</span>
                    <h2 class="d-md-block d-none"><?php the_field( 'titulo' ); ?>
                    </h2>
                    <p class="p-convocatorias"><?php the_field( 'parrafo' ); ?></p>
                </div>
            </div>
            <?php endwhile;?>
              <?php endif;?>
                <?php wp_reset_postdata();?>
        </div>
    </div>
</section>

<!-- SEGUNDA SECCION -->
<section class="section ml-md-5 mt-md-5">
    <div class="container">
        <div class="row">
        <?php $args = array('post_type' => 'testeo_categorias2'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
            <div class="col-md-6">
                <div class="">
                            <?php $imagen = get_field( 'imagen' ); ?>
            <?php if ( $imagen ) { ?>
                <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" class="img-fluid"/>
            <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid"> -->
                </div>
            </div>

            <div class="col-md-6 d-none d-md-block">
                <div class="text-center">
                <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>

            <!-- video en mobile-->
            <div class="col-md-5 d-md-none mt-4">
                <div class="">
                <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>


            <div class="col-md-12">
                <div>
                    <span class="mainTitular titularchiquito">| Herramientas</span>
                    <h2 class="d-md-block d-none"><?php the_field( 'titulo' ); ?>
                    </h2>
                    <p class="p-convocatorias"><?php the_field( 'parrafo' ); ?></p>
                </div>
            </div>
            <?php endwhile;?>
              <?php endif;?>
                <?php wp_reset_postdata();?>
        </div>
    </div>
</section>
</div>
                    </div>

<?php get_footer('2'); ?>

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