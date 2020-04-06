<?php
/*
Template Name: sobrenosotros
*/
?>
<?php get_header(); ?>



    <!-- FOTO -->
    <div class="top-shadow"></div>

    <!-- <div>
    <h2 class="bg-secondary">| MISION Y VISION</h2>
  </div> -->

    <section class="mx-sm-5">
        <div class="slider-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero_1.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEXTO -->
    <section class="section seccion-parrafo my-xs-5">
        <div class="container">
            <div class="col-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quod
                    dicta delectus nesciunt et deserunt, animi aliquid beatae labore
                    officiis hic facilis dolorum, doloremque tempore. Delectus quaerat et
                    quod saepe, cumque corporis nesciunt laudantium ut quis nobis
                    architecto, veritatis incidunt repellendus autem tempore blanditiis
                    dolore quisquam culpa atque ipsam possimus, ipsum sed modi
                    perspiciatis. Atque tenetur incidunt commodi, omnis a repellat quo
                    quasi? Alias, est hic! Aliquam quasi, ducimus rerum harum soluta at
                    iusto sequi quis obcaecati dolorem beatae tenetur tempore amet
                    repellendus nobis modi animi. Beatae qui id eum, provident quidem
                    dolorem fuga earum tempore sed sit ab illum.
                </p>
            </div>
        </div>
    </section>

    <!-- IMAGENES -->
    <section class="seccion2-fotos">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="mb-sm-5">QUÉ HACEMOS?</h2>
            </div>

            <div class="row">
                <!-- offset-1: quita un rem de cada lado,-->
                <div class="col-10 offset-1">
                    <div class="row">

                    <?php $args = array('post_type' => 'sobre nosotros'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 

                        <div class="col-md-3  mb-1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" />
                            <p class="text-center titul-fotos-inicio"><a href="<?php echo esc_url( home_url('/') ); ?>prospectiva">Prospectiva</a></p>
                        </div>
                        

                        <?php endwhile;?>
                        <?php endif;?>
                    <?php wp_reset_postdata();?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUIENES SOMOS -->
    <section class="seccion-quienesSomos mt-sm-5">
        <div class="site-section" id="team-section">
            <div class="container">
                <div class="row mb-3 justify-content-center">
                    <div class="col-12 col-md-7 text-center">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2 class="quienessomos-titulo">QUIÉNES SOMOS?</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mx-0  row-quienessomos">

                    <!------- MOBILE: col-9 para q ocupe 9colums
            (la hace mas grande) y m-auto en el medio -------->
                    <div class="col-9 col-md-3 pr-md-5 mb-2" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content modalCajasBlancas">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle fotosRedondas" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Se
                                            ocupa de
                                            todo</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- esta img ocupa 6 col, la sig tb para q entre las dos en la misma fila-->
                    <div class="col-6 col-md-3 pd-md-5 mb-2" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Se
                                            ocupa de
                                            todo</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-6 col-md-3  mb-2 fotos-quienessomos-mobile" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Se
                                            ocupa de
                                            todo</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-9 col-md-3 pr-md-5 mb-2 m-auto" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Se
                                            ocupa de
                                            todo</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- FIN PRIMER ROW-->

                <!-- SEGUNDO ROW -->

                <div class="row justify-content-center mx-0  row-quienessomos">

                    <!-- MOBILE ocupa 6 columns y a en desktop 3col-->
                    <div class="col-6 col-md-3  mb-2" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Se
                                            ocupa de
                                            todo</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-md-3  mb-2 fotos-quienessomos-mobile" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Se
                                            ocupa de
                                            todo</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-md-3  mb-2" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Se
                                            ocupa de
                                            todo</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-md-3  mb-2" data-aos="fade-up" data-aos-delay="100">
                        <button class="btn " data-toggle="modal" data-target="#Integrante8"
                            style="background-color: white;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="" class="circle rounded-circle imgsQuienessomos" />
                            <h6 class="font-weight-bold">Juan Gonzalez</h6>
                            <span>Project Manager</span>
                        </button>
                        <div class="modal fade" id="Integrante8" tabindex="-1" role="dialog"
                            aria-labelledby="Integrante1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="block-team-member-1 text-center rounded">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt="Image"
                                                class="img-fluid rounded-circle" />
                                        </figure>
                                        <h3 class="font-size-20 text-black">Don Bob</h3>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project
                                            Manager</span>
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Chef
                                            office</span>
                                        <div class="block-social-1">
                                            <span
                                                class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">bob@crea.org</span>
                                            <div class="block-social-1">
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-facebook"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-twitter"></span></a>
                                                <a href="#"
                                                    class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                        class="icon-instagram"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>



  