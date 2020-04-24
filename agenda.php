
<?php
/*
Template name: agenda
*/
?>

<?php get_header(); ?>


   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-10 my-5 text-center"> 
                       <h2>Calendario Crea</h2>
                       <iframe
                           src="https://calendar.google.com/calendar/embed?src=gnp4oirdq97es7ibh252asalc0%40group.calendar.google.com&ctz=Europe%2FMadrid"
                           style="border: 0" width="80%" height="700" frameborder="0" scrolling="no"></iframe>
                   </div>
                   <div class="col-md-1 my-5 text-center my-auto">
                        <button class="btn botones" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@getbootstrap">Asignar<br> Evento</button>
                    </div>
                    <!-- <button type="button" class="btn px-3 py-2 btn-contacto ml-3" data-toggle="modal"
                    data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-left: auto;">
                    Inscribirme
                  </button> -->

                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                        ledby="exampleModalLabel " aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel ">
                                        EVENTOS CREA
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label ml-md-3 ml-2">Agregar
                                                Titulo</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label ml-md-3 ml-2">Fecha</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label ml-md-3 ml-2">Hora</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label ml-md-3 ml-2">Link</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label ml-md-3 ml-2">Institución</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-cerrar" data-dismiss="modal">
                                        Cerrar
                                    </button>
                                    <button type="button" class="btn btn-contacto">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 



   
     <!-- <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" />
        </svg>
    </div>  -->

   

<?php get_footer('agenda'); ?>
    

