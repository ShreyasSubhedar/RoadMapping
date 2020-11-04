
 <?php
 # Including interface RoadType.php
//  include ('RoadType.php');

 class RuralRoad implements RoadType{
    //  protected $max_car_dropage;             
     protected $speed_limit;
     protected $percentage;
     protected $garage_distance;
     protected $road_length;
     protected $road_limit;
    //  protected $initial_speed=70;

    function __construct(){
        $this->road_limit = 0;
        $this->percentage = 15;
        $this->garage_distance = 50;
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
 public function GetRoadLimit($travelling_capacity)
 {
    $this->travelling_capacity= $travelling_capacity + ( $travelling_capacity*$this->road_limit)/100;
    return $this->travelling_capacity;
 }

 }
 ?> 