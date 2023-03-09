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
        if( !isset($_SESSION['newUser']) ) {
            // create User object upon viewing home page
            $newUser = new User();
            $_SESSION['newUser'] = $newUser;
        }

        $view = new Template();
        echo $view->render("views/home.html");
    }

    function music()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // create array of natureNames
            $musicNameString  = isset($_POST['musicNames']) ?
                implode(", ",$_POST['musicNames']) : "";
            $musicNameArray = explode(", ", $musicNameString);

            // for each food selected, create new nature object and add it to the User's
            // destination list
            foreach ($musicNameArray as $musicName) {
                $newDestinationToAdd = new Music();
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
                $newDestinationToAdd = new Food();
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
                $newDestinationToAdd = new Nature();
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
                $newDestinationToAdd = new Activity();
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
        // test vardump that we'll delete
//        echo "<pre>";
//        var_dump($_SESSION);
//        echo "</pre>";

        // Instantiate a view
        $view = new Template();
        echo $view->render('views/wishlist.html');

        // destroy Session array
        //session_destroy();
    }
}