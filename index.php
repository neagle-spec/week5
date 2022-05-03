<?php

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();

// define a default root
$f3->route('GET /', function () {
    //echo '<h1>Diner Project</h1>';

    $view = new Template();
    echo $view->render('views/info.html');
});



// run fat free
$f3->run();
