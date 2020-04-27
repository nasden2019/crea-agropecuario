
        <div class="container">
            <button class="comentar my-md-5 btn btn-contacto">Dejar<br>comentario</button>
            <div class="row">
                <div class="col-md-12 order-2">
                    <form action="#" method="post" class="formulario">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" class="form-control" />
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="phone">Teléfono</label>
                                <input type="text" id="tel" class="form-control" />
                            </div>
                            <div class="col-md-2 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" />
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="message">Comentarios</label>
                                <textarea name="message" id="mensaje" class="form-control" cols="14" rows="3"
                                    maxLength="140"></textarea>
                                Quedan <span id="numeros">140</span> caracteres
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="submit" value="Enviar" class="boton btn btn-contacto px-3" />
                            </div>
                        </div>

                        <!-- feedback usuario-->
                        <span class="saludo"></span>
                        <div class="row my-4">
                            <div class="col-md-2 form-group">
                                <span class="span1"></span>
                            </div>
                            <div class="col-md-2 form-group">
                                <span class="span2"></span>
                            </div>
                            <div class="col-md-2 form-group">
                                <span class="span3"></span>
                            </div>

                            <div class="col-md-6 form-group">
                                <span class="span4"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>