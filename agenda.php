
<?php
/*
Template name: agenda
*/
?>

<?php get_header(); ?>



    <body>
        <div>
            <h2>Calendario Crea</h2>
            <iframe
                src="https://calendar.google.com/calendar/embed?src=gnp4oirdq97es7ibh252asalc0%40group.calendar.google.com&ctz=Europe%2FMadrid"
                style="border: 0" width="80%" height="700" frameborder="0" scrolling="no"></iframe>
        </div>
    </body>



    <!-- loader -->
    <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" />
        </svg>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/main.js"></script>

    <?php get_footer(); ?>

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


</body>

</html>