<?php
/**
 * Music class that inherits from Destination class
 */
class Music extends Destination
{
    // private fields
    private $_music; // concerts
    private $_musicFree; // is it free?

    function __construct()
    {
        $this->_music = "";
        $this->_musicFree = "";
    }

    public function getMusic()
    {
        return $this->_music;
    }
    public function setMusic($music)
    {
        $this->_music = $music;
    }


    public function getMusicFree()
    {
        return $this->_musicFree;
    }
    public function setMusicFree($yesOrNo)
    {
        $this->_musicFree = $yesOrNo;
    }
}