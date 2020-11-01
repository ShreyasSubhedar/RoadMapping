<?php

class Duration {
    private $timeTaken;
    
    function _construct($timeTaken)
    {
         $this->timeTaken = $timeTaken;
    }
    
    //This function sets the time taken 
    function set_time_taken($time)
    {
        return this->$timeTaken = $time;
    }
    
    // This function returns the time taken
    function get_time_taken()
    {
        return this->$timeTaken;
    }
    
    //This function performs the calculation of the time taken for a particulae speed and distance
    function update_total_time($val)
    {
        return this->$timeTaken = this->$timetaken + $val;
    }
}

?>

