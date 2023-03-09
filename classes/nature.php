<?php
/**
 * Food class that inherits from Destination class
 */
class Nature extends Destination
{
    // private fields
    private $_natureType; // lake, mountain, beach, park.
    private $_natureKidFriendly;  // is it kid friendly?
    private $_natureFree; // is it free?

    function __construct()
    {
        $this->_natureType = "";
        $this->_natureKidFriendly = "";
        $this->_natureFree = "";
    }

    public function getNatureType()
    {
        return $this->_natureType;
    }
    public function setNatureType($natureType)
    {
        $this->_natureType = $natureType;
    }

    public function getNatureKidFriendly()
    {
        return $this->_natureKidFriendly;
    }
    public function setNatureKidFriendly($yesOrNo)
    {
        $this->_natureKidFriendly = $yesOrNo;
    }

    public function getNatureFree()
    {
        return $this->_natureFree;
    }
    public function setNatureFree($yesOrNo)
    {
        $this->_natureFree = $yesOrNo;
    }

}