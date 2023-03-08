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
        //$newUser->setFirstName("Ozzy");

        // test code making sure objects are being stored in the
        // SESSION array correctly
//        $firstDestination = new Destination();
//        $secondDestination = new Destination();
//
//        $firstDestination->setName("Lakewood");
//        $secondDestination->setName("Puyallup");
//
//        $newFood = new Food();
//        $newFood->setName("firstFoodObject");
//
//        $newUser->setDestinationList($firstDestination);
//        $newUser->setDestinationList($secondDestination);
//        $newUser->setDestinationList($newFood);


        $_SESSION['newUser'] = $newUser;


        //var_dump($_SESSION);

        $view = new Template();
        echo $view->render("views/home.html");
    }


    function food()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // create array of foodNames, for each foodName - newUser->setDestination(foodName)
            $foodNameString  = isset($_POST['foodNames']) ?
                implode(", ",$_POST['foodNames']) : "";
            $foodNameArray = explode(", ", $foodNameString);


            foreach ($foodNameArray as $foodName) {
                $newDestinationToAdd = new Destination();
                $newDestinationToAdd->setName($foodName);
                $_SESSION['newUser']->setDestinationList($newDestinationToAdd);
            }


            //Redirect to summary page
            $this->_f3->reroute('wishlist');
        }



        // Instantiate a view
        $view = new Template();
        echo $view->render('views/food.html');

    }


    function wishlist()
    {

        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";

        // Instantiate a view
        $view = new Template();
        echo $view->render('views/wishlist.html');

        // destroy Session array
        session_destroy();
    }
}