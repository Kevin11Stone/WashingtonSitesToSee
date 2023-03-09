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
    private $_phone;
    private $_password;

    private $_destinationList;
    // constructor
    function __construct()
    {
        $this->_firstName = "";
        $this->_lastName = "";
        $this->_email = "";
        $this->_state = "";
        $this->_phone = "";
        $this->_password = "";
        $this->_destinationList = array();

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
    public function getPhone()
    {
        return $this->_phone;
    }
    public function setPhone($phone)
    {
        $this->_phone = $phone;
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
    public function getPassword()
    {
        return $this->_password;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
    }
    public function getDestinationList()
    {
        return $this->_destinationList;
    }
    // this array encompasses Destination objects
    public function setDestinationList($destinationObject)
    {
        $this->_destinationList[] = $destinationObject;
    }
}