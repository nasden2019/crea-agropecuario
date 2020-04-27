
<?php
/*
Template name: agenda
*/
?>

<?php get_header(); ?>


   
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <?php $args = array('post_type' => 'agendacrea'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-11 mb-5 text-center">
                        <h2>Calendario Crea</h2>
                        <iframe
                            src="https://calendar.google.com/calendar/embed?src=gnp4oirdq97es7ibh252asalc0%40group.calendar.google.com&ctz=Europe%2FMadrid"
                            style="border: 0" width="100%" height="800" frameborder="0" scrolling="no"></iframe>
                    </div>

                    <div class="col-md-1 my-5 text-center my-auto">
                        <button class="btn botones" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@getbootstrap">Asignar<br> Evento</button>
                    </div>
                    <!-- <button type="button" class="btn px-3 py-2 btn-contacto ml-3" data-toggle="modal"
                    data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-left: auto;">
                    Inscribirme
                  </button> -->

                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                        ledby="exampleModalLabel " aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel ">
                                        EVENTOS CREA
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <?php echo do_shortcode('[contact-form-7 id="484" title="agenda"]'); ?>
                                </div>
                                <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-cerrar" data-dismiss="modal">
                                        Cerrar
                                    </button>
                                    <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit btn btn-contacto">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
 

   
   <!-- para que el modal funcione en .php -->
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
   
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

   

<?php get_footer('agenda'); ?>
    

