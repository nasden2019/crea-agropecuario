
<?php get_header(); ?>

    <div class="top-shadow"></div>

    <!-- con d-none d-sm-block QUITAMOS ESTA SECTION DE MOBILE y d-sm-block la dejamos solo en desktop -->
    <section class="home-slider owl-carousel d-none d-sm-block">
        <div class="slider-item" style="background-image: url('images/hero_1.jpg');">
            <div class="container-fluid">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4 img-fluid"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <!-- <h1 class="mb-4"><span>We Are Industrial Company</span></h1>
              <p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('images/hero_2.jpg'); <?php echo get_stylesheet_directory_uri(); ?>">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <div class="btn-play-wrap mx-auto">
                            <p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
                                    class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                        </div>
                        <!-- <h1><span>Create, Enhance and Sustain</span></h1>
              <p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->
    </div>


    <section class="section">
        <div class="container">
            <div class="row mb-5">

            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-2 order-lg-3 d-none d-sm-block">
                    <div>
                        <a class="btn botones text-white" href="convocatorias.html">
                            Convocatorias
                        </a>
                    </div>

                    <div>
                        <a class="btn botones text-white">
                            Sponsor
                        </a>
                    </div>

                    <div>
                        <a class="btn botones" href="trabajaConNosotros.html">
                            Trabaja con <br>nosotros
                        </a>
                    </div>

                    <div>
                        <a class="btn botones text-white" href="referencias.html">
                            Referencias
                        </a>
                    </div>

                    <div>
                        <a class="btn botones ultimo text-white">
                            <!-- <i class="far fa-calendar-alt"></i> -->
                            Agenda
                        </a>
                    </div>
                    <!-- <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/about_1.jpg');"></div></div></div> -->
                </div>

                <div class="col-md-6 col-lg-5 feature-1-wrap d-md-flex flex-md-column order-lg-1">

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <img src="images/img_1.jpg" class="img-fluid">
                            <p class="text-center titulos-fotos-inicio"><a href="trabajos.html">Trabajos</a></p>
                        </div>
                    </div>

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <img src="images/img_2.jpg" class="img-fluid">
                            <p class="text-center titulos-fotos-inicio"><a href="testeoHome.html">Testeo</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-5 feature-1-wrap d-md-flex flex-md-column order-lg-1">

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <!-- ICONO <span class="ion ion-alert-circle mx-autod display-4 text-primary"></span> -->
                            <img src="images/img_3.jpg" class="img-fluid">
                            <p class="text-center titulos-fotos-inicio"><a href="proyectos.html">Proyectos</a></p>
                        </div>
                    </div>

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <img src="images/img_3.jpg" class="img-fluid">
                            <p class="text-center titulos-fotos-inicio"><a href="capacitacionhome.html">Capacitación</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <?php get_footer(); ?>

