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
    <div class="slider-item"
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/hero_1.jpg');">
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
                    <?php $args = array('post_type' => 'que_hacemos'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-md-3  mb-1">
                        <?php if ( get_field( 'imagen') ) { ?>
                        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
                        <?php } ?>
                        <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
                        <!-- el ?php the_field 'titulo' ; ?> es el link para q nos lleve-->
                        <p class="text-center titulos-fotos-inicio"><a
                                href="<?php echo esc_url( home_url('/') ); ?><?php the_field( 'nombreurl' ); ?>
                                <?php the_field( 'titulo' ); ?>"></a></p>
                                
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

                <?php $args = array('post_type' => 'quienes_somos'); ?>
                <?php $loop = new WP_Query($args);
                $i=1;
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>


                <div class="col-6 col-md-3  mb-2 fotos-quienessomos-mobile" data-aos="fade-up" data-aos-delay="100">
                    <button class="btn " data-toggle="modal" data-target="#Integrante<?php echo $i; ?>"
                        style="background-color: white;">
                        <?php if ( get_field( 'imagen') ) { ?>
                            <img src="<?php the_field( 'imagen' ); ?>" class="circle rounded-circle imgsQuienessomos" />
                        <?php } ?>
                        <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg" alt=""
                            class="circle rounded-circle imgsQuienessomos" /> -->
                        <h6 class="font-weight-bold">
                            <?php the_field( 'nombre' ); ?>
                        </h6>
                        <span><?php the_field( 'rol' ); ?></span>
                    </button>

                    <div class="modal fade" id="Integrante<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="Integrante<?php echo $i; ?>"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content modalCajasBlancas">
                                <div class="block-team-member-1 text-center rounded">
                                    <figure>
                                    <?php if ( get_field( 'imagen') ) { ?>
                                        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid rounded-circle fotosRedondas"/>
                                        <?php } ?>
                                        <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/person_3.jpg"
                                            alt="Image" class="img-fluid rounded-circle" /> -->
                                    </figure>
                                    <h3 class="font-size-20 text-black">
                                        <?php the_field( 'nombre' ); ?>
                                    </h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">
                                        <?php the_field( 'rol' ); ?></span>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">
                                        <?php the_field( 'descripcion' ); ?>
                                    </span>
                                    <div class="block-social-1">
                                        <span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">
                                            <?php the_field( 'mail' ); ?></span>
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
                <?php $i++; endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata();?>





            </div>

            <!-- FIN PRIMER ROW-->



        </div>
    </div>
</section>

<?php get_footer(); ?>