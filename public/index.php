<?php

chdir(dirname(__DIR__));

include('vendor/autoload.php');
include('src/bootstrap.php');

ob_start();
include('views/layout.php');
$output = ob_get_contents();
ob_end_clean();

echo $output;
// minified mini-calendar
// echo trim(preg_replace('/>\s+</', '><', $layout));
