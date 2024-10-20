<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['routes'])) { // Added the closing parenthesis
    // include '/components/dashboard/route.php';
    echo 1;
}
elseif (isset($_GET['passengers'])) { // Added the closing parenthesis
    // include '/components/dashboard/passenger.php';
    echo 2;
}
else {
    // include '/components/dashboard/index.php';
    echo 3;
}
?>
