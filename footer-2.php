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

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    

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
</body>
</html>