<?php
/*
Template Name: capacitacion home
*/
?>

<?php get_header(); ?>

<div class="top-shadow"></div>

<section class="mt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="mainTitular">| Capacitación</h3>
            </div>
        </div>
    </div>
</section>


<section class="seccion2-fotos my-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                <?php $args = array('post_type' => 'capacitaHome'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 

                    <div class="col-md-6  mb-1 my-3 text-center">
                    <?php if ( get_field( 'imagen') ) { ?>
                            <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid d-none d-md-block"/>
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
                                                <div>
                                                    <button class="btn" style="width: 50px">SI</button>
                                                    <button class="btn" style="width: 50px">NO</button>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <label for="recipient-name" class="col-form-label ">Es
                                                    Productor?</label>
                                                <div>
                                                    <button class="btn" style="width: 50px">SI</button>
                                                    <button class="btn" style="width: 50px">NO</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-cerrar"
                                            data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-contacto">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6  mb-1 mt-2 text-center">
                    <?php if ( get_field( 'imagen') ) { ?>
                            <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid d-none d-md-block"/>
                        <?php } ?>
                        <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid d-none d-md-block" /> -->
                        <p class="titulos-fotos-inicio d-none d-md-block">
                            <a href="#"><?php the_field( 'titulo' ); ?></a>
                        </p>
                        <p class="text-center mt-4" style="font-size: 20px;">
                            <?php the_field( 'parrafo' ); ?>
                        </p>


                        <button type="button" class="btn px-3 py-2 btn-contacto ml-3" data-toggle="modal"
                            data-target="#exampleModal" data-whatever="@getbootstrap"
                            style="margin-left: auto;">Inscribirme</button>

                        <!-- MODAL -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                            ledby="exampleModalLabel " aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel ">INSCRIBIRME</h5>
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
                                                <label for="recipient-name" class="col-form-label ">Es asesor de
                                                    Crea?</label>
                                                <div>
                                                    <button>SI</button>
                                                    <button>NO</button>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <label for="recipient-name" class="col-form-label ">Es
                                                    Productor?</label>
                                                <div>
                                                    <button>SI</button>
                                                    <button>NO</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-cerrar"
                                            data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-contacto">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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