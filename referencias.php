<?php
/*
Template Name: referencias
*/
?>
<?php get_header(); ?>

<div class="top-shadow"></div>

    <section class="mt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 d-none">
                    <h3 class="mainTitular">| Noticias</h3>
                </div>
            </div>
        </div>
    </section>



    <!-- IMAGENES -->
    <section class="seccion2-fotos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2 class="mb-sm-5 text-center">Noticias de la semana</h2>

                    <!-- dentro del col-md-6, q ocupen toda la columna con el col-md-12-->
                    <iframe frameborder=0 height=250 width=550 class="col-md-12"
                        src="https://twitframe.com/show?url=https%3A%2F%2Ftwitter.com%2Fjack%2Fstatus%2F20"></iframe>
                    <iframe frameborder=0 height=250 width=550 class="col-md-12"
                        src="https://twitframe.com/show?url=https%3A%2F%2Ftwitter.com%2Fjack%2Fstatus%2F20"></iframe>
                </div>

                <div class="col-md-6 mt-2">
                    <h2 class="mb-sm-5 text-center">El video de la semana</h2>
                    <!-- VIDEO HERE-->
                    <iframe class="col-md-12" width="560" height="315" src="https://www.youtube.com/embed/sitA91-zWm0"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-6  mt-5 insta-feed">
                    <h2 class="mb-sm-5 text-center">A quién seguir?</h2>
                    <script src=" https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-0f5adf44-5d5c-4cc2-a1fd-eb8a3ff910d9" style="width: 100%;"></div>
                </div>
                <div class="col-md-6  mt-5">
                    <!-- VIDEO HERE-->
                    <iframe class="col-md-12" width="560" height="315" src="https://www.youtube.com/embed/rOL80sMest0"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>