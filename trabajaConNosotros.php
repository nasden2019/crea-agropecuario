<?php
/*
Template Name: trabaja con nosotros
*/
?>

<?php get_header(); ?>

<section class="mt-sm-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h3 class="mainTitular">| Trabaja con nosotros</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-sm-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12 d-sm-block">
          <form action="#" method="post">
            <div class="form-group">
              <label for="text" class="ml-2">Nombre</label>
              <input type="text" id="name" class="form-control" />
            </div>

            <div class="form-group">
              <label for="text" class="ml-2">Apellido</label>
              <input type="text" id="lastname" class="form-control" />
            </div>

            <div class="form-group">
              <label for="text" class="ml-2">Profesión</label>
              <input type="text" id="profesion" class="form-control" />
            </div>

            <div class="form-group">
              <label for="text" class="ml-2">Edad</label>
              <input type="text" id="edad" class="form-control" />
            </div>
            <div class="form-group">
              <label for="text" class="ml-2">Donde vivís?</label>
              <input type="email" id="email" class="form-control" />
            </div>
          </form>
          <h5>Adjuntar CV</h5>
          <div class="d-flex">
            <input type="file" id="myFile" name="filename2" />

            <button type="submit" value="Enviar" class="btn  btn-contacto d-sm-block d-none">
              Enviar
            </button>
          </div>
          <div class="mt-3">
            <button type="submit" value="Enviar" class="btn  btn-contacto d-sm-none d-block">
              Enviar
            </button>
          </div>
          <div class="d-none d-md-block">
            <p class="my-md-4 p-trabajaconnosotros">
              CONTANOS EN 1 MINUTO POR QUÉ QUERÉS TRABAJAR CON NOSOTROS
            </p>
            <input type="file" id="myFile" name="filename2" />
          </div>
        </div>

        <!-- VIDEO -->
        <div class="col-md-5 d-none d-sm-block text-center ml-md-4">
        <?php the_field( 'video' ); ?>
          <!-- <iframe width="560" height="560" src="https://www.youtube.com/embed/ULPpT-tix5M" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>
        <!-- <div class="col-md-6 d-none d-sm-block">
          <img src="?php echo get_stylesheet_directory_uri(); ?>/images/about_1.jpg" class="img-fluid ml-md-4" />
        </div> -->
      </div>
    </div>
  </section>

  <?php get_footer(); ?>