<?php
/**
 * Represents a single destination
 */
class Destination
{
    // fields
    private $_name;
    private $_description;
    private $_streetAddress;
    private $_city;
    private $_zipCode;

    // constructor
    function __construct()
    {
        $this->_name = "";
        $this->_description = "";
        $this->_streetAddress = "";
        $this->_city = "";
        $this->_zipCode = "";
    }

    public function getName()
    {
        return $this->_name;
    }
    public function setName($destinationName)
    {
        $this->_name = $destinationName;
    }
    public function getDescription()
    {
        return $this->_description;
    }
    public function setDescription($description)
    {
        $this->_description = $description;
    }
    public function getStreetAddress()
    {
        return $this->_streetAddress;
    }
    public function setStreetAddress($address)
    {
        $this->_streetAddress = $address;
    }
    public function getCity()
    {
        return $this->_city;
    }
    public function setCity($city)
    {
        $this->_city = $city;
    }
    public function getZipCode()
    {
        return $this->_name;
    }
    public function setZipCode($zipCode)
    {
        $this->_zipCode = $zipCode;
    }

}
