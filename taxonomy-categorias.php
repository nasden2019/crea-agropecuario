<?php
/*
Taxonomy Template: categorias
*/
?>

<?php get_header(); ?>

<!-- SIDEBAR -->
<!-- METER LA PANTALLA ENTERA (antes de q termine el sidebar) DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
<div class="wrapper">
    <!-- Sidebar  -->
    <!-- Sidebar  -->
    <nav id="sidebar" style="display: none;">
        <div class="sidebar-header">
            <h3>CATEGORIAS</h3>
        </div>
            <?php
            //listado de taxonomias
            $url= $_SERVER["REQUEST_URI"];
            $categoria= basename($url);
            $url = dirname($url); 
            $taxonomia= basename($url);
            if ($taxonomia == 'categorias') {
                $post_type = 'proyectos_categorias';
            }
            else {
                $post_type = 'proyectos_historicos';
            }
            ?>
            <ul class="list-unstyled components">
                <?php
                    foreach ($tax_terms as $tax_term) {
                    echo '<li><a href="'  . esc_attr(get_term_link($tax_term, $taxonomy)) . '">'.$tax_term->name.'</a></li>';
                    }
                ?>
            </ul>
    </nav>

    <!-- METER ACA!!!! LA PANTALLA ENTERA DENTRO DEL SIDE BAR (MENOS EL NAVBAR Y EL FOOTER, PARA Q NO SE ROMPAN!)  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">

                <button type="button" id="sidebarCollapse" class="btn btn-contacto">
                    <i class="fas fa-search-left"></i>
                    <span>Buscar Proyectos</span>
                </button>
                <div class="text-center">
                    <a href="<?php echo esc_url( home_url('/') ); ?>proyectos"><button class="btn <?php if ($taxonomia == 'categorias') { echo 'active'; }?>" >Actual</button></a>
                    <a href="<?php echo esc_url( home_url('/') ); ?>proyectos-historicos"><button class="btn <?php if ($taxonomia == 'categorias_historicas') { echo 'active'; }?>">Historico</button></a>
                </div>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
            </div>
        </nav>

        <!-- END SIDEBAR -->


        <div class="top-shadow"></div>

        <section class="mt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-md-5">
                        <h3 class="mainTitular">| Proyectos</h3>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            $args = array('post_type' => $post_type,
                            'tax_query' => array(
                                array (
                                    'taxonomy' => $taxonomia,
                                    'field' => 'slug',
                                    'terms' => $categoria,
                                )
                            ),
                         ); ?>
        <?php $loop = new WP_Query($args);
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <section class="section mb-md-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 d-none d-md-block">

                        <?php the_field( 'video' ); ?>
                        <div class="text-center">
                            <!-- <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe> -->
                        </div>
                    </div>

                    <!-- video en mobile-->
                    <div class="col-md-5 d-md-none mt-4">
                        <?php the_field( 'video' ); ?>
                        <div class="">
                            <!-- <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe> -->
                        </div>
                    </div>

                    <!-- img -->
                    <div class="col-md-6">
                        <div class="">
                            <?php if ( get_field( 'imagen') ) { ?>
                            <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" />
                            <?php } ?>
                            <!-- <img src="?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid"> -->
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div>
                            <span class="mainTitular titularchiquito">| Categorias <?php echo $url; ?></span>
                            <h2 class="d-md-block d-none h3 font-weight-bold"><?php the_field( 'titulo' ); ?>
                            </h2>
                            <p class="p-convocatorias">
                                <?php the_field( 'parrafo' ); ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php endwhile;?>
        <?php endif;?>
        <?php wp_reset_postdata();?>
    </div>
</div>


<?php get_footer('2'); ?>