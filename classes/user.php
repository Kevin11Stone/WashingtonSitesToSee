<?php
/**
 * Represents a single user choosing destinations
 */
class User
{
    // private fields
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_state;
    private $_phoneNumber;
    private $_destinationList;
    // constructor
    function __construct()
    {
        $this->_firstName = "";
        $this->_lastName = "";
        $this->_email = "";
        $this->_state = "";
        $this->_phoneNumber = "";
        $this->_destinationList = array(); // array of type Destination

    }

    public function getFirstName()
    {
        return $this->_firstName;
    }
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }
    public function getLastName()
    {
        return $this->_lastName;
    }
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }
    public function getPhoneNumber()
    {
        return $this->_phoneNumber;
    }
    public function setPhoneNumber($phoneNumber)
    {
        $this->_phoneNumber = $phoneNumber;
    }
    public function getEmail()
    {
        return $this->_email;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }
    public function getState()
    {
        return $this->_state;
    }
    public function setState($state)
    {
        $this->_state = $state;
    }

    public function deleteDestinationFromList($destinationName) {
        $key = array_search ($destinationName, $this->_destinationList);
        unset($this->_destinationList[$key]);

    }
    public function getDestinationList()
    {
//        foreach ($this->_destinationList as &$destinationObject) {
//            echo"- " . $destinationObject->getName() . "<br>";
//        }
        return $this->_destinationList;
    }
    // this array encompasses Destination objects
    public function setDestinationList($destinationObject)
    {
        if($destinationObject == null) {
            return;
        }
        if(in_array($destinationObject, $this->_destinationList)) {
            return;
        }
        $this->_destinationList[] = $destinationObject;
    }

    public function getFoodList()
    {
        $_foodList = array();
        foreach ($this->_destinationList as &$destinationObject) {
            if( $destinationObject instanceof Food ){
                $_foodList[] = $destinationObject;
            };
        }

//        foreach ($_foodList as &$foodObject) {
//            echo"- " . $foodObject->getName() . "<br>";
//        }
        return $_foodList;
    }
    public function getNatureList()
    {
        $_natureList = array();
        foreach ($this->_destinationList as &$destinationObject) {
            if( $destinationObject instanceof Nature ){
                $_natureList[] = $destinationObject;
            };
        }

//        foreach ($_natureList as &$natureObject) {
//            echo"- " . $natureObject->getName() . "<br>";
//        }
        return $_natureList;
    }
    public function getActivityList()
    {
        $_activityList = array();
        foreach ($this->_destinationList as &$destinationObject) {
            if( $destinationObject instanceof Activity ){
                $_activityList[] = $destinationObject;
            };
        }
//        foreach ($_activityList as &$activityObject) {
//            echo"- " . $activityObject->getName() . "<br>";
//        }
        return $_activityList;
    }

    public function getMusicList()
    {
        $_musicList = array();
        foreach ($this->_destinationList as &$destinationObject) {
            if( $destinationObject instanceof Music ){
                $_musicList[] = $destinationObject;
            };
        }
//        foreach ($_musicList as &$musicObject) {
//            echo"- " . $musicObject->getName() . "<br>";
//        }
        return $_musicList;
    }

}