    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    
    <script>
        var app = {
            settings: {
                container: $('.calendar'),
                calendar: $('.front'),
                days: $('.weeks span'),
                form: $('.back'),
                input: $('.back input'),
                buttons: $('.back button')
            },

            init: function () {
                instance = this;
                settings = this.settings;
                this.bindUIActions();
            },

            swap: function (currentSide, desiredSide) {
                settings.container.toggleClass('flip');

                currentSide.fadeOut(900);
                currentSide.hide();

                desiredSide.show();
            },

            bindUIActions: function () {
                settings.days.on('click', function () {
                    instance.swap(settings.calendar, settings.form);
                    settings.input.focus();
                });

                settings.buttons.on('click', function () {
                    instance.swap(settings.form, settings.calendar);
                });
            }
        }

        app.init();
    </script>
    <script>
        $(document).ready(function(){
            $("input[name=email-904]").val( $("#email-registro").val());
            $('body').on('wpcf7mailsent', function(){ 
                SPU.show( 143 ); 
                SPU.hide( 120 );
                SPU.track( 143, false ); 
            });
            if ( $( ".wpcf7-mail-sent-ok" ).length ) {
 
                $( "#myModal2" ).show();
                $('#myModal2').modal('show');

            }

        });
    </script>
    <script>
        // jQuery(".wpcf7-submit").click(function(event) {
        //     //IF THE SUBMIT IS PRESSED jQuery
        //     (document ).ajaxComplete(function() {
        //     //AJAX RESPONSES alert
        //     ( jQuery(".wpcf7-response-output").html()); 
        //     //ALERTS THE OUTPUT 
                
        //     }); });
        $('body').on('wpcf7mailsent', function(){ 
            SPU.show( 143 ); 
            SPU.hide( 120 );
            SPU.track( 143, false ); 
            console.log("prueba");
        });
    </script>
    <script>        
        $('.prueba-fede').on('blur', function() { 
                    if( $(this).val() == '' ){
                        $(this).addClass("is-invalid");
                        $(this).removeClass("valid");
                    }
                    else {
                        $(this).addClass("is-valid");
                        $(this).removeClass("is-invalid");

                    }
                    console.log("funca");
                 })
    </script>
    <script>
        // desactivar boton si inputs estan vacios
        $('.prueba-fede').keyup(function () {
            var vacio = false;
            $('.prueba-fede').each(function () {
                if ($(this).val() == '') {
                    vacio = true;
                }
            });

            if (vacio) {
                $('.btn-contacto').attr('disabled', true);
            } else {
                $('.btn-contacto').attr('disabled', false);
            }
        });
    </script>


</body>

</html>
