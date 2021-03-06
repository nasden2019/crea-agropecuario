<?php
/*
Template name: contacto
*/
?>

<?php get_header(); ?>

<div class="col-12 col-sm-12 order-sm-1">
  <section class="seccion-contacto border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mb-5 ">
          <div class="row justify-content-right">
            <div class="col-12 col-md-12  contact-form-contact-info">
              <h3 class="titulo-contacto">Contactate con nosotros</h3>

              <div class="col-12 datos-contacto">
                <p class="">

                  <span>Sarmiento 1236
                    (C1041AAZ).
                  </span>
                  <br>
                  <span>Buenos Aires, Argentina.</span>
                </p>
                <p class="d-flex">
                  <span>Tel. (54 11) 4382 2076/79</span>
                </p>
                <p class="d-flex">
                  <span>innovacion@crea.org.ar</span>
                </p>
                <p class="d-flex">
                  <h4>Redes sociales</h4>
                  <ul class="list-unstyled footer-link d-flex footer-social">
                    <li>
                      <a href="#" class="">
                        <i class="fa fa-twitter fa-2x imgs-redessociales"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="">
                        <i class="fa fa-facebook fa-2x imgs-redessociales"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="">
                        <i class="fa fa-linkedin fa-2x imgs-redessociales"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="">
                        <i class="fa fa-instagram fa-2x imgs-redessociales"></i>
                      </a>
                    </li>

                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- d-none d-sm-block para q no se vea en mobile -->
        <?php 
        $args = array('post_type' => 'email');
        $loop = new WP_Query($args);
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();?>
            <input type="email" class="d-none" id="email-registro" value="<?php the_field( 'email' ); ?>">                    <?php 
            endwhile;
        endif;?>
        <div class="col-md-6 mb-5 d-sm-block" style="margin-top: -35px;">
          <?php echo do_shortcode('[contact-form-7 id="485" title="Contactanos"]'); ?>
        </div>
        <!-- <div class="col-md-6 mb-5 d-none d-sm-block">
          ?php echo do_shortcode('[contact-form-7 id="469" title="comentarios"]'); ?>
        </div> -->
      </div>
    </div>
  </section>
</div>

<!-- MAP -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto my-sm-5">
        <div class="">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9561206291614!2d-58.3863360841747!3d-34.60527106508841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac59a3b5d8b%3A0x832e3cd0410cf49!2sCREA!5e0!3m2!1sen!2sar!4v1581427234587!5m2!1sen!2sar"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- <div class="col-md-1 my-5 text-center my-auto">
  <button class="btn botones" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Dejanos<br>un comentario</button>
</div> -->

<!-- <section class="section">
    ?php get_footer('comentarios'); ?>
</section> -->


<?php get_footer(); ?>



<script>
  $(document).ready(function () {
    var boton = $(".boton");
    var nombre = $("#nombre");
    var tel = $("#tel");
    var email = $("#email");
    var comentarios = $("#mensaje");

    boton.on("click", function (e) {
      e.preventDefault();
      $("<h2>Gracias por tu mensaje!</h2>").appendTo(".saludo");
      $(".span1").html(nombre.val());
      $(".span2").html(tel.val());
      $(".span3").html(email.val());
      $(".span4").html(comentarios.val());
    });
  });
</script>