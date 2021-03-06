<!-- FOOTER -->
<footer id="clientes" class="m-0" style="height: 100%;">
        <!-- <h2 class="text-center font-weight-bold pb-5 mt-sm-3">CLIENTES</h2> -->
        <!-- owl carrousel -->
        <div class="container-fluid">
            <div class="owl-carousel owl-theme">
            <?php $args = array('post_type' => 'footer'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div>
                <?php if ( get_field( 'imagen1') ) { ?>
                    <img src="<?php the_field( 'imagen1' ); ?>" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen2') ) { ?>
                    <img src="<?php the_field( 'imagen2' ); ?>" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen3') ) { ?>
                    <img src="<?php the_field( 'imagen3' ); ?>" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen4') ) { ?>
                    <img src="<?php the_field( 'imagen4' ); ?>" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen5') ) { ?>
                    <img src="<?php the_field( 'imagen5' ); ?>" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen6') ) { ?>
                    <img src="<?php the_field( 'imagen6' ); ?>" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>

                <?php endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata();?>
            </div>
        </div>
    </footer>




    <!-- loader -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

   <!-- loader -->
   <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle mx-auto class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle mx-auto class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" /></svg></div>
es
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_stylesheet_testdirectory_uri(); ?>/js/main.js"></script>


    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    
    <script>

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggle();
            });
        });
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            responsive: {
                // items: 6,
                // itemsDesktop: [1000, 6],
                // itemsDesktopSmall: [900, 3],
                // itemsTablet: [600, 2],
                // itemsMobile: [480, 1]
                0: {
                    dotsEach: 5,
                    items: 1
                },
                600: {
                    dotsEach: 4,
                    items: 3
                },
                1200: {
                    dotsEach: 3,
                    items: 5
                }
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            // para q se abra el form
            $(".comentar").click(function (e) {
                e.preventDefault();
                $("#wpcf7-f469-o1").toggle();
            });

            // para q imprima datos en pantalla
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

            // limitar caracteres en comentario
            var maxCaracteres = 140;
            $("#mensaje").keyup(function () {
                var maxLength = maxCaracteres - $(this).val().length;
                $("#numeros").text(maxLength);
            });
        });
    </script>
    <script>
    //  Script Para comentarios
     $(document).ready(function(){
            var coment = window.location.href;
            // categoria = categoria.substring(0, categoria.lastIndexOf('/'));
            // coment = basename(coment);
            console.log("asd 2" + coment);
            console.log("cambios iframe");
            $("iframe").css('width' '100');
            $("#seccion").val( coment );
            $("input[name=email-262]").val( $("#email-registro").val());
     });
     function basename(path) {
          return path.split('/').reverse()[0];
      }
    </script>
    <script type="text/javascript">
    //prueba ancho de iframe
    $(document).ready(function () {
        console.log("cambios iframe");
        // $("iframe").css('width' '100%');
        // $("iframe").height(526);
    });
    </script>

<script>
        //Script validacion instantanea       
        $('.campo').on('blur', function() { //Cambiar prueba-fede por clase general en los inputs
            if ($(this).val() == '') { //remplazar por validacion o condicional
                $(this).addClass("is-invalid");
                $(this).removeClass("valid");
                $('.campoObligatorio').show();
            }
            else {
                $(this).addClass("is-valid");
                $(this).removeClass("is-invalid");
                $('.campoObligatorio').hide();

            }
            console.log("funca");
        })
    </script>

<script>
        $(document).ready(function(){
            $('.wpcf7-submit').attr('disabled', true);

        })
        // desactivar boton si inputs estan vacios
        $('.campo1').keyup(function () {
            var vacio = false;
            $('.campo1').each(function () {
                if ($(this).val() == '') {
                    vacio = true;
                }
            });

            if (vacio) {
                $('.wpcf7-submit').attr('disabled', true);
            } else {
                $('.wpcf7-submit').attr('disabled', false);
            }
        });
    </script>
</body>
</html>