    <!-- FOOTER -->
    <footer id="clientes" class="mt-sm-5" style="height: 100%;">
        <!-- <h2 class="text-center font-weight-bold pb-5 mt-sm-3">CLIENTES</h2> -->
        <!-- owl carrousel -->
        <div class="container-fluid">
            <div class="owl-carousel owl-theme">
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" />
                </div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" />
                </div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" />
                </div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" />
                </div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" />
                </div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" />
                </div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="" class="owl-images rounded-circle mx-auto"
                        style="width: 80px;" />
                </div>
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


</body>

</html>