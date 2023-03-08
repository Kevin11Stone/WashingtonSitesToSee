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
    public function getDestinationList()
    {
        foreach ($this->_destinationList as &$destinationObject) {
            echo $destinationObject->getName() . "<br>";
        }
    }
    // this array encompasses Destination objects
    public function setDestinationList($destinationObject)
    {
        $this->_destinationList[] = $destinationObject;
    }
}