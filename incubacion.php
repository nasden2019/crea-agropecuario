<?php
/*
Template Name: incubacion
*/
?>

<?php get_header(); ?>

<div class="top-shadow"></div>

<section class="mt-sm-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h3 class="mainTitular">| Incubación</h3>
      </div>
    </div>
  </div>
</section>

<!-- TEXTO -->
<section class="section seccion-parrafo my-xs-5">
  <div class="container">
    <div class="col-12">
      <div class="text-center">
        <h2 class="mb-sm-5">PROCESO DE SELECCIÓN DE PROYECTOS</h2>
      </div>
      <?php $args = array('post_type' => 'incubacion-seleccion'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
      <p>
      <?php the_field( 'parrafo' ); ?>
      </p>
    </div>
    <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_postdata();?>
  </div>
</section>

<!-- IMAGENES -->
<section class="seccion2-fotos mt-md-4 mb-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h2 class="mb-sm-3">QUÉ INTENTAMOS HACER?</h2>
        </div>
        <?php $args = array('post_type' => 'incubacion-seleccion'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
        <div>
          <p class="text-center p-convocatorias"><?php the_field( 'parrafo' ); ?></p>
        </div>

        <div class="col-md-6  mt-md-4 text-center mx-auto">
        <?php if ( get_field( 'imagen') ) { ?>
	        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid"/>
              <?php } ?>
          <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
        </div>
      </div>
      
      <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_postdata();?>
    </div>
  </div>
</section>

<section class="seccion2-fotos mt-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h2 class="mb-sm-3">METODOLOGIA DE INCUBACIÓN</h2>
        </div>
        <div class="col-md-6  mt-md-4 text-center mx-auto">
        <?php if ( get_field( 'imagen') ) { ?>
	        <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid"  />
            <?php } ?>
          <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" /> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECCION ALIADOS ESTRATEGICOS-->
<section class="seccion2-fotos mt-md-5">
  <div class="container">
    <div class="text-center">
      <h2 class="mb-sm-3">ALIADOS ESTRATÉGICOS</h2>
    </div>

    <div class="row">
      <div class="col-10 offset-1">
        <div class="row">
          <div class="col-md-4  mb-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid" />
            <p class="text-center titulos-fotos-inicio">
              <a href="#">Aliado 1</a>
            </p>
            <p class="text-center p-convocatorias">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
              quod dicta delectus nesciunt et deserunt, animi aliquid beatae
              labore officiis hic facilis dolorum, doloremque tempore.
              Delectus quaerat et quod saepe, cumque corporis nesciunt
            </p>
          </div>
          <div class="col-md-4  mb-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
            <p class="text-center titulos-fotos-inicio">
              <a href="#">Aliado 2</a>
            </p>
            <p class="text-center p-convocatorias">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
              quod dicta delectus nesciunt et deserunt, animi aliquid beatae
              labore officiis hic facilis dolorum, doloremque tempore.
              Delectus quaerat et quod saepe, cumque corporis nesciunt
            </p>
          </div>
          <div class="col-md-4  mb-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg" class="img-fluid" />
            <p class="text-center titulos-fotos-inicio">
              <a href="#">Aliado 3</a>
            </p>
            <p class="text-center p-convocatorias">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
              quod dicta delectus nesciunt et deserunt, animi aliquid beatae
              labore officiis hic facilis dolorum, doloremque tempore.
              Delectus quaerat et quod saepe, cumque corporis nesciunt
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="seccion2-fotos mt-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h2 class="mb-sm-3">CÓMO VINCULAMOS</h2>
        </div>
        <div class="col-md-6  mt-md-4 text-center mx-auto">
          <div class="tenor-gif-embed" data-postid="15057889" data-share-method="host" data-width="100%" data-aspect-ratio="1.0"><a href="https://tenor.com/view/company-customer-factory-smoke-gif-15057889">Company Customer GIF</a> from <a href="https://tenor.com/search/company-gifs">Company GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRIMER TESTIMONIAL  -->
<section class="my-5" style="background-color: lightgrey; height: 200px;">
  <div class="container">
    <div class="owl-carousel owl-theme secundario">
      <!--  -->
      <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
        <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
          class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
      </div>
      <!--  -->
      <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
        <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
          class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
      </div>
      <!--  -->
      <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
        <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
          class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
      </div>
      <!--  -->
      <div class="btn-play-wrap mx-auto" style="margin-top: 37px;">
        <a href="https://vimeo.com/59256790" data-fancybox data-ratio="2"
          class="btn-play owl-images rounded-circle mx-auto"><span class="ion ion-ios-play"></span></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>