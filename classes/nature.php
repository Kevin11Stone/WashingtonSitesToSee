<?php
/**
 * Nature class that inherits from Destination class
 */
class Nature extends Destination
{
    // private fields
    private $_activity; // hiking, skiing, etc.


    function __construct()
    {
        $this->_activity = "";
    }

    public function getActivity()
    {
        return $this->_activity;
    }
    public function setActivity($activity)
    {
        $this->_type = $activity;
    }

}