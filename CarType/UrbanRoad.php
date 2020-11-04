
 <?php
 # Including interface RoadType.php
//  include ('RoadType.php');

 class UrbanRoad implements RoadType{
    //  protected $max_car_dropage;             
     private $speed_limit;
     private $percentage ;
     private $garage_distance;
     private $road_length;
    //  protected $initial_speed=70;

    function __construct(){
        $this->percentage = -25;
        $this->garage_distance = 20;
    }

    function get_garage_distance(){
        return $this->garage_distance;
    }


 # GetRoadLength() returns the road limit.
 public function GetRoadLength()
 {
     return $this->road_length;
 }

 # GetSpeedLimit() return speed limit of the road.
 public function GetSpeedLimit($initial_speed)
 {
    $this->speed_limit= $initial_speed + ( $initial_speed*$this->percentage)/100;
    return $this->speed_limit;
 }
 # SetRoadLength() uses $roadLength to set the length of the road.
 public function SetRoadLength($road_length)
 {
     $this->road_length=$road_length;
 }

 }
 ?> 