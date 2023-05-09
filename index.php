<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance for f3 object
$f3 = Base::instance();

// Define a default route for home
$f3->route('GET /', function() {
    // Define a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
$f3 -> run();