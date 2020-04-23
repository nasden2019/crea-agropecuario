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
                $the_slug = $_GET['name'];
                $args = array(
                'name'        => $the_slug,
                'post_type'   => 'proyectos_categorias',
                'post_status' => 'publish',
                'numberposts' => 1
                );
                $my_posts = get_posts($args);
                if( $my_posts ) :
                echo do_shortcode('[contact-form-7 id="437" title="Formulario de contacto 1"]');
                endif;
            ?>
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



<?php get_footer(); ?>