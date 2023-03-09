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

// Instantiate a Controller object
$con = new Controller($f3);

// define a default route (328/home)
$f3->route('GET /', function () {
    $GLOBALS['con']->home();
});

// Define a default route (328/home) ---> this one is used to go back to homepage
$f3->route('GET|POST /home', function () {
    $GLOBALS['con']->backHome();
});

// Define a default route (328/about)
$f3->route('GET|POST /about', function () {
    $GLOBALS['con']->about();
});

// Define a default route (328/contact)
$f3->route('GET|POST /contact', function () {
    $GLOBALS['con']->contact();
});

// Define a default route (328/sign-in)
$f3->route('GET|POST /signin', function () {
    $GLOBALS['con']->signIn();
});

// Define a default route (328/sign-up)
$f3->route('GET|POST /signUp', function () {
    $GLOBALS['con']->signUp();
});

// Define a default route (328/food)
$f3->route('GET|POST /food', function () {
    $GLOBALS['con']->food();
});

// Define a default route (328/nature)
$f3->route('GET|POST /nature', function () {
    $GLOBALS['con']->nature();
});

// Define a default route (328/music)
$f3->route('GET|POST /music', function () {
    $GLOBALS['con']->music();
});

// Define a default route (328/activities)
$f3->route('GET|POST /activities', function () {
    $GLOBALS['con']->activities();
});

// Define a default route (328/wishlist)
$f3->route('GET|POST /wishlist', function () {
    $GLOBALS['con']->wishlist();
});

// run Fat Free
$f3->run();

