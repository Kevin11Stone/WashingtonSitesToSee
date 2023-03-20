<?php
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require_once('vendor/autoload.php');

// start a session
session_start();

// instantiate F3 base class
$f3 = Base::instance();

//instantiate a Controller object
$con = new Controller($f3);

$dataLayer = new DataLayer();


// define a default route (328/home)
$f3->route('GET /', function () {

    // use Controller class here
    $GLOBALS['con']->home();
});

// Define a default route (328/home) ---> this one is used to go back to homepage
$f3->route('GET|POST /home', function () {

    // use Controller class here
    $GLOBALS['con']->home();
});

// Define a default route (328/about)
$f3->route('GET|POST /about', function () {
    // Instantiate a view
    $view = new Template();
    echo $view->render('views/about.html');
});

// Define a default route (328/contact)
$f3->route('GET|POST /contact', function () {
    $GLOBALS['con']->contact();

});

// Define a default route (328/delete)
$f3->route('GET|POST /delete', function () {
    $GLOBALS['con']->delete();

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

// Define a default route (328/WashingtonSitesToSee/food)
$f3->route('GET|POST /food', function () {

    // use Controller class here
    $GLOBALS['con']->food();
});

// Define a default route (328/WashingtonSitesToSee/music)
$f3->route('GET|POST /music', function () {
    // Instantiate a view
    // use Controller class here
    $GLOBALS['con']->music();
});

// Define a default route (328/WashingtonSitesToSee/nature)
$f3->route('GET|POST /nature', function () {
    // use Controller class here
    $GLOBALS['con']->nature();
});

// Define a default route (328/WashingtonSitesToSee/activities)
$f3->route('GET|POST /activities', function () {
    // use Controller class here
    $GLOBALS['con']->activities();
});

// Define a default route (328/WashingtonSitesToSee/wishlist)
$f3->route('GET|POST /wishlist', function () {

    // use Controller class here
    $GLOBALS['con']->wishlist();

});

// run Fat Free
$f3->run();

