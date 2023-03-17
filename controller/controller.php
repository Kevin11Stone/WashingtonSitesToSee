<?php
// Controller class
class Controller
{
    private $_f3; // Fat-Free router

    function __construct($_f3)
    {
        $this->_f3 = $_f3;
    }

    function home()
    {
        echo var_dump($_SESSION);

        if( !isset($_SESSION['newUser']) ) {
            // create User object upon viewing home page
            $newUser = new User();
            $_SESSION['newUser'] = $newUser;
        }

        $view = new Template();
        echo $view->render("views/home.html");
    }

    function contact() {

        session_destroy();
        $view = new Template();
        echo $view->render("views/contact.html");
    }

    function music()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // create array of natureNames
            $musicNameString  = isset($_POST['musicNames']) ?
                implode(", ",$_POST['musicNames']) : "";
            $musicNameArray = explode(", ", $musicNameString);

            // for each destination selected, create new destination object and add it to the User's
            // destination list
            foreach ($musicNameArray as $musicName) {
                $newDestinationToAdd = new Destination();
                $newDestinationToAdd->setName($musicName);
                $_SESSION['newUser']->setDestinationList($newDestinationToAdd);
            }

            //Redirect to summary page
            $this->_f3->reroute('wishlist');
        }

        // Instantiate a view
        $view = new Template();
        echo $view->render('views/music.html');

    }


    function food()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // create array of foodNames
            $foodNameString  = isset($_POST['foodNames']) ?
                implode(", ",$_POST['foodNames']) : "";
            $foodNameArray = explode(", ", $foodNameString);

            // for each food selected, create new Food object and add it to the User's
            // destination list
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


    function nature()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // add nature objects to User destination list
            // create array of musicNames
            $natureNameString  = isset($_POST['nature']) ?
                implode(", ",$_POST['nature']) : "";
            $natureNameArray = explode(", ", $natureNameString);

            // for each food selected, create new music object and add it to the User's
            // destination list
            foreach ($natureNameArray as $natureName) {
                $newDestinationToAdd = new Destination();
                $newDestinationToAdd->setName($natureName);
                $_SESSION['newUser']->setDestinationList($newDestinationToAdd);
            }

            //Redirect to summary page
            $this->_f3->reroute('wishlist');
        }

        // Instantiate a view
        $view = new Template();
        echo $view->render('views/nature.html');
    }

    function activities()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // add activity objects to User destination list
            // create array of activityNames
            $activityNameString  = isset($_POST['activityNames']) ?
                implode(", ",$_POST['activityNames']) : "";
            $activityNameArray = explode(", ", $activityNameString);

            // for each food selected, create new music object and add it to the User's
            // destination list
            foreach ($activityNameArray as $activityName) {
                $newDestinationToAdd = new Destination();
                $newDestinationToAdd->setName($activityName);
                $_SESSION['newUser']->setDestinationList($newDestinationToAdd);
            }

            //Redirect to summary page
            $this->_f3->reroute('wishlist');
        }

        // Instantiate a view
        $view = new Template();
        echo $view->render('views/activities.html');
    }

    function wishlist()
    {
        // display destinations in Itinerary List
        $wishList = $_SESSION['newUser']->getDestinationList();
        // for each destination in destinationList, save it to database
        foreach ($wishList as &$destination) {
            $destinationName = $destination->getName();
            if($GLOBALS['dataLayer']->checkIfDestinationIsInDatabase($destinationName) == true){
                $GLOBALS['dataLayer']->saveDestination($destination);
            }
        }
        $destinationsInDatabase = $GLOBALS['dataLayer']->getDestinations();
        $this->_f3->set('destinations', $destinationsInDatabase);
        //$GLOBALS['dataLayer']->getDestinations();


//        //If the form has been submitted
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//
//            // delete destination
//            $destinationNamesString  = isset($_POST['destinationNames']) ?
//                implode(", ",$_POST['destinationNames']) : "";
//            $destinationNamesArray = explode(", ", $destinationNamesString);
//
//            // for each destination selected, delete it from the database
//            foreach ($destinationNamesArray as $destinationName) {
//                deleteDestinationFromDatabase($destinationName->getName());
//            }
//
//            //Redirect to Itinerary page
//            $this->_f3->reroute('wishlist');
//        }

        // destroy Session array
        session_destroy();

        // Instantiate a view
        $view = new Template();
        echo $view->render('views/wishlist.html');

    }
}