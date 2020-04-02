
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
        <nav id="sidebar" style="display: none">
            <div class="sidebar-header">
                <h3>Testeos Generales</h3>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <li class="active">
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
            <!-- order-lg-1 para q en desktop se ponga en primer lugar-->
            <div class="col-md-6">
                <div class="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <!-- text-center: para q ocupe el centro-->
                <div class="text-center">
                    <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <!-- video en mobile-->
            <div class="col-md-5 d-md-none mt-4">
                <div class="">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>


            <div class="col-md-12">
                <div>
                    <span class="mainTitular titularchiquito">| Categorias</span>
                    <h2 class="d-md-block d-none">Nueva herramienta para implementar en la empresa lechera
                    </h2>
                    <p class="p-convocatorias">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Aliquam
                        ipsum
                        minima nesciunt magni
                        reprehenderit ullam sunt? Reiciendis, quisquam consectetur quae eveniet rem minima
                        ipsam
                        molestiae aperiam, modi eveniet quam dolorem officia non reprehenderit ut? Pariatur
                        dictaam,
                        incidunt quo adipisci officiis minus voluptatum veritatis?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEGUNDA SECCION -->
<section class="section ml-md-5 mt-md-5">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg" class="img-fluid">
                </div>
            </div>

            <div class="col-md-6 d-none d-md-block">
                <div class="text-center">
                    <iframe width="100%" height="405" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <!-- video en mobile-->
            <div class="col-md-5 d-md-none mt-4">
                <div class="">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/ijs_p00fkdU"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>


            <div class="col-md-12">
                <div>
                    <span class="mainTitular titularchiquito">| Herramientas</span>
                    <h2 class="d-md-block d-none">Nueva herramienta para implementar en la empresa lechera
                    </h2>
                    <p class="p-convocatorias">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Aliquam
                        ipsum
                        minima nesciunt magni
                        reprehenderit ullam sunt? Reiciendis, quisquam consectetur quae eveniet rem minima
                        ipsam
                        molestiae aperiam, modi eveniet quam dolorem officia non reprehenderit ut? Pariatur
                        dictaam,
                        incidunt quo adipisci officiis minus voluptatum veritatis?</p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
                    </div>

<?php get_footer('2'); ?>
