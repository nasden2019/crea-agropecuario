<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/main.js"></script>

    
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
        });
    </script>
    <script>
        jQuery(".wpcf7-submit").click(function(event) {
            //IF THE SUBMIT IS PRESSED jQuery
            (document ).ajaxComplete(function() {
            //AJAX RESPONSES alert
            ( jQuery(".wpcf7-response-output").html()); 
            //ALERTS THE OUTPUT 
                $('.prueba-fede').on('blur', function() { 
                    if( $(this).val() == '' ){
                        $(this).addClass("is-invalid");
                    }
                    console.log("funca");
                 })
            }); });
    </script>


</body>

</html>
