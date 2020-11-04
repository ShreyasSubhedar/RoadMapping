<?php

// include 'Journey.php';
class FuelStation{

    private $dist_from_road;
    private $time_to_refuel;

    function __construct() {
        $this->dist_from_road = 5;
        $this->time_to_refuel = 0.5;
    }

    function getRoadDist(){
        return $this->dist_from_road;
    }

    public function refuel($speed,&$js){
        $js->updateTotalDistance(10);
        $js->updateTotalTime((10/$speed) + 0.5);
        $js->updateRefuelCount(1);
    }

}




?>