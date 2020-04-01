<?php
/*
Template name: contacto
*/
?>

<?php get_header(); ?>

<div class="row">
        <div class="col-sm-12 order-sm-12">
            <section>
                <div class="container-fluid">
                    <div class="row">

                        <!-- MARGIN-BOTTOM (entre mapa y footer) -->
                        <div class="col-md-10 offset-md-1 my-sm-5">
                            <div class="container">
                                <div class="d-sm-block">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9561206291614!2d-58.3863360841747!3d-34.60527106508841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac59a3b5d8b%3A0x832e3cd0410cf49!2sCREA!5e0!3m2!1sen!2sar!4v1581427234587!5m2!1sen!2sar"
                                        width="100%" height="450" frameborder="0" style="border:0;"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>


        <div class="col-12 col-sm-12 order-sm-1">
            <section class="seccion-contacto border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 ">
                            <div class="row justify-content-right">
                                <div class="col-12 col-md-12  contact-form-contact-info">
                                    <h3 class="titulo-contacto">Contactate con nosotros</h3>
                                    <!-- col-12 en mobile lo ubica en el centro-->
                                    <div class="col-12 datos-contacto">
                                        <p class="">
                                            <!-- <span class="ion-ios-location icon mr-5"></span>  ICONO como fontawesome-->
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
                                            <span>info@crea.org.ar</span>
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
                        <div class="col-md-6 mb-5 d-none d-sm-block">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="name" class="sr-only">Nombre y Apellido</label>
                                        <input type="text" id="name" class="form-control"
                                            placeholder="Nombre y Apellido">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="phone" class="sr-only">Teléfono</label>
                                        <input type="text" id="phone" class="form-control" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="message" class="sr-only">Mensaje</label>
                                        <textarea name="message" id="message" class="form-control " cols="30" rows="8"
                                            placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3 form-group text-center">
                                        <input type="submit" value="Enviar" class="btn px-3 py-2 btn-contacto">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php get_footer(); ?>