
      <div class="container-fluid">
      <div class="row justify-content-center" style="background: #7c7c7c45;">
        <div class="col-8 col-md-4 text-center">        
        <button class="comentar my-4 my-md-3 btn btn-contacto"  style="width: 75%!important;">Dejar un comentario</button>
        </div>
      </div>

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
            <?php echo do_shortcode('[contact-form-7 id="469" title="comentarios" html_class="formulario" class="formulario"]'); ?>
          </div>
        </div>
      </div>


    <style>
      textarea {
        width: 540px!important;
        height: 88px!important;
      }
    </style>

