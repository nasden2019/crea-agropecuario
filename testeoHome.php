
<?php
/*
Template Name: testeo home
*/
?>

<?php get_header(); ?>

<!-- SIDEBAR -->
    <!-- METER LA PANTALLA ENTERA (antes de q termine el sidebar) DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="display: none; background: turquoise;">
            <div class="sidebar-header" style="background: turquoise;">
                <h3>Testeos Generales</h3>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        CATEGORIAS
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Categorias 1</a>
                        </li>
                        <li>
                            <a href="#">Categorias 2</a>
                        </li>
                        <li>
                            <a href="#">Categorias 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="text-white" href="#">SOBRE NOSOTROS</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle 
                        text-white">HERRAMIENTAS</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a class="text-white" href="#">Herramientas 1</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Herramientas 2</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Herramientas 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="text-white" href="#">CONTACTO</a>
                </li>
            </ul>

        </nav>

 <!-- METER ACA!!!! LA PANTALLA ENTERA DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
 <div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <button type="button" id="sidebarCollapse" class="btn btn-contacto ml-sm-4">
            <i class="fas fa-align-left"></i>
            <span>Info extra</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
    </div>
</nav>

<!-- END SIDEBAR -->


<div class="top-shadow"></div>

<section class="mt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="mainTitular ml-md-4">| Testeo</h3>
            </div>
        </div>
    </div>
</section>

<section class="section ml-md-5">
    <div class="container">
        <div class="row">
        <?php $args = array('post_type' => 'testeo_categorias'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 

            <div class="col-md-6">
                <div class="">
                <?php if ( get_field( 'imagen') ) { ?>
                    <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid"/>
                <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid"> -->
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <!-- text-center: para q ocupe el centro-->
                <div class="text-center">
                    <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>

            <!-- video en mobile-->
            <div class="col-md-5 d-md-none mt-4">
                <div class="">
                <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>


            <div class="col-md-12">
                <div>
                    <span class="mainTitular titularchiquito">| Categorías</span>
                    <h2 class="d-md-block d-none"><?php the_field( 'titulo' ); ?>
                    </h2>
                    <p class="p-convocatorias"><?php the_field( 'parrafo' ); ?></p>
                </div>
            </div>
            <?php endwhile;?>
              <?php endif;?>
                <?php wp_reset_postdata();?>
        </div>
    </div>
</section>

<!-- SEGUNDA SECCION -->
<section class="section ml-md-5 mt-md-5">
    <div class="container">
        <div class="row">
        <?php $args = array('post_type' => 'testeo_categorias2'); ?>
                    <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?> 
            <div class="col-md-6">
                <div class="">
                            <?php $imagen = get_field( 'imagen' ); ?>
            <?php if ( $imagen ) { ?>
                <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" class="img-fluid"/>
            <?php } ?>
                    <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid"> -->
                </div>
            </div>

            <div class="col-md-6 d-none d-md-block">
                <div class="text-center">
                <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>

            <!-- video en mobile-->
            <div class="col-md-5 d-md-none mt-4">
                <div class="">
                <?php the_field( 'video' ); ?>
                    <!-- <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> -->
                </div>
            </div>


            <div class="col-md-12">
                <div>
                    <span class="mainTitular titularchiquito">| Herramientas</span>
                    <h2 class="d-md-block d-none"><?php the_field( 'titulo' ); ?>
                    </h2>
                    <p class="p-convocatorias"><?php the_field( 'parrafo' ); ?></p>
                </div>
            </div>
            <?php endwhile;?>
              <?php endif;?>
                <?php wp_reset_postdata();?>
        </div>
    </div>
</section>
</div>
                    </div>

<?php get_footer('2'); ?>
