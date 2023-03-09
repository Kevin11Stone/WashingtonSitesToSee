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
    function backHome() {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function about()
    {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/about.html');
    }

    function contact()
    {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/contact.html');
    }

    function signIn()
    {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/sign-in.html');
    }

    function signUp()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $newUser = new User();

            //Move data from POST array to SESSION array
            $firstName = trim($_POST['firstName']);
            $lastName = trim($_POST['lastName']);
            $email = trim($_POST['email']);
            $phone = trim ($_POST['phone']);
            $password = trim ($_POST['password']);


            if (Validate::validFirstName($firstName) && Validate::validLastName($lastName) && Validate::validEmail($email) && Validate::validPhone($phone) && Validate::validPassword($password)) {
                $newUser->setFname($firstName);
                $newUser->setLname($lastName);
                $newUser->setEmail($email);
                $newUser->setPhone($phone);
                $newUser->setPassword($password);

            }
            else {
                $this->_f3->set('errors["firstName"]',
                    'must have at least 1 chars');
                $this->_f3->set('errors["lastName"]',
                    'must have at least 1 chars');
                $this->_f3->set('errors["email"]',
                    'invalid email');
                $this->_f3->set('errors["phone"]',
                    'invalid number');
                $this->_f3->set('errors["password"]',
                    'invalid password');
            }

            //Redirect to summary page
            if (empty($this->_f3->get('errors'))) {
                $_SESSION['newUser'] = $newUser;
                $this->_f3->reroute('experience');
            }
        }
    } // END of sign up
    function food() {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/food.html');
    }
    function nature() {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/nature.html');
    }
    function music() {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/music.html');
    }
    function activities() {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/activities.html');
    }
    function wishlist() {
        // Instantiate a view
        $view = new Template();
        echo $view->render('views/wishlist.html');
    }
}