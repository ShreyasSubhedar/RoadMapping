<?php


include_once 'FuelStation.php';
include_once 'CarType/RuralRoad.php';
include_once 'CarType/UrbanRoad.php';
include_once 'Duration.php';
class RoadMap extends Journey{


    private $speed;
    private $travelling_capacity;

    function __construct(){
        $this->speed = 70;
        $this->travelling_capacity = 200;
    }

    function setSpeed($road){
        $this->speed = $road->GetSpeedLimit($this->speed);
    }
    

    public function mapRoad($roadType,$roadLength){
        $d = new Duration();
        // echo 'Start Time: ' . $d->get_start();
        $road = strcmp($roadType,"Urban")==0? new UrbanRoad() : new RuralRoad;
        $garage_dist = $road->get_garage_distance();
        $js = new Journey();
        $fs = new FuelStation();
        $refuel_limit = $fs->getRoadDist() ;
        $this->setSpeed($road);


        $curr_capacity = $this->travelling_capacity;
        $curr_capacity = $road->GetRoadLimit($curr_capacity);
        $curr_capacity = $curr_capacity - $garage_dist;
        $js->updateTotalDistance($garage_dist);
        $js->updateTotalTime($garage_dist/$this->speed);

        while($roadLength!=0){
            
            if($roadLength>=$curr_capacity){
                $roadLength = $roadLength - ($curr_capacity - $refuel_limit);
                $js->updateTotalDistance($curr_capacity - $refuel_limit);
                $js->updateTotalTime(($curr_capacity - $refuel_limit) / $this->speed);
                $fs->refuel($this->speed,$js);
                $curr_capacity = $this->travelling_capacity - $refuel_limit ;
            }
            else{

                $curr_capacity = $curr_capacity - $roadLength;
                $js->updateTotalDistance($roadLength);
                $js->updateTotalTime($roadLength/$this->speed);
                $roadLength = 0;
            }
        }

        $js->updateTotalDistance($garage_dist);
        $js->updateTotalTime($garage_dist/$this->speed);
        $d->setDuration($js->time_taken);


        // Insert into table

      


        
        // echo " -------------------------------------------------------------"."\n" ;
        //  echo " Total Distance travelled: ". $js->total_distance."\n" ;
        //  echo " Number of Times Refueled: ". $js->refuel_count."\n" ;
        //  echo " Total Time Taken: ". $js->time_taken. "\n";
        //  echo 'End Time: ' . $d->get_end();
        return $js;



    }


}














?>
