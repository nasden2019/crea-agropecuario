<?php
/*
Template Name: convocatorias
*/
?>

<?php get_header(); ?>

<div class="top-shadow"></div>

<section class="mt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="mainTitular">| Convocatorias</h3>
            </div>
        </div>
    </div>
</section>


<section class="seccion2-fotos my-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <?php $args = array('post_type' => 'convocatorias_home'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-6  mb-1 my-3 text-center">
                        <?php if ( get_field( 'imagen') ) { ?>
                        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid d-none d-md-block" />
                        <?php } ?>
                        <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid d-none d-md-block" /> -->
                        <p class="text-center titulos-fotos-inicio d-none d-md-block">
                            <a href="#"><?php the_field( 'titulo' ); ?></a>
                        </p>
                        <p class="text-center p-convocatorias" style="font-size: 20px;">
                            <?php the_field( 'parrafo' ); ?>
                        </p>

                        <button type="button" class="btn px-3 py-2 btn-contacto ml-3 ml-md-5" data-toggle="modal"
                            data-target="#exampleModal" data-whatever="@getbootstrap">Inscribirme</button>

                        <!-- MODAL -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                            ledby="exampleModalLabel " aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content modales">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: auto;">
                                            INSCRIBIRME</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name"
                                                    class="col-form-label ml-md-3 ml-2">Nombre</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name"
                                                    class="col-form-label ml-md-3 ml-2">Apellido</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name"
                                                    class="col-form-label ml-md-3 ml-2">E-Mail</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name"
                                                    class="col-form-label ml-md-3 ml-2">Teléfono</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>

                                            <div class="form-group text-center">
                                                <label for="recipient-name" class="col-form-label">Es asesor de
                                                    Crea?</label>

                                                <!--inputs -->
                                                <div class="text-center mb-md-2">
                                                    <button class="btn" name="asesorSi" id="asesorSi"
                                                        style="width: 50px;">
                                                        SI
                                                    </button>

                                                    <div id="asesorSiInputs" class="text-center">
                                                        Crea: <input type="text" name="asesorSiInputs" id="" />
                                                        <br>
                                                        Zona:
                                                        <input type="text" name="asesorSiInputs" id="" />
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button class="btn" style="width: 50px;" name="asesorNo"
                                                        id="asesorNo">
                                                        NO
                                                    </button>

                                                    <div id="asesorNoInputs" class="text-center">
                                                        Estudiante:
                                                        <input type="text" name="" id="" class="text-center" />
                                                        <br>
                                                        Asesor:
                                                        <input type=" text" name="" id="" />
                                                        <br>
                                                        Productor:
                                                        <input type="text" name="" id="" />
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- fin inputs asesor-->

                                            <!-- inputs productor -->
                                            <div class="form-group text-center">
                                                <label for="recipient-name" class="col-form-label">Es productor de
                                                    Crea?</label>

                                                <!--inputs -->
                                                <div class="text-center mb-md-2">
                                                    <button class="btn" name="asesorSi" id="productorSi"
                                                        style="width: 50px;">
                                                        SI
                                                    </button>

                                                    <div id="productorSiInputs" class="text-center">
                                                        Crea: <input type="text" name="productorSiInputs" id="" />
                                                        <br>
                                                        Zona:
                                                        <input type="text" name="productorSiInputs" id="" />
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button class="btn" style="width: 50px;" name="" id="productorNo">
                                                        NO
                                                    </button>

                                                    <div id="productorNoInputs" class="text-center">
                                                        Estudiante:
                                                        <input type="text" name="" id="productorNoInputs" class="" />
                                                        <br>
                                                        Asesor:
                                                        <input type=" text" name="" id="productorNoInputs" />
                                                        <br>
                                                        Productor:
                                                        <input type="text" name="" id="productorNoInputs" />
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                    <!-- fin inputs productor -->

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-cerrar" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-contacto">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->


                    <?php endwhile;?>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script>
     $(document).ready(function () {
      $("#asesorSi").click(function (e) {
        e.preventDefault();
        $("#asesorSiInputs").toggle();
        // $("#asesorNoInputs").hide();
      });

      $("#asesorNo").click(function (e) {
        e.preventDefault();
        $("#asesorNoInputs").toggle();
        // $("#asesorSiInputs").hide();
      });

      $('#productorSi').click(function (e) {
        e.preventDefault();
        $('#productorSiInputs').toggle();
      })

      $('#productorNo').click(function (e) {
        e.preventDefault();
        $('#productorNoInputs').toggle();
      })

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
                    value="Enviar Mensaje"
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

   