<?php

class Duration{
    private $start_time;
    private $end_time;
    private $duration;

    function __construct(){
        $this->start_time = time();
    }

    function get_start(){
        return $this->start_time;

    }
    function get_end(){

        return $this->end_time;

    }
        // @covers Duration
    function setDuration($hrs){
        $this->duration = $hrs;
        $this->end_time = strtotime("+$this->duration hour", strtotime($this->start_time));
    }

}


?>