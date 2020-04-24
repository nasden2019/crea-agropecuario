<?php
/*
Template Name: trabajos
*/
?>

<?php get_header(); ?>
  

    <div class="top-shadow"></div>

    <section class="mt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3 class="mainTitular ml-md-5 ml-3 mb-4">| Trabajos</h3>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <?php $args = array('post_type' => 'trabajos_home'); ?>
                <?php $loop = new WP_Query($args); ?>
                <? $i=1;
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    if ($i == 1) :                      
                        echo '<div class="col-sm-8 mt-md-3">
                            <div class="row">';
                    endif; ?>

                                <?php if($i <= 2 ) :
                                    echo '<div class="col-sm-6">';
                                    if ( get_field( "imagen") ) { ?>
                                        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@getbootstrap"  />
                                    <?php }; 
                                    echo'<p class="text-center titulos-fotos-inicio" data-toggle="modal" data-target="#exampleModal"
                                        data-whatever="@getbootstrap">
                                        <a>'; 
                                    the_field( "titulo" ); 
                                    echo '</a>
                                    </p>

                                    <!-- MODAL -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                                        ledby="exampleModalLabel " aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modales">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="margin-left: auto;">
                                                        INSCRIBIRME
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Nombre</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Apellido</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">E-Mail</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Teléfono</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <label for="recipient-name" class="col-form-label">Es asesor de
                                                                Crea?</label>
                                                            <div>
                                                                <button class="btn" style="width: 50px">
                                                                    SI
                                                                </button>
                                                                <button class="btn" style="width: 50px">
                                                                    NO
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <label for="recipient-name" class="col-form-label ">Es
                                                                Productor?</label>
                                                            <div>
                                                                <button class="btn" style="width: 50px">
                                                                    SI
                                                                </button>
                                                                <button class="btn" style="width: 50px">
                                                                    NO
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-cerrar" data-dismiss="modal">
                                                        Cerrar
                                                    </button>
                                                    <button type="button" class="btn btn-contacto">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                endif; 
                                if ($i == 2) :
                                
                            echo'</div>
                        </div>

                        <!-- segunda columna: primer foto chiquita-->
                        <div class="col-sm-4 mt-4 mt-md-3">
                            <div class="row">';
                                endif; 
                                
                                if ( $i < 5 && $i > 2 ) :
                                    echo '<div class="col-6">';
                                    if ( get_field( "imagen") ) { ?>
                                        <img src="<?php the_field( "imagen" ); ?>" class="img-fluid" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@getbootstrap"  />
                                    <?php };
                                    echo '<p class="text-center titulos-fotos-inicio" data-toggle="modal" data-target="#exampleModal"
                                        data-whatever="@getbootstrap">
                                        <a>';
                                    the_field( "titulo" );
                                    echo'</a>
                                    </p>

                                    <!-- MODAL -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                                        ledby="exampleModalLabel " aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modales">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="margin-left: auto;">
                                                        INSCRIBIRME
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Nombre</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Apellido</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">E-Mail</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Teléfono</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <label for="recipient-name" class="col-form-label">Es asesor de
                                                                Crea?</label>
                                                            <div>
                                                                <button class="btn" style="width: 50px">
                                                                    SI
                                                                </button>
                                                                <button class="btn" style="width: 50px">
                                                                    NO
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <label for="recipient-name" class="col-form-label ">Es
                                                                Productor?</label>
                                                            <div>
                                                                <button class="btn" style="width: 50px">
                                                                    SI
                                                                </button>
                                                                <button class="btn" style="width: 50px">
                                                                    NO
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-cerrar" data-dismiss="modal">
                                                        Cerrar
                                                    </button>
                                                    <button type="button" class="btn btn-contacto">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                endif;                                 
                                if ($i == 5) :

                            echo '</div>
                            <div class="row">';

                                endif;
                                
                                if ($i < 7 && $i > 4) :
                                echo '<div class="col-6 mt-md-1">';
                                if ( get_field( "imagen") ) { ?>
                                        <img src="<?php the_field( "imagen" ); ?>" class="img-fluid" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@getbootstrap"  />
                                    <?php }; 
                                    echo'<p class="text-center titulos-fotos-inicio" data-toggle="modal" data-target="#exampleModal"
                                        data-whatever="@getbootstrap">
                                        <a>';
                                    the_field( "titulo" );
                                    echo '</a>
                                    </p>

                                    <!-- MODAL -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                                        ledby="exampleModalLabel " aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modales">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="margin-left: auto;">
                                                        INSCRIBIRME
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Nombre</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Apellido</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">E-Mail</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label ml-md-3 ml-2">Teléfono</label>
                                                            <input type="text" class="form-control" id="recipient-name" />
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <label for="recipient-name" class="col-form-label">Es asesor de
                                                                Crea?</label>
                                                            <div>
                                                                <button class="btn" style="width: 50px">
                                                                    SI
                                                                </button>
                                                                <button class="btn" style="width: 50px">
                                                                    NO
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <label for="recipient-name" class="col-form-label ">Es
                                                                Productor?</label>
                                                            <div>
                                                                <button class="btn" style="width: 50px">
                                                                    SI
                                                                </button>
                                                                <button class="btn" style="width: 50px">
                                                                    NO
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-cerrar" data-dismiss="modal">
                                                        Cerrar
                                                    </button>
                                                    <button type="button" class="btn btn-contacto">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                endif;
                                
                                if ($i == 6) :
                            echo '</div>
                        </div>';
                                endif; ?>
                    <?php $i++; endwhile;?>                                        
                <?php endif;?>
                <?php wp_reset_postdata();?>                    
                </div>
            </div>
        </div>
    </section>


    <section class="section">
      <div class="container">
        <h2 class="my-md-5">Dejanos un comentario:</h2>
        <div class="row">
          <div class="col-md-12 order-2">
           <?php echo do_shortcode('[contact-form-7 id="469" title="comentarios"]'); ?>

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
          var saludo = $("<h2>Gracias!</h2>").append(".saludo");
          $(".span1").html(nombre.val());
          $(".span2").html(tel.val());
          $(".span3").html(email.val());
          $(".span4").html(comentarios.val());
        });
      });
    </script>