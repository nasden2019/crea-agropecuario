<?php
/*
* Taxonomy Template: registro
*/
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <?php
                
                $args = array(
                'name'        => 'email-crea',
                'post_type'   => 'registros',
                'post_status' => 'publish',
                'numberposts' => 1
                );
                $loop = new WP_Query($args);
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();
                endwhile;?>
                    <input type="email"  value="<?php the_field( 'email' ); ?>">
                <?php endif;?>
                <?php wp_reset_postdata();?>

            <?php
                $the_slug = $_GET['link'];
                $args = array(
                'name'        => $the_slug,
                'post_type'   => 'proyectos_categorias',
                'post_status' => 'publish',
                'numberposts' => 1
                );
                $loop = new WP_Query($args);
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();
                        echo do_shortcode('[contact-form-7 id="437" title="Formulario de contacto 1"]');
                
                    endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata();?>
            <!-- <form>
                <div class="form-row">
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault01">Mail</label>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Mail"
                            value="" required>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault02">Teléfono</label>
                        <input type="text" class="form-control" id="validationDefault02" placeholder="Teléfono"
                            value="" required>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault02">¿Es asesor CREA?</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" value="si" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Si.</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" value="no" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">No.</label>
                        </div>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault02">¿Es productor CREA?</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">Si.</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline4">No.</label>
                        </div>
                        <div class="form-group">
                            <select class="custom-select" required id="select">
                                <option value="">Asesor</option>
                                <option value="1">Productor</option>
                                <option value="2">Estudiante</option>
                            </select>
                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>
                    <button class="btn btn-block">Enviar</button>                         
                    </div>
                </div>
            </form> -->
        </div>
    </div>
</div>
<style>
    .btn-registro {
		background: #49b6af;
		color: white;
		padding: 8px 40px;
	}
</style>
<script>
    console.log("asd");
</script>


<?php get_footer(); ?>