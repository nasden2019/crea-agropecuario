    <!-- FOOTER -->
    <footer id="clientes" class="mt-sm-5" style="height: 100%;">
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
                    <img src="<?php the_field( 'imagen1' ); ?>" class="owl-images mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen2') ) { ?>
                    <img src="<?php the_field( 'imagen2' ); ?>" class="owl-images mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen3') ) { ?>
                    <img src="<?php the_field( 'imagen3' ); ?>" class="owl-images mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen4') ) { ?>
                    <img src="<?php the_field( 'imagen4' ); ?>" class="owl-images mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen5') ) { ?>
                    <img src="<?php the_field( 'imagen5' ); ?>" class="owl-images mx-auto"
                        style="width: 80px;"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" /> -->
                </div>
                <div>
                <?php if ( get_field( 'imagen6') ) { ?>
                    <img src="<?php the_field( 'imagen6' ); ?>" class="owl-images mx-auto"
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
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle mx-auto class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle mx-auto class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" /></svg></div>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    <script>
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
        // Logica envio registro
        $(document).ready(function(){
            var categoria = window.location.href;
            categoria = categoria.substring(0, categoria.lastIndexOf('/'));
            categoria = basename(categoria);
            // console.log(categoria);

            // console.log("cat " + categoria);
            if (categoria === "evaluar-la-posibilidad-de-invertir" || categoria ===  "conocer-el-proyecto"){
                var recipient = $("input[name=recipient-email]").val();
                // console.log("email" + recipient);
                $("input[name=email-806]").val( $("input[name=recipient-email]").val());
            } else if( categoria === "incubarlo" || categoria ===  "mentorearlo" || categoria ===  "probar-la-tecnologia"){
                $("input[name=email-806]").val( $("#email-registro").val());
            }
        });
        function basename(path) {
            return path.split('/').reverse()[0];
        }
    
    </script>
    <script>
        //script para logica checkbox en registro
        $(document).ready(function(){
            $("#select").css("display","none");
            $("input[type=radio]").click(function(){
                if($("#customRadioInline2").is(':checked') && $("#customRadioInline4").is(':checked'))
                {				
                        $("#select").css("display","block");
                }
                else
                {
                        $("#select").css("display","none");
                }            
            });	
        });
    </script>
    <!--Script para contactanos  -->
    <script>
        $(document).ready(function(){
            $("input[name=email-971]").val( $("#email-registro").val());

        });
    </script>
    <script>
    //  Script Para comentarios
     $(document).ready(function(){
            var coment = window.location.href;
            // categoria = categoria.substring(0, categoria.lastIndexOf('/'));
            // coment = basename(coment);
            console.log("asd 2" + coment);
            $("#seccion").val( coment );
            $("input[name=email-262]").val( $("#email-registro").val());
     });
     function basename(path) {
          return path.split('/').reverse()[0];
      }
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


</body>

</html>