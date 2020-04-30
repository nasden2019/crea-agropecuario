
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
        <nav id="sidebar" style="display: none;">
            <div class="sidebar-header">
                <h3>CATEGORIAS</h3>
            </div>
            <?php
            //listado de taxonomias
            $taxonomy = 'categorias';
            $tax_terms = get_terms($taxonomy);
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

        <button type="button" id="sidebarCollapse" class="btn btn-contacto ml-sm-4">
            <!-- <i class="fas fa-search-left"></i> -->
            <span>Buscar Proyectos</span>
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
            <div class="col-12 col-md-6 mb-md-5">
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
                    <img src="<?php the_field( 'imagen' ); ?>" class="img-fluid" style="height: 281px; width: 500px;"/>
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
                <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" class="img-fluid" style="height: 281px; width: 500px;"/>
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
            <div class="col-md-3 d-md-none mt-4">
                <div class="text-center">
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


<section class="section">
    <?php get_footer('comentarios'); ?>
</section>

<?php get_footer('2'); ?>



<script>
        $(document).ready(function () {
            // para q se abra el form
            $(".comentar").click(function (e) {
                e.preventDefault();
                $(".formulario").toggle();

            });

            // para q imprima datos en pantalla
            var boton = $(".boton");
            var nombre = $("#nombre");
            var tel = $("#tel");
            var email = $("#email");
            var comentarios = $("#mensaje");
            var profesion = $("#profesion");

            boton.on("click", function (e) {
                e.preventDefault();
                var saludo = $("<h2>Gracias por contactarnos!</h2>").append(".saludo");
                $(".span1").html(nombre.val());
                $(".span2").html(tel.val());
                $(".span3").html(email.val());
                $(".span4").html(profesion.val());
                $(".span5").html(comentarios.val());
            });

            // limitar caracteres en comentario
            var maxCaracteres = 140;
            $("#mensaje").keyup(function () {
                var maxLength = maxCaracteres - $(this).val().length;
                $("#numeros").text(maxLength);
            });

            // mostrar border class si no completa uno de los campos
            $('.boton').on('click', function (e) {
                e.preventDefault();
                if (validarCampo()) {
                    $('#formularioContacto').submit();
                } else {
                    $('.campoObligatorio').show();
                }
            })

            // desactivar boton si inputs estan vacios
            $('.campo').change(function () {

                if ($(this).val() == '') {
                    $(this).css("border", "2px solid red");
                    $('.campoObligatorio').show();
                } else {
                    $('.campoObligatorio').hide();
                    $(this).css("border", "1px solid green");
                }
            })

            function validarCampo() {
                let nombreFuncion = nombre.val();
                let emailFuncion = email.val();
                let comentariosFuncion = comentarios.val();

                if (
                    nombreFuncion.trim() != '' &&
                    emailFuncion.trim() != '' &&
                    comentariosFuncion.trim() != ''
                ) {
                    return true;
                } else {
                    $('.campo').each(function () {
                        if (
                            $(this).val() == ''
                        ) {
                            $(this).css('border', 'red 3px solid')
                        } else {
                            $(this).css('border', 'green 3px solid')
                        }
                    })
                    return false;
                }
            }

            // tel solo numeros
            tel.on('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
    </script>
