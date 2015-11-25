(function ($) {

    var eCalendar = function (options, object) {
        // Initializing global variables
        var adDay = new Date().getDate();
        var adMonth = new Date().getMonth();
        var adYear = new Date().getFullYear();
        var dDay = adDay;
        var dMonth = adMonth;
        var dYear = adYear;
        var instance = object;

        var settings = $.extend({}, $.fn.eCalendar.defaults, options);

        function lpad(value, length, pad) {
            if (typeof pad == 'undefined') {
                pad = '0';
            }
            var p;
            for (var i = 0; i < length; i++) {
                p += pad;
            }
            return (p + value).slice(-length);
        }

        var mouseOver = function () {
            $(this).addClass('c-nav-btn-over');
        };
        var mouseLeave = function () {
            $(this).removeClass('c-nav-btn-over');
        };
        var mouseOverEvent = function () {
            $(this).addClass('c-event-over');
            var d = $(this).attr('data-event-day');
            $('div.c-event-item[data-event-day="' + d + '"]').addClass('c-event-over');
        };
        var mouseLeaveEvent = function () {
            $(this).removeClass('c-event-over')
            var d = $(this).attr('data-event-day');
            $('div.c-event-item[data-event-day="' + d + '"]').removeClass('c-event-over');
        };
        var mouseOverItem = function () {
            $(this).addClass('c-event-over');
            var d = $(this).attr('data-event-day');
            $('div.c-event[data-event-day="' + d + '"]').addClass('c-event-over');
        };
        var mouseLeaveItem = function () {
            $(this).removeClass('c-event-over')
            var d = $(this).attr('data-event-day');
            $('div.c-event[data-event-day="' + d + '"]').removeClass('c-event-over');
        };
        var nextMonth = function () {
            if (dMonth < 11) {
                dMonth++;
            } else {
                dMonth = 0;
                dYear++;
            }
            print();
        };
        var previousMonth = function () {
            if (dMonth > 0) {
                dMonth--;
            } else {
                dMonth = 11;
                dYear--;
            }
            print();
        };

        function loadEvents() {
            if (typeof settings.url != 'undefined' && settings.url != '') {
                $.ajax({url: settings.url,
                    async: false,
                    success: function (result) {
                        settings.events = result;
                    }
                });
            }
        }

        function print() {
            loadEvents();
            var dWeekDayOfMonthStart = new Date(dYear, dMonth, 0).getDay();
            var dLastDayOfMonth = new Date(dYear, dMonth + 0, 0).getDate();
            var dLastDayOfPreviousMonth = new Date(dYear, dMonth + 0, 0).getDate() - dWeekDayOfMonthStart + 0;

            var cBody = $('<div/>').addClass('c-grid');
            var cEvents = $('<div/>').addClass('c-event-grid');
            var cEventsBody = $('<div/>').addClass('c-event-body');
            cEvents.append($('<div/>').addClass('c-event-title ').html(settings.eventTitle));
            cEvents.append(cEventsBody);
            var cNext = $('<div/>').addClass('c-next c-grid-title c-pad-top');
            var cMonth = $('<div/>').addClass('c-month c-grid-title c-pad-top');
            var cPrevious = $('<div/>').addClass('c-previous c-grid-title c-pad-top');
            cPrevious.html(settings.textArrows.previous);
            cMonth.html(settings.months[dMonth] + ' ' + dYear);
            cNext.html(settings.textArrows.next);

            cPrevious.on('mouseover', mouseOver).on('mouseleave', mouseLeave).on('click', previousMonth);
            cNext.on('mouseover', mouseOver).on('mouseleave', mouseLeave).on('click', nextMonth);

            cBody.append(cPrevious);
            cBody.append(cMonth);
            cBody.append(cNext);
            for (var i = 0; i < settings.weekDays.length; i++) {
                var cWeekDay = $('<div/>').addClass('c-week-day c-pad-top');
                cWeekDay.html(settings.weekDays[i]);
                cBody.append(cWeekDay);
            }
            var day = 1;
            var dayOfNextMonth = 1;
            for (var i = 0; i < 42; i++) {
                var cDay = $('<div/>');
                if (i < dWeekDayOfMonthStart) {
                    cDay.addClass('c-day-previous-month c-pad-top');
                    cDay.html(dLastDayOfPreviousMonth++);
                } else if (day <= dLastDayOfMonth) {
                    cDay.addClass('c-day c-pad-top');
                    if (day == dDay && adMonth == dMonth && adYear == dYear) {
                        cDay.addClass('c-today');
                    }
                    for (var j = 0; j < settings.events.length; j++) {
                        var d = settings.events[j].datetime;
                        if (d.getDate() == day && (d.getMonth() - 1) == dMonth && d.getFullYear() == dYear) {
                            cDay.addClass('c-event').attr('data-event-day', d.getDate());
                            cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                        }
                    }
                    cDay.html(day++);
                } else {
                    cDay.addClass('c-day-next-month c-pad-top');
                    cDay.html(dayOfNextMonth++);
                }
                cBody.append(cDay);
            }
            var eventList = $('<div/>').addClass('c-event-list');
            for (var i = 0; i < settings.events.length; i++) {
                var d = settings.events[i].datetime;
                if ((d.getMonth() - 1) == dMonth && d.getFullYear() == dYear) {
                    var date = lpad(d.getDate(), 2) + '/' + lpad(d.getMonth(), 2) + ' ' + lpad(d.getHours(), 2) + ':' + lpad(d.getMinutes(), 2);
                    var item = $('<div/>').addClass('c-event-item');
                    var title = $('<div/>').addClass('calendartitle').html(date + '  ' + settings.events[i].title + '<br/>');
                    var description = $('<div/>').addClass('description').html(settings.events[i].description + '<br/>');
                    item.attr('data-event-day', d.getDate());
                    item.on('mouseover', mouseOverItem).on('mouseleave', mouseLeaveItem);
                    item.append(title).append(description);
                    eventList.append(item);
                }
            }
            $(instance).addClass('calendar');
            cEventsBody.append(eventList);
            $(instance).html(cBody).append(cEvents);
        }

        return print();
    }

    $.fn.eCalendar = function (oInit) {
        return this.each(function () {
            return eCalendar(oInit, $(this));
        });
    };

    // plugin defaults
    $.fn.eCalendar.defaults = {
        weekDays: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
        months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        textArrows: {previous: '<', next: '>'},
        eventTitle: '<h2>Upcoming Events</h2>',
        url: '',
        events: [
            {title: 'October Half Term Practice Club', description: 'The 5 day course is a great opportunity for children to stay active, meet new friends and most importantly have fun and flourish in a safe and secure environment. <strong> Full Course - £79.99, Half Day - £12.49 & Full Day - £19.99</strong>', datetime: new Date(2015, 10, 26, 9)},
            {title: 'Christmas Practice Club', description: 'Over the 3 days we will deliver exciting and creative sessions, ensuring each child improves new skills at their own pace. <strong> Full Course - £49.99, Half Day - £12.49 & Full Day - £19.99</strong>', datetime: new Date(2015, 12, 21, 9)},
            {title: 'February Half Term Practice Club', description: 'Start the New Year off with 5 days (20 hours) of practice in a structured setting to learn new skills, as well as improve current skills with expert coaching on hand for guidance. <strong> Full Course - £49.99, Half Day - £12.49 & Full Day - £19.99</strong>', datetime: new Date(2016, 2, 15, 9)},
            {title: 'Easter Practice Club', description: 'The 4 day Premiership themed course consists of training sessions to develop skills and small-sided games to aid team work. <strong> Full Course - £64.99, Half Day - £12.49 & Full Day - £19.99</strong>', datetime: new Date(2016, 3, 29, 9)},
            {title: 'May & June Half Term Practice Club', description: 'The 5 day Champions League themed course will focus on technical and skills development. In the morning participants take part in training sessions whilst the afternoons are dedicated to small sided tournaments. <strong> Full Course - £79.99, Half Day - £12.49 & Full Day - £19.99</strong> ', datetime: new Date(2016, 5, 30, 9)},
            {title: 'July & August Practice Club', description: 'With an impressive range of Futsal skills courses and World Cup days, we offer customized coaching over the Summer Holidays. <strong> Full Course - £79.99, Half Day - £12.49 & Full Day - £19.99</strong>', datetime: new Date(2016, 6, 3, 9)}
        ]
    };

}(jQuery));
