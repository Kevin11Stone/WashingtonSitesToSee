<?php
/**
 * Food class that inherits from Destination class
 */
class Activities extends Destination
{
    // private fields
    private $_activityType; // museums, clubs, arcades, etc
    private $_activityCategory; // inside, outside
    private $_activityKidFriendly;  // is the activity kid friendly?
    private $_activityFree; // is the activity free?

    function __construct()
    {
        $this->_activityType = "";
        $this->_activityCategory = "";
        $this->_activityKidFriendly = "";
        $this->_activityFree = "";
    }

    public function getActivityType()
    {
        return $this->_activityType;
    }
    public function setActivityType($activityType)
    {
        $this->_activityType = $activityType;
    }

    public function getActivityCategory()
    {
        return $this->_activityCategory;
    }
    public function setActivityCategory($activityCategory)
    {
        $this->_activityCategory = $activityCategory;
    }

    public function getActivityKidFriendly()
    {
        return $this->_activityKidFriendly;
    }
    public function setActivityKidFriendly($yesOrNo)
    {
        $this->_activityKidFriendly = $yesOrNo;
    }

    public function getActivityFree()
    {
        return $this->_activityFree;
    }
    public function setActivityFree($yesOrNo)
    {
        $this->_activityFree = $yesOrNo;
    }
}