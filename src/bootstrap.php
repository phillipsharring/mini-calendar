<?php

use MiniCal\Calendar;

date_default_timezone_set('Etc/UTC');

// deal with the request & set variables
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
} else {
    $year = date('Y', time());
    $month = date('n', time());
    $day = date('j', time());
}

$calendar = new Calendar($year, $month, $day);
$calendar->init();
