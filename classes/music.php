<?php
/**
 * Music class that inherits from Destination class
 */
class Music extends Destination
{
    // private fields
    private $_genre; // type of music: classical, pop, etc.


    function __construct()
    {
        $this->_genre = "";
    }

    public function getGenre()
    {
        return $this->_genre;
    }
    public function setGenre($genre)
    {
        $this->_genre = $genre;
    }

}