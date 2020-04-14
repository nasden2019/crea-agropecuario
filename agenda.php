<?php
/*
Template name: agenda
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="agenda.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<style>
    main {
        padding: 20px;
        max-width: 1366px;
        width: 100%;
        margin: 0 auto;
    }

    h1 {
        color: #755eb5;
    }

    h1 span {
        color: #616161;
    }

    hr {
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 425px) {
        main {
            padding: 10px;
        }
    }
</style>

<body>
    <main>
        <h1>Calendario Crea</h1>
        <hr />
        <div id="evoCalendar"></div>
    </main>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous">
    </script>
    <script src="agenda.js"></script>
    <script>
        $('#evoCalendar').evoCalendar({
            todayHighlight: true,
            sidebarToggler: true,
            eventListToggler: true,
            eventDisplayDefault: false,
            canAddEvent: true,
            calendarEvents: [{
                    name: "New Year",
                    date: "Wed Jan 01 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                    type: "holiday",
                    everyYear: true
                },
                {
                    name: "Valentine's Day",
                    date: "Fri Feb 14 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                    type: "holiday",
                    everyYear: true
                },
                {
                    name: "Patient #1",
                    date: "February/3/2020",
                    type: "event"
                },
                {
                    name: "Patient #3",
                    date: "February/3/2020",
                    type: "event"
                },
                {
                    name: "Patient #4",
                    date: "February/3/2020",
                    type: "event"
                },
                {
                    name: "Holiday #3",
                    date: "February/3/2020",
                    type: "holiday"
                },
                {
                    name: "Birthday #2",
                    date: "February/3/2020",
                    type: "birthday"
                },
                {
                    name: "Author's Birthday",
                    date: "February/15/2020",
                    type: "birthday",
                    everyYear: true
                },
                {
                    name: "Holiday #4",
                    date: "February/15/2020",
                    type: "event"
                },
                {
                    name: "Patient #2",
                    date: "February/8/2020",
                    type: "event"
                },
                {
                    name: "Leap day",
                    date: "February/29/2020",
                    type: "holiday",
                    everyYear: true
                }
            ],
            // disabledDate: ["02/17/2020", "02/21/2020"],
            onSelectDate: function () {
                console.log('onSelectDate!')
            },
            onAddEvent: function () {
                console.log('onAddEvent!')
            }
        });
        // $("#evoCalendar").evoCalendar('addCalendarEvent', [...];
    </script>

<?php get_footer(); ?>