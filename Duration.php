<?php
date_default_timezone_set("Asia/Kolkata");
class Duration {
    //protected $start_time = time("h:i:sa");
    //protected $end_time;
    protected $time;
    protected $total_time;

    function get_calculatedTime($speed, $distance)
    {
        $time = ($distance/$speed);
        return $time;
    }

}

?>

