<?php
// controller/controller.php
class Controller
{
    private $_f3; // Fat-Free router

    function __construct($_f3)
    {
        $this->_f3 = $_f3;
    }

    function home()
    {
        // create User object
        $newUser = new User();
        $newUser->setFirstName("Ozzy");

        // create Destination array
        $firstDestination = new Destination();
        $secondDestination = new Destination();

        $firstDestination->setName("Lakewood");
        $secondDestination->setName("Puyallup");

        $newFood = new Food();
        $newFood->setName("firstFoodObject");

        $newUser->setDestinationList($firstDestination);
        $newUser->setDestinationList($secondDestination);
        $newUser->setDestinationList($newFood);


        $_SESSION['newUser'] = $newUser;


        var_dump($_SESSION);

        $view = new Template();
        echo $view->render("views/home.html");
    }
}