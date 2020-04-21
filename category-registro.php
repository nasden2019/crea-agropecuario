<?php
/*
* Category Template: registro
*/
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Si.</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">No.</label>
                        </div>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault02">¿Es productor CREA?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Si.</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">No.</label>
                        </div>
                    </div>                         
                </div>
                <!-- <div class="form-row">
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault03">City</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault04">State</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="validationDefault05">Zip</label>
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button> -->
            </form>
        </div>
    </div>
</div>




<?php get_footer(); ?>