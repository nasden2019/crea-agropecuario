
      <div class="container">
        <h2 class="my-md-5">Dejanos un comentario:</h2>
        <div class="row">
          <div class="col-md-12 order-2">
              <?php 
                $args = array('post_type' => 'email');
                $loop = new WP_Query($args);
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                    <input type="email" class="d-none" id="email-registro" value="<?php the_field( 'email' ); ?>">                    <?php 
                    endwhile;
                endif;?>
                <?php wp_reset_postdata();?>
            <?php echo do_shortcode('[contact-form-7 id="469" title="comentarios"]'); ?>
          </div>
        </div>
      </div>
    <script>
     $(document).ready(function(){
            console.log("asd");
            var categoria = window.location.href;
            // categoria = categoria.substring(0, categoria.lastIndexOf('/'));
            categoria = basename(categoria);
            console.log(categoria);
            $("input[name=seccion]").val( categoria );
            $("input[name=email-263]").val( $("#email-registro").val());
     });
     function basename(path) {
          return path.split('/').reverse()[0];
      }
    </script>


    <style>
      textarea {
        width: 540px!important;
        height: 88px!important;
      }
    </style>