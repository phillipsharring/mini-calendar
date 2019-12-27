(function() {
    function daysInAMonth(month, year) {
        var days = 31;

        if (-1 < [4, 6, 9, 11].indexOf(month)) {
            days = 30;
        } else if (2 === month && !isLeapYear(year)) {
            days = 28;
        } else if (2 === month && isLeapYear(year)) {
            days = 29;
        }

        return days;
    }

    function isLeapYear(year) {
        return (
            ((0 === year % 4) && (0 !== year % 100))
            || (0 === year % 400)
        );
    }

    var year = document.getElementById('year');
    var month = document.getElementById('month');
    var day = document.getElementById('day');

    function setDays() {
        var selectedYear = parseInt(year.value);
        var selectedMonth = parseInt(month.options[month.selectedIndex].value);

        var days = daysInAMonth(selectedMonth, selectedYear);

        console.log(days);
        console.log(day.options.length);

        if (days > day.options.length) {
            console.log('add days');
            for (var i = day.options.length + 1; i <= days; i++) {
                var option = document.createElement('option');
                option.value = option.text = i;
                day.appendChild(option);
            }
        } else if (days < day.options.length) {
            console.log('subtract days');
            for (var i = day.options.length - 1; i >= days; i--) {
                if (day.selectedIndex === i) {
                    day.selectedIndex = i - 1;
                }
                day.remove(i);
            }
            console.log(day.selectedIndex);
        } else {
            console.log('do nothing');
        }

        if (day.selectedIndex > day.options.length - 1) {
            day.selectedIndex = day.options.length - 1;
        }
    }

    year.addEventListener('change', setDays);
    month.addEventListener('change', setDays);

    setDays();
})();