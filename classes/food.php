<?php
/**
 * Food class that inherits from Destination class
 */
class Food extends Destination
{
    // private fields
    private $_type; // restaurant, bar, cafe, etc.
    private $_cuisine; // French, Chinese, Mexican, etc.
    private $_kidFriendly;
    function __construct()
    {
        $this->_type = "";
        $this->_cuisine = "";
        $this->_kidFriendly = "";
    }

    public function getType()
    {
        return $this->_type;
    }
    public function setType($type)
    {
        $this->_type = $type;
    }
    public function getCuisine()
    {
        return $this->_cuisine;
    }
    public function setCuisine($cuisine)
    {
        $this->_cuisine = $cuisine;
    }
    public function getKidFriendly()
    {
        return $this->_kidFriendly;
    }
    public function setKidFriendly($yesOrNo)
    {
        $this->_kidFriendly = $yesOrNo;
    }
}