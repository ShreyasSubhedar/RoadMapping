<?php

// Implements Road Interface
class UrbanRoad{

    private $distFromGarage;
    private $speedLimitMultiplier;

    function __construct($distFromGarage,$speedLimitMultiplier) {
        $this->distFromGarage = $distFromGarage;
        $this->speedLimitMultiplier = $speedLimitMultiplier;

    }

    public function get_dist(){

        return $this->distFromGarage;

    }

    public function get_multiplier(){

        return $this->speedLimitMultiplier;
        
    }
}

// Implements Road Interface
class RuralRoad{

    private $distFromGarage;
    private $speedLimitMultiplier;

    function __construct($distFromGarage,$speedLimitMultiplier) {
        $this->distFromGarage = $distFromGarage;
        $this->speedLimitMultiplier = $speedLimitMultiplier; 
    }

    public function get_dist(){

        return $this->distFromGarage;

    }
    public function get_multiplier(){

        return $this->speedLimitMultiplier;
        
    }
    

}

class Car{

    private $currSpeed;
    private $maxDist;
    private $mappingStatus;
    private $totalDistance;
    private $timeTaken;
    private $timesRefueled;
    private $refuelIndicator;
    private $detourLimit;

    function __construct($currSpeed,$maxDist,$mappingStatus,$totalDistance,$timeTaken,$timesRefueled,$timesIndicator,$detourLimit) {
        $this->currSpeed = $currSpeed;
        $this->maxDist = $maxDist;
        $this->mappingStatus = $mappingStatus;
        $this->totalDistance = $totalDistance;
        $this->timeTaken = $timeTaken;
        $this->timesRefueled = $timesRefueled;
        $this->timesIndicator = $timesIndicator;
        $this->detourLimit = $detourLimit;
    }
    public function update_times_refueled(){
        $this->timesRefueled = $this->timesRefueled + 1;
    }
    public function update_total_time($val){
        $this->timeTaken = $this->timeTaken + $val ;
    }
    public function update_total_distance($val){
        $this->totalDistance = $this->totalDistance + $val ;
    }
    public function set_total_dist($dist) {
        $this->totalDistance = $dist;
    }
    public function set_time_taken($time) {
        $this->timeTaken = $time;
    }
    public function set_times_refueled($num) {
        $this->timesRefueled = $num;
    }
    public function set_max_dist() {
        $this->maxDist = 200;
    }
    public function get_max_dist() {
        return $this->maxDist;
    }
    public function get_detour_limit() {
        return $this->detourLimit;
    }
    public function get_curr_speed() {
        return $this->currSpeed;
    }
    public function get_mapping_status() {
        return $this->mappingStatus;
    }
    public function get_time_taken() {
        return $this->timeTaken;
    }
    public function get_total_Distance() {
        return $this->totalDistance;
    }
    public function get_times_refueled() {
        return $this->timesRefueled;
    }

    public function initiateMapping($roadtype, $roadLength){

        $rr = new RuralRoad(50,1.15);
        $ur = new UrbanRoad(20,0.75);
        $currDist = $this->get_max_dist();

        $speed = $this->get_curr_speed() *  (strcmp($roadtype,"Urban")==0? $ur->get_multiplier() : $rr->get_multiplier());
        $garageDist = strcmp($roadtype,"Urban")==0? $ur->get_dist() : $rr->get_dist();
        $detourLimit = $this->get_detour_limit();
        
        $currDist = $currDist - $garageDist ;
        $this->update_total_distance($garageDist);
        $this->update_total_time($garageDist/$speed);
      
        
        while($roadLength!=0){
            echo " Distance: ". $this->totalDistance ;
             echo " Time: ". $this->timeTaken. "\n";
            if($roadLength>=$currDist){
                $roadLength = $roadLength - ($currDist - $detourLimit);
                $this->update_total_distance($currDist - $detourLimit);
                $this->update_total_time(($currDist - $detourLimit) / $speed);
                $currDist = $this->refuel();
            }
            else{
                
                $currDist = $currDist - $roadLength;
                $this->update_total_distance($roadLength);
                $roadLength = 0;
            }
        }
        $this->update_total_distance($garageDist);
        $this->update_total_time($garageDist/$this->get_curr_speed());
        echo " -------------------------------------------------------------"."\n" ;
        echo " Total Distance travelled: ". $this->totalDistance."\n" ;
        echo " Number of Times Refueled: ". $this->timesRefueled."\n" ;
        echo " Total Time Taken: ". $this->timeTaken. "\n";



    }
    public function refuel(){

        $this->update_total_distance(10);
        $this->update_total_time((10/$this->get_curr_speed()) + 0.5);
        $this->update_times_refueled();
        return $this->get_max_dist() - $this->get_detour_limit();



    }
}

$road_type = (string)readline("Enter a road type: ");
$road_length = (int)readline("Enter the road length: ");

$c1 = new Car(70,200,0,0,0,0,0,5);
$c1->initiateMapping($road_type,$road_length);






?>