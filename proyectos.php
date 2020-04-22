<?php
/*
Template Name: proyectos
*/
?>

<?php get_header(); ?>

<!-- SIDEBAR -->
<!-- METER LA PANTALLA ENTERA (antes de q termine el sidebar) DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" style="display: none;">
        <div class="sidebar-header">
            <h3>CATEGORIAS</h3>
        </div>
            <?php
            //listado de taxonomias
            $taxonomy = 'categorias';
            $tax_terms = get_terms($taxonomy);
            ?>
            <ul class="list-unstyled components">
                <?php
                    foreach ($tax_terms as $tax_term) {
                    echo '<li><a href="'  . esc_attr(get_term_link($tax_term, $taxonomy)) . '">'.$tax_term->name.'</a></li>';
                    }
                ?>
            </ul>
    </nav>

    <!-- METER ACA!!!! LA PANTALLA ENTERA DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">

                <button type="button" id="sidebarCollapse" class="btn btn-contacto">
                    <i class="fas fa-search-left"></i>
                    <span>Buscar Proyectos</span>
                </button>
                <div class="text-center">
                    <a href="<?php echo esc_url( home_url('/') ); ?>proyectos"><button class="btn active" >Actual</button></a>
                    <a href="<?php echo esc_url( home_url('/') ); ?>proyectos-historicos"><button class="btn">Historico</button></a>
                </div>
                <p>
                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                  </a>
                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                  </button>
                </p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                  </div>
                </div>                
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <h3 class="mainTitular">| Proyectos</h3>
                    </div>
                </div>
            </div>

        </section>
        <?php $args = array('post_type' => 'proyectos_categorias'); ?>
        <?php $loop = new WP_Query($args);
              $i = 1;
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <section class="section mb-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                      <div class="row">
                        
                      
                        <div class="col-md-6 d-none d-md-block">

                          <?php the_field( 'video' ); ?>
                          <div class="text-center">
                              <!-- <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                                      frameborder="0"
                                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                      allowfullscreen></iframe> -->
                          </div>
                        </div>

                        <!-- video en mobile-->
                        <div class="col-md-5 d-md-none mt-4">
                          <?php the_field( 'video' ); ?>
                          <div class="">
                              <!-- <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                                      frameborder="0"
                                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                      allowfullscreen></iframe> -->
                          </div>
                        </div>

                        <!-- img -->
                        <div class="col-md-6">
                          <div class="">
                              <?php if ( get_field( 'imagen') ) { ?>
                              <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
                              <?php } ?>
                              <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid"> -->
                          </div>
                        </div>

                        <div class="col-md-10">
                          <div>
                              <span class="mainTitular titularchiquito">| Categorias</span>
                              <h2 class="d-md-block d-none h3 font-weight-bold"><?php the_field( 'titulo' ); ?>
                              </h2>
                              <p class="p-convocatorias">
                                  <?php the_field( 'parrafo' ); ?>
                              </p>
                              <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample<?php echo $i; ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Ver más
                              </a>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-2 p-0">
                      <div class="collapse" id="collapseExample<?php echo $i; ?>">
                        <div class="card card-body">                          
                        <?php
                          //listado de taxonomias
                          $taxonomia = 'registro';
                          $tax_terms = get_terms($taxonomia);
                          ?>
                          <?php
                              foreach ($tax_terms as $tax_term) {
                              echo '<span><a href="'  . esc_attr(get_term_link($tax_term, $taxonomia)) . '">'.$tax_term->name.'</a></span>';
                              }
                          ?>
                        </div>
                      </div>
                    </div>


                </div>
            </div>
        </section>
        <?php $i++;?>
        <?php endwhile;?>
        <?php endif;?>
        <?php wp_reset_postdata();?>
    </div>
</div>


<?php get_footer('2'); ?>

<!-- <section class="section border-bottom">
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
                <div class="col-md-6 form-group">
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
          $("<h2>Gracias por tu mensaje!</h2>").appendTo(".saludo");
          $(".span1").html(nombre.val());
          $(".span2").html(tel.val());
          $(".span3").html(email.val());
          $(".span4").html(comentarios.val());
        });
      });
    </script> -->

