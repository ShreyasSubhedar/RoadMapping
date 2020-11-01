
<?php
# Including interface RoadType.php
include ('RoadType.php');
define("garage_distace", 50);

class RuralRoad implements RoadType{
    protected $max_car_dropage;
    protected $speed_limit;
    protected $garage_distace=50;

# GetRoadLength() returns the road limit.
public function GetRoadLength()
{
   /* code */
}

# GetSpeedLimit() return speed limit of the road.
public function GetSpeedLimit()
{
   return $this->speed_limit;
}
# SetRoadLength() uses $roadLength to set the length of the road.
public function SetRoadLength($roadLength)
{
    /* code */
}

}
?>