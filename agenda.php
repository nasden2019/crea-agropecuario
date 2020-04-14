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

    *,
::after,
::before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

html,
body {
    padding: 0;
    margin: 0;
}

body {
    font-family: 'Source Sans Pro';
}

input:focus,
textarea:focus,
button:focus {
    outline: none;
}

.evo-calendar {
    position: relative;
    background-color: #fbfbfb;
    color: #5a5a5a;
    width: 100%;
    box-shadow: 0 10px 50px -20px #8773c1;
    margin: 0 auto 50px auto;
    overflow: hidden;
    z-index: 1;
}

.calendar-sidebar {
    position: absolute;
    margin-top: 0;
    width: 200px;
    height: 100%;
    float: left;
    background-color: #8773c1;
    color: #fff;
    z-index: 1;
    box-shadow: 5px 0 18px -3px #8773c1;
    transition: all .3s ease;
    transform: translateX(0);
}

.sidebar-hide .calendar-sidebar {
    transform: translateX(-100%);
    box-shadow: none;
}

.calendar-sidebar>span#sidebarToggler {
    position: absolute;
    width: 70px;
    height: 70px;
    bottom: 0;
    right: 1px;
    transform: translate(100%, 0);
    background-color: #8773c1;
    padding: 10px;
    cursor: pointer;
    box-shadow: 5px 0 18px -3px #8773c1;
}

.calendar-sidebar>.calendar-year {
    padding: 20px;
    text-align: center;
}

.calendar-sidebar>.calendar-year>p {
    margin: 0;
    font-size: 30px;
    display: inline-block;
}

.calendar-sidebar>.calendar-year>button.icon-button {
    display: inline-block;
    width: 20px;
    height: 20px;
}

.calendar-sidebar>.calendar-year>button.icon-button>span {
    border-right: 4px solid #fff;
    border-bottom: 4px solid #fff;
    width: 100%;
    height: 100%;
}

.calendar-sidebar>.calendar-year>img[year-val="prev"] {
    float: left;
}

.calendar-sidebar>.calendar-year>img[year-val="next"] {
    float: right;
}

.calendar-sidebar>.calendar-months {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.calendar-sidebar>.calendar-months>li {
    padding: 7px 30px;
    cursor: pointer;
    font-size: 16px;
}

.calendar-sidebar>.calendar-months>li:hover {
    background-color: #a692e0;
}

.calendar-sidebar>.calendar-months>li.active-month {
    background-color: #755eb5;
}

.calendar-inner {
    padding: 50px 30px 70px 30px;
    float: left;
    width: calc(100% - 600px);
    margin-left: 200px;
    background-color: #fff;
    box-shadow: 5px 0 18px -3px rgba(0, 0, 0, 0.15);
    transition: all .3s ease;
}

.sidebar-hide .calendar-inner {
    width: calc(100% - 400px);
    margin-left: 0;
}

.event-hide .calendar-inner {
    width: calc(100% - 200px);
}

.event-hide.sidebar-hide .calendar-inner {
    width: 100%;
}

.calendar-inner .calendar-table {
    border-collapse: collapse;
    font-size: 20px;
    width: 100%;
    user-select: none;
}

th[colspan="7"] {
    text-align: center;
    text-transform: uppercase;
    font-weight: normal;
    font-size: 26px;
}

/* tr.calendar-header {} */

tr.calendar-header .calendar-header-day {
    padding: 10px;
    text-align: center;
}

/* tr.calendar-body {} */

tr.calendar-body .calendar-day {
    padding: 10px;
}

tr.calendar-body .calendar-day .day {
    position: relative;
    padding: 15px;
    height: 60px;
    width: 60px;
    margin: 0 auto;
    border-radius: 50%;
    text-align: center;
    border: 1px solid transparent;
    transition: all .3s ease, transform .5s ease;
    cursor: pointer;
}

tr.calendar-body .calendar-day .day:hover {
    background-color: #dadada;
}

tr.calendar-body .calendar-day .day:active {
    transform: scale(0.9);
}

tr.calendar-body .calendar-day .day.calendar-active,
tr.calendar-body .calendar-day .day.calendar-active:hover {
    color: #5a5a5a;
    border-color: rgba(0, 0, 0, 0.5);
}

tr.calendar-body .calendar-day .day.calendar-today {
    color: #fff;
    background-color: #8773c1;
}

tr.calendar-body .calendar-day .day.calendar-today:hover {
    color: #fff;
    background-color: #755eb5;
}

/* yellow
tr.calendar-body .calendar-day .day.calendar-today {
    color: #60afa1;
    background-color: #c3f2ea;
}
tr.calendar-body .calendar-day .day.calendar-today:hover {
    color: #fff;
    background-color: #60afa1;
}*/
/*tr.calendar-body .calendar-day .day.calendar-event {
    color: #e09d9d;
    background-color: #ffc1c1;
}
tr.calendar-body .calendar-day .day.calendar-event:hover{
    color: #fff;
    background-color: #e09d9d;
}*/
/*tr.calendar-body .calendar-day .day.calendar-holiday {
    color: #e8af00;
    background-color: #ffe6a4;
}
tr.calendar-body .calendar-day .day.calendar-holiday:hover{
    color: #fff;
    background-color: #e8af00;
}*/
tr.calendar-body .calendar-day .day[disabled] {
    pointer-events: none;
    cursor: not-allowed;
    background-color: transparent;
    color: #b9b9b9;
}


.calendar-events {
    position: absolute;
    top: 0;
    right: 0;
    width: 400px;
    height: 100%;
    padding: 70px 30px 60px 30px;
    background-color: #fbfbfb;
    transition: all .3s ease;
    overflow: auto;
    z-index: -1;
}

/* .calendar-events>.event-header {} */

.calendar-events>.event-header>p {
    font-size: 30px;
    font-weight: 600;
}

#eventListToggler {
    position: absolute;
    width: 70px;
    height: 70px;
    top: 0;
    right: 0;
    background-color: #8773c1;
    padding: 10px;
    cursor: pointer;
    box-shadow: 5px 0 18px -3px #8773c1;
}

#eventAddButton {
    position: absolute;
    bottom: 0;
    right: 0;
    background-color: #8773c1;
    padding: 10px;
    cursor: pointer;
    color: #fff;
    box-shadow: 5px 0 18px -3px #8773c1;
}

#eventAddButton>img {
    width: 40px;
}

.event-container {
    display: block;
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
    transition: all .3s ease;
    cursor: pointer;
    float: left;
}

.event-container:hover {
    background-color: #fff;
    box-shadow: 0 3px 12px -4px rgba(0, 0, 0, 0.65);
}

.event-container>.event-icon {
    position: relative;
    display: inline-block;
    padding: 20px;
    width: 60px;
    height: 60px;
    /*aca habia otro float: left;*/
}

.event-container>.event-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 29px;
    width: 2px;
    height: calc(100% + 10px);
    background-color: #eaeaea;
    z-index: -1;
}

.event-container:last-child>.event-icon::before {
    height: calc(50% + 10px);
}

.event-container:first-child>.event-icon::before {
    top: 50%;
    height: calc(50% + 10px);
}

.event-container:only-child>.event-icon::before {
    opacity: 0;
}

.event-container>.event-icon>img {
    width: 30px;
}

.event-container>.event-info {
    display: inline-block;
    padding: 10px;
}

.event-container>.event-info>p {
    margin: 0;
    font-size: 26px;
}


.event-indicator {
    position: absolute;
    width: fit-content;
    top: 100%;
    left: 50%;
    transform: translate(-50%, calc(-100% + -5px));
}

.event-indicator>.type-bullet {
    display: inline-block;
    /*aca habia un float: left */
    padding: 2px;
}

.event-indicator>.type-bullet>div.type-event,
.event-indicator>.type-bullet>div.type-holiday,
.event-indicator>.type-bullet>div.type-birthday {
    width: 10px;
    height: 10px;
    border-radius: 50%;
}

.event-container>.event-icon>div.event-bullet-event,
.event-container>.event-icon>div.event-bullet-holiday,
.event-container>.event-icon>div.event-bullet-birthday {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.event-container>.event-icon>div.event-bullet-event,
.event-indicator>.type-bullet>div.type-event {
    background-color: #ff7575;
}

.event-container>.event-icon>div.event-bullet-holiday,
.event-indicator>.type-bullet>div.type-holiday {
    background-color: #ffc107;
}

.event-container>.event-icon>div.event-bullet-birthday,
.event-indicator>.type-bullet>div.type-birthday {
    background-color: #3ca8ff;
}


button.icon-button {
    border: none;
    background-color: transparent;
    width: 100%;
    height: 100%;
    padding: 0;
    cursor: pointer;
}

button.icon-button>span.bars {
    position: relative;
    width: 100%;
    height: 6px;
    display: block;
    background-color: #fff;
}

button.icon-button>span.bars::before,
button.icon-button>span.bars::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 6px;
    display: block;
    background-color: #fff;
}

button.icon-button>span.bars::before {
    top: -12px;
}

button.icon-button>span.bars::after {
    bottom: -12px;
}

button.icon-button>span.chevron-arrow-left {
    display: inline-block;
    border-right: 6px solid #fff;
    border-bottom: 6px solid #fff;
    width: 33px;
    height: 33px;
    transform: rotate(-225deg);
}

button.icon-button>span.chevron-arrow-right {
    display: block;
    border-right: 6px solid #fff;
    border-bottom: 6px solid #fff;
    width: 33px;
    height: 33px;
    transform: rotate(-45deg);
}

/*tr.calendar-body .calendar-day .day.calendar-active {
    color: #7e57c2;
    background-color: #d5b2f6;
}
tr.calendar-body .calendar-day .day.calendar-active:hover {
    color: #fff;
    background-color: #7e57c2;
}
tr.calendar-body .calendar-day .day:hover,
tr.calendar-body .calendar-day .day.calendar-active {
    border-color: #5a5a5a;
}*/


/* 1024 */
@media only screen and (max-width: 1024px) {
    .calendar-sidebar {
        width: 175px;
    }

    .calendar-inner {
        padding: 50px 10px 70px 10px;
        width: calc(100% - 475px);
        margin-left: 175px;
    }

    .sidebar-hide .calendar-inner {
        width: calc(100% - 300px);
    }

    .event-hide .calendar-inner {
        width: calc(100% - 175px);
    }

    .calendar-events {
        width: 300px;
        padding: 70px 10px 60px 10px;
    }

    tr.calendar-body .calendar-day .day {
        padding: 8px;
        height: 45px;
        width: 45px;
        font-size: 16px;
    }

    .event-indicator>.type-bullet>div.type-event,
    .event-indicator>.type-bullet>div.type-holiday,
    .event-indicator>.type-bullet>div.type-birthday {
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }

    .calendar-sidebar>span#sidebarToggler,
    #eventListToggler {
        width: 50px;
        height: 50px;
    }

    button.icon-button>span.bars {
        height: 4px;
    }

    button.icon-button>span.bars::before,
    button.icon-button>span.bars::after {
        height: 4px;
    }

    button.icon-button>span.bars::before {
        top: -10px;
    }

    button.icon-button>span.bars::after {
        bottom: -10px;
    }

    button.icon-button>span.chevron-arrow-right {
        border-right-width: 4px;
        border-bottom-width: 4px;
        width: 22px;
        height: 22px;
    }
}

/* md */
@media only screen and (max-width: 991px) {
    .calendar-sidebar {
        width: 150px;
    }

    .calendar-inner {
        padding: 50px 10px 70px 10px;
        width: calc(100% - 425px);
        margin-left: 150px;
    }

    .sidebar-hide .calendar-inner {
        width: calc(100% - 275px);
    }

    .event-hide .calendar-inner {
        width: calc(100% - 150px);
    }

    .calendar-events {
        width: 275px;
        padding: 70px 10px 60px 10px;
    }
}

/* sm */
@media only screen and (max-width: 768px) {
    .calendar-sidebar {
        width: 130px;
    }

    .calendar-inner {
        padding: 50px 10px 70px 10px;
        width: calc(100% - 405px);
        margin-left: 130px;
    }

    .sidebar-hide .calendar-inner,
    .sidebar-hide .calendar-events {
        width: 100%;
    }

    .event-hide .calendar-inner {
        width: calc(100% - 130px);
    }

    .calendar-inner,
    .calendar-events {
        width: calc(100% - 130px);
    }

    .event-hide .calendar-inner {
        transform: translateX(-100%);
        box-shadow: none;
    }

    .calendar-sidebar>.calendar-year>button.icon-button {
        width: 16px;
        height: 16px;
    }

    .calendar-sidebar>.calendar-year>button.icon-button>span {
        border-right-width: 2px;
        border-bottom-width: 2px;
    }

    .calendar-sidebar>.calendar-year>p {
        font-size: 22px;
    }

    .calendar-sidebar>.calendar-months>li {
        padding: 7px 15px;
    }

    .calendar-events>.event-header>p {
        margin: 0;
    }
}

/* xs */
@media only screen and (max-width: 425px) {
    .calendar-sidebar {
        width: 200px;
    }

    .calendar-inner {
        width: 100%;
        margin-left: 0;
        padding: 50px 0 50px 0;
    }

    .sidebar-hide .calendar-inner,
    .event-hide .calendar-inner {
        width: 100%;
    }

    .calendar-inner,
    .calendar-events {
        width: 100%;
    }

    .event-hide .calendar-inner {
        transform: translateX(-100%);
        box-shadow: none;
    }

    tr.calendar-header .calendar-header-day {
        padding: 0;
    }

    tr.calendar-body .calendar-day {
        padding: 5px;
    }

    tr.calendar-body .calendar-day .day {
        padding: 6px;
        width: 40px;
        height: 40px;
        font-size: 20px;
    }

    .event-indicator {
        transform: translate(-50%, calc(-100% + -3px));
    }

    .event-indicator>.type-bullet {
        padding: 1px;
    }

    .event-indicator>.type-bullet>div.type-event,
    .event-indicator>.type-bullet>div.type-holiday,
    .event-indicator>.type-bullet>div.type-birthday {
        width: 6px;
        height: 6px;
    }

    tr.calendar-body .calendar-day .day.calendar-active,
    tr.calendar-body .calendar-day .day.calendar-active:hover {
        border: none;
    }

    .event-indicator {
        transform: translate(-50%, 0px);
    }
}

@media only screen and (max-width: 375px) {
    tr.calendar-header .calendar-header-day {
        font-size: 16px;
    }

    tr.calendar-body .calendar-day .day {
        width: 30px;
        height: 30px;
        font-size: 16px;
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
      
        (function (factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }

}(function ($) {
    'use strict';
    var EvoCalendar = window.EvoCalendar || {};

    EvoCalendar = (function () {
        function EvoCalendar(element, settings) {
            var _ = this,
                dataSettings;
            _.defaults = {
                format: 'mm/dd/yyyy',
                titleFormat: 'MM yyyy',
                eventHeaderFormat: 'MM d, yyyy',
                firstDayOfWeek: 'Sun',
                language: 'en',
                todayHighlight: false,
                sidebarDisplayDefault: true,
                sidebarToggler: true,
                eventListToggler: true,
                eventDisplayDefault: true,
                calendarEvents: null,
                disabledDate: null,
                canAddEvent: true,

                onSelectDate: null,
                onAddEvent: null
            };

            _.initials = {
                validParts: /dd?|DD?|mm?|MM?|yy(?:yy)?/g,
                dates: {
                    en: {
                        days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                        daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                        daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                        months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                    },
                    tl: {
                        days: ["Linggo", "Lunes", "Martes", "Miyerkules", "Huwebes", "Biyernes", "Sabado"],
                        daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                        daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                        months: ["Enero", "Pebrero", "Marso", "Abril", "Mayo", "Hunyo", "Hulyo", "Agosto", "Septyembre", "Oktubre", "Nobyembre", "Disyembre"],
                        monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                    }
                }
            }

            _.options = $.extend({}, _.defaults, settings);

            _.$parseFormat = function (format) {
                if (typeof format.toValue === 'function' && typeof format.toDisplay === 'function')
                    return format;
                // IE treats \0 as a string end in inputs (truncating the value),
                // so it's a bad format delimiter, anyway
                var separators = format.replace(_.initials.validParts, '\0').split('\0'),
                    parts = format.match(_.initials.validParts);
                if (!separators || !separators.length || !parts || parts.length === 0) {
                    throw new Error("Invalid date format.");
                }
                return {
                    separators: separators,
                    parts: parts
                };
            };

            _.$formatDate = function (date, format, language) {
                if (!date)
                    return '';
                if (typeof format === 'string')
                    format = _.$parseFormat(format);
                if (format.toDisplay)
                    return format.toDisplay(date, format, language);


                var val = {
                    d: new Date(date).getDate(),
                    D: _.initials.dates[language].daysShort[new Date(date).getDay()],
                    DD: _.initials.dates[language].days[new Date(date).getDay()],
                    m: new Date(date).getMonth() + 1,
                    M: _.initials.dates[language].monthsShort[new Date(date).getMonth()],
                    MM: _.initials.dates[language].months[new Date(date).getMonth()],
                    yy: new Date(date).getFullYear().toString().substring(2),
                    yyyy: new Date(date).getFullYear()
                };
                val.dd = (val.d < 10 ? '0' : '') + val.d;
                val.mm = (val.m < 10 ? '0' : '') + val.m;
                date = [];
                var seps = $.extend([], format.separators);
                for (var i = 0, cnt = format.parts.length; i <= cnt; i++) {
                    if (seps.length)
                        date.push(seps.shift());
                    date.push(val[format.parts[i]]);
                }
                return date.join('');
            };

            if (_.options.calendarEvents != null) {
                for (var i = 0; i < _.options.calendarEvents.length; i++) {
                    if (_.isValidDate(_.options.calendarEvents[i].date)) {
                        _.options.calendarEvents[i].date = _.$formatDate(new Date(_.options.calendarEvents[i].date), _.options.format, 'en')
                    }
                }
            }

            if (_.options.disabledDate != null) {
                for (var i = 0; i < _.options.disabledDate.length; i++) {
                    if (_.isValidDate(_.options.disabledDate[i])) {
                        _.options.disabledDate[i] = _.$formatDate(new Date(_.options.disabledDate[i]), _.options.format, 'en')
                    }
                }
            }

            _.$cal_days_labels = [];
            // _.$cal_days_labels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            // these are human-readable month name labels, in order
            _.$cal_months_labels = ['January', 'February', 'March', 'April',
                'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ];

            // these are the days of the week for each month, in order
            _.$cal_days_in_month = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

            // this is the current date
            _.$cal_current_date = new Date();

            _.$month = (isNaN(_.$month) || _.$month == null) ? _.$cal_current_date.getMonth() : _.$month; // 0
            _.$year = (isNaN(_.$year) || _.$year == null) ? _.$cal_current_date.getFullYear() : _.$year; // 2020
            _.$mainHTML = '';
            _.$sidebarHTML = '';
            _.$calendarHTML = '';
            _.$eventHTML = '';

            _.$active_day_el = null;
            _.$active_date = _.$formatDate(new Date(), _.options.format, 'en');
            _.$active_month_el = null;
            _.$active_month = _.$month;
            _.$active_year_el = null;
            _.$active_year = _.$year;

            _.$calendar = $(element);
            _.$calendar_sidebar = '';
            _.$calendar_inner = '';
            _.$calendar_events = '';

            _.selectDate = $.proxy(_.selectDate, _);
            _.selectMonth = $.proxy(_.selectMonth, _);
            _.selectYear = $.proxy(_.selectYear, _);
            _.toggleSidebar = $.proxy(_.toggleSidebar, _);
            _.toggleEventList = $.proxy(_.toggleEventList, _);


            _.init(true);
        }

        return EvoCalendar;

    }());


    EvoCalendar.prototype.init = function (creation) {

        var _ = this;

        if (!$(_.$calendar).hasClass('calendar-initialized')) {

            $(_.$calendar).addClass('evo-calendar calendar-initialized');

            if (!_.options.sidebarDisplayDefault) $(_.$calendar).addClass('sidebar-hide');

            if (!_.options.eventDisplayDefault) $(_.$calendar).addClass('event-hide');

            _.buildCalendar('all');
        }
    };

    EvoCalendar.prototype.buildCalendar = function (val, new_month, new_year) {
        var _ = this;

        // get first day of month
        new_month = (isNaN(new_month) || new_month == null) ? _.$active_month : new_month;
        new_year = (isNaN(new_year) || new_year == null) ? _.$active_year : new_year;

        // find number of days in month
        var monthLength = _.$cal_days_in_month[new_month];

        // compensate for leap year
        if (new_month == 1) { // February only!
            if ((new_year % 4 == 0 && new_year % 100 != 0) || new_year % 400 == 0) {
                monthLength = 29;
            }
        }

        var nameDays = _.initials.dates[_.options.language].daysShort;
        var firstDayOfWeekName = _.initials.dates[_.options.language].daysShort.map(function (obj) {
            return obj
        }).indexOf(_.options.firstDayOfWeek);

        while (_.$cal_days_labels.length < nameDays.length) {
            if (firstDayOfWeekName == nameDays.length) {
                firstDayOfWeekName = 0;
            }
            _.$cal_days_labels.push(nameDays[firstDayOfWeekName]);
            firstDayOfWeekName++;
        }

        var firstDay = new Date(new_year, new_month).getDay() - firstDayOfWeekName;
        var startingDay = firstDay < 0 ? (_.$cal_days_labels.length + firstDay) : firstDay;

        // do the header

        var monthName = _.$cal_months_labels[new_month];

        var mainHTML = '';
        var sidebarHTML = '';
        var calendarHTML = '';



        function buildMainHTML() {
            var mainHTML = '<div class="calendar-sidebar"></div><div class="calendar-inner"></div><div class="calendar-events"></div>';
            if (_.options.canAddEvent) {
                mainHTML += '<span id="eventAddButton" title="Add event">ADD EVENT</span>';
            }
            if (_.options.eventListToggler) {
                mainHTML += '<span id="eventListToggler" title="Close event list"><button class="icon-button"><span class="chevron-arrow-right"></span></button></span>';
            }
            _.$mainHTML = mainHTML;
        }

        function buildSidebarHTML() {
            sidebarHTML = '<div class="calendar-year"><button class="icon-button" year-val="prev" title="Previous year"><span class="chevron-arrow-left"></span></button>&nbsp;<p>' + new_year + '&nbsp;</p><button class="icon-button" year-val="next" title="Next year"><span class="chevron-arrow-right"></span></button></div>';
            sidebarHTML += '<ul class="calendar-months">';
            for (var i = 0; i < _.$cal_months_labels.length; i++) {
                sidebarHTML += '<li class="month';
                sidebarHTML += (parseInt(_.$active_month) === i) ? ' active-month' : ''
                sidebarHTML += '" month-val="' + i + '">' + _.$cal_months_labels[i] + '</li>';
            }
            sidebarHTML += '</ul>';
            if (_.options.sidebarToggler) {
                sidebarHTML += '<span id="sidebarToggler" title="Close sidebar"><button class="icon-button"><span class="bars"></span></button></span>';
            }
            _.$sidebarHTML = sidebarHTML;
        }

        function buildCalendarHTML() {
            calendarHTML = '<table class="calendar-table">';
            calendarHTML += '<tr><th colspan="7">';
            calendarHTML += _.$formatDate(new Date(monthName + ' ' + new_year), _.options.titleFormat, 'en');
            calendarHTML += '</th></tr>';
            calendarHTML += '<tr class="calendar-header">';
            for (var i = 0; i <= 6; i++) {
                calendarHTML += '<td class="calendar-header-day">';
                calendarHTML += _.$cal_days_labels[i];
                calendarHTML += '</td>';
            }
            calendarHTML += '</tr><tr class="calendar-body">';
            // fill in the days
            var day = 1;
            // this loop is for is weeks (rows)
            for (var i = 0; i < 9; i++) {
                // this loop is for weekdays (cells)
                for (var j = 0; j <= 6; j++) {
                    calendarHTML += '<td class="calendar-day">';
                    if (day <= monthLength && (i > 0 || j >= startingDay)) {
                        var thisDay = _.$formatDate(new Date(monthName + '/' + day + '/' + new_year), _.options.format, 'en');
                        calendarHTML += '<div class="day'
                        calendarHTML += ((_.$active_date === thisDay) ? ' calendar-active' : '') + '" date-val="' + thisDay + '">' + day + '</div>';
                        day++;
                    }
                    calendarHTML += '</td>';
                }
                // stop making rows if we've run out of days
                if (day > monthLength) {
                    break;
                } else {
                    calendarHTML += '</tr><tr class="calendar-body">';
                }
            }
            calendarHTML += '</tr></table>';
            _.$calendarHTML = calendarHTML;
        }

        function buildEventListHTML() {
            if (_.options.calendarEvents != null) {
                var eventHTML = '<div class="event-header"><p>' + _.$formatDate(new Date(_.$active_date), _.options.eventHeaderFormat, 'en') + '</p></div>';
                var hasEventToday = false;
                eventHTML += '<div>';
                for (var i = 0; i < _.options.calendarEvents.length; i++) {
                    if (_.$active_date === _.options.calendarEvents[i].date) {
                        hasEventToday = true;
                        eventHTML += '<div class="event-container">';
                        eventHTML += '<div class="event-icon"><div class="event-bullet-' + _.options.calendarEvents[i].type + '"></div></div>';
                        eventHTML += '<div class="event-info"><p>' + _.options.calendarEvents[i].name + '</p></div>';
                        eventHTML += '</div>';
                    } else if (_.options.calendarEvents[i].everyYear) {
                        var d = _.$formatDate(new Date(_.$active_date), 'mm/dd', 'en');
                        var dd = _.$formatDate(new Date(_.options.calendarEvents[i].date), 'mm/dd', 'en');
                        if (d == dd) {
                            hasEventToday = true;
                            eventHTML += '<div class="event-container">';
                            eventHTML += '<div class="event-icon"><div class="event-bullet-' + _.options.calendarEvents[i].type + '"></div></div>';
                            eventHTML += '<div class="event-info"><p>' + _.options.calendarEvents[i].name + '</p></div>';
                            eventHTML += '</div>';
                        }
                    }
                };
                if (!hasEventToday) {
                    eventHTML += '<p>No event for this day.. so take a rest! :)</p>';
                }
                eventHTML += '</div>';
                _.$eventHTML = eventHTML;
            }
        }

        if (val == 'all') {
            buildMainHTML();
            buildSidebarHTML();
            buildCalendarHTML();
            buildEventListHTML();
        } else if (val == 'sidebar') {
            buildSidebarHTML();
        } else if (val == 'inner') {
            // console.log('buildCalendar---inner', _.options.calendarEvents);
            buildCalendarHTML();
        } else if (val == 'events') {
            buildEventListHTML();
        }

        _.setHTML(val);
    };

    // Set the HTML to element
    EvoCalendar.prototype.setHTML = function (val) {
        var _ = this;

        if (val == 'all') {
            _.$calendar.html(_.$mainHTML);
            _.$calendar_sidebar = $('.calendar-sidebar');
            _.$calendar_inner = $('.calendar-inner');
            _.$calendar_events = $('.calendar-events');

            _.$calendar_sidebar.html(_.$sidebarHTML);
            _.$calendar_inner.html(_.$calendarHTML);
            _.$calendar_events.html(_.$eventHTML);
        } else if (val == 'sidebar') {
            _.$calendar_sidebar = $('.calendar-sidebar');
            _.$calendar_sidebar.html(_.$sidebarHTML);
        } else if (val == 'inner') {
            _.$calendar_inner = $('.calendar-inner');
            _.$calendar_inner.html(_.$calendarHTML);
        } else if (val == 'events') {
            _.$calendar_events = $('.calendar-events');
            _.$calendar_events.html(_.$eventHTML);
        }

        if (_.options.calendarEvents != null) {
            _.initCalendarEvents();
        }

        if (_.options.todayHighlight) {
            $('.day[date-val="' + _.$formatDate(_.$cal_months_labels[_.$month] + '/' + _.$cal_current_date.getDate() + '/' + _.$year, _.options.format, 'en') + '"]').addClass('calendar-today');
        }

        _.initEventListener();
    };

    // Add calendar events
    EvoCalendar.prototype.initCalendarEvents = function () {
        var _ = this;
        // prevent duplication
        $('.event-indicator').empty();
        // find number of days in month
        var monthLength = _.$cal_days_in_month[_.$active_month];

        // compensate for leap year
        if (_.$active_month == 1) { // February only!
            if ((_.$active_year % 4 == 0 && _.$active_year % 100 != 0) || _.$active_year % 400 == 0) {
                monthLength = 29;
            }
        }

        for (var i = 0; i < _.options.calendarEvents.length; i++) {
            for (var x = 0; x < monthLength; x++) {
                var active_date = _.$formatDate(new Date(_.$cal_months_labels[_.$active_month] + '/' + (x + 1) + '/' + _.$active_year), _.options.format, 'en');
                // console.log(active_date, _.$formatDate(new Date(_.options.calendarEvents[i].date), _.options.format, 'en'))

                var thisDate = $('[date-val="' + active_date + '"]');
                if (active_date == _.options.calendarEvents[i].date) {
                    thisDate.addClass('calendar-' + _.options.calendarEvents[i].type);

                    if ($('[date-val="' + active_date + '"] span.event-indicator').length == 0) {
                        thisDate.append('<span class="event-indicator"></span>');
                    }

                    if ($('[date-val="' + active_date + '"] span.event-indicator > .type-bullet > .type-' + _.options.calendarEvents[i].type).length == 0) {
                        var htmlToAppend = '<div class="type-bullet"><div class="type-' + _.options.calendarEvents[i].type + '"></div></div>';
                        thisDate.find('.event-indicator').append(htmlToAppend);
                    }
                } else if (_.options.calendarEvents[i].everyYear) {
                    var d = _.$formatDate(new Date(active_date), 'mm/dd', 'en');
                    var dd = _.$formatDate(new Date(_.options.calendarEvents[i].date), 'mm/dd', 'en');
                    if (d == dd) {
                        thisDate.addClass('calendar-' + _.options.calendarEvents[i].type);

                        if ($('[date-val="' + active_date + '"] span.event-indicator').length == 0) {
                            thisDate.append('<span class="event-indicator"></span>');
                        }

                        if ($('[date-val="' + active_date + '"] span.event-indicator > .type-bullet > .type-' + _.options.calendarEvents[i].type).length == 0) {
                            var htmlToAppend = '<div class="type-bullet"><div class="type-' + _.options.calendarEvents[i].type + '"></div></div>';
                            thisDate.find('.event-indicator').append(htmlToAppend);
                        }
                    }
                }
            }
        };
    };

    // Add listeners
    EvoCalendar.prototype.initEventListener = function () {
        var _ = this;

        if (_.options.sidebarToggler) {
            $('#sidebarToggler')
                .off('click.evocalendar')
                .on('click.evocalendar', _.toggleSidebar);
        }
        if (_.options.eventListToggler) {
            $('#eventListToggler')
                .off('click.evocalendar')
                .on('click.evocalendar', _.toggleEventList);
        }
        if (_.options.canAddEvent) {
            $('#eventAddButton')
                .off('click.evocalendar')
                .on('click.evocalendar', _.options.onAddEvent);
        }


        $('[date-val]')
            .off('click.evocalendar')
            .on('click.evocalendar', _.selectDate)
            .on('click.evocalendar', _.options.onSelectDate);

        // set event listener for each month
        $('[month-val]')
            .off('click.evocalendar')
            .on('click.evocalendar', _.selectMonth);

        // set event listener for year
        $('[year-val]')
            .off('click.evocalendar')
            .on('click.evocalendar', _.selectYear);

    };

    // select year
    EvoCalendar.prototype.selectYear = function (event) {
        var _ = this;

        _.$active_year_el = $(event.currentTarget);

        if ($(event.currentTarget).attr("year-val") == "prev") {
            --_.$active_year;
        } else if ($(event.currentTarget).attr("year-val") == "next") {
            ++_.$active_year;
        } else {

        }

        $('[year-val]').removeClass('active-year');
        $(_.$active_year_el).addClass('active-year');

        $('.calendar-year p').text(_.$active_year);
        _.buildCalendar('inner', null, _.$active_year);
    };

    // select month
    EvoCalendar.prototype.selectMonth = function (event) {
        var _ = this;

        _.$active_month = $(event.currentTarget).attr("month-val");
        _.$active_month_el = $("li[month-val=" + _.$active_month + "]");
        $(_.$active_month_el).addClass('active-month');

        $('[month-val]').removeClass('active-month');
        $('[month-val=' + _.$active_month + ']').addClass('active-month');
        _.buildCalendar('inner', _.$active_month);
    };

    // select specific date
    EvoCalendar.prototype.selectDate = function (event) {
        var _ = this;

        _.$active_day_el = $(event.currentTarget);
        _.$active_date = _.$active_day_el.attr("date-val");
        $('.day').removeClass('calendar-active');
        $(_.$active_day_el).addClass('calendar-active');
        _.buildCalendar('events');
    };

    // toggle sidebar
    EvoCalendar.prototype.toggleSidebar = function (event) {
        var _ = this;

        if ($(_.$calendar).hasClass('sidebar-hide')) {
            $(_.$calendar).removeClass('sidebar-hide');
        } else {
            $(_.$calendar).addClass('sidebar-hide');
        }
    };

    // toggle event list
    EvoCalendar.prototype.toggleEventList = function (event) {
        var _ = this;

        if ($(_.$calendar).hasClass('event-hide')) {
            $(_.$calendar).removeClass('event-hide');
        } else {
            $(_.$calendar).addClass('event-hide');
        }
    };

    // add calendar event(s)
    EvoCalendar.prototype.addCalendarEvent = function (new_data) {
        var _ = this;
        var data = new_data;
        for (var i = 0; i < data.length; i++) {
            if (_.isValidDate(data[i].date)) {
                data[i].date = _.$formatDate(new Date(data[i].date), _.options.format, 'en');
                _.options.calendarEvents.push(data[i]);
            }
        }
        _.buildCalendar('inner');
        _.buildCalendar('events');
    };

    // remove calendar event
    EvoCalendar.prototype.removeCalendarEvent = function (new_data) {
        var _ = this;
        // code here...
    };

    EvoCalendar.prototype.isValidDate = function (d) {
        return new Date(d) && !isNaN(new Date(d).getTime());
    }

    $.fn.evoCalendar = function () {
        var _ = this,
            opt = arguments[0],
            args = Array.prototype.slice.call(arguments, 1),
            l = _.length,
            i,
            ret;
        for (i = 0; i < l; i++) {
            if (typeof opt == 'object' || typeof opt == 'undefined')
                _[i].evoCalendar = new EvoCalendar(_[i], opt);
            else
                ret = _[i].evoCalendar[opt].apply(_[i].evoCalendar, args);
            if (typeof ret != 'undefined') return ret;
        }
        return _;
    };

}));
    </script>

<?php get_footer(); ?>