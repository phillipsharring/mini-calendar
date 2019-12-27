<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>mini-calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body { text-align: center; }
        table { width: 40px; height: 50px; border: 1px solid gray; border-collapse: collapse; margin: 15px auto 0; }
        td { border: 1px solid gray; }
        .weekend { background-color: lightgray; }
        .selected-day { background-color: orangered !important; }
        .out-of-month { background-color: gray !important; }
    </style>
</head>
<body>
<?php
include('views/form.php');
include('views/calendar.php');
?>
<script type="text/javascript" src="./js/mini-calendar.js"></script>
</body>
</html>
