<?php
/**
 * Activity class that inherits from Destination class
 */
class Activity extends Destination
{
    // private fields
    private $_type; // type of attraction: museum, mall, theme park, etc.


    function __construct()
    {
        $this->_type = "";
    }

    public function getType()
    {
        return $this->_activity;
    }
    public function setType($type)
    {
        $this->_type = $type;
    }

}