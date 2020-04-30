
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
                        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FArgentina%2FBuenos_Aires&amp;src=Z25wNG9pcmRxOTdlczdpYmgyNTJhc2FsYzBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23C0CA33&amp;hl=es" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
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
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-label
                        ledby="exampleModalLabel " aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body alert alert-success m-0 p-5 text-center" role="alert">
                                    <div style="font-size: 18px;">
                                        Gracias por tu mensaje. Ha sido enviado. 
                                    </div>
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
    <?php 
    $args = array('post_type' => 'email');
    $loop = new WP_Query($args);
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post();?>
        <input type="email" class="d-none" id="email-registro" value="<?php the_field( 'email' ); ?>">                    <?php 
        endwhile;
    endif;?>
 

   
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
    

