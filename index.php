<?php
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start a session
session_start();

// require autoload file
require_once('vendor/autoload.php');

// instantiate F3 base class
$f3 = Base::instance();

// define a default route (328/home)
$f3->route('GET /', function () {

    // instantiate a view
    $view = new Template();
    echo $view->render("views/home.html");
});

// Define a default route (328/home) ---> this one is used to go back to homepage
$f3->route('GET|POST /home', function () {
    // Instantiate a view
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define a default route (328/about)
$f3->route('GET|POST /about', function () {
    // Instantiate a view
    $view = new Template();
    echo $view->render('views/about.html');
});

// Define a default route (328/contact)
$f3->route('GET|POST /contact', function () {
    // Instantiate a view
    $view = new Template();
    echo $view->render('views/contact.html');
});

// Define a default route (328/sign-in)
$f3->route('GET|POST /signin', function () {
    // Instantiate a view
    $view = new Template();
    echo $view->render('views/sign-in.html');
});

// Define a default route (328/sign-up)
$f3->route('GET|POST /signup', function () {
    // Instantiate a view
    $view = new Template();
    echo $view->render('views/sign-up.html');
});

// run Fat Free
$f3->run();

