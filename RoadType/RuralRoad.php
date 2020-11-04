
<?php
# Including interface RoadType.php
include('RoadType.php');

class RuralRoad implements RoadType
{
    protected $max_car_dropage;
    protected $speed_limit;
    protected $garage_distace = 50;
    protected $road_length;
    protected $initial_speed = 70;

    # GetRoadLength() returns the road limit.
    public function GetRoadLength()
    {
        return $this->road_length;
    }

    # GetSpeedLimit() return speed limit of the road.
    public function GetSpeedLimit($percentage)
    {
        $this->speed_limit = $this->initial_speed + ($this->initial_speed * $percentage) / 100;
        return $this->speed_limit;
    }
    # SetRoadLength() uses $roadLength to set the length of the road.
    public function SetRoadLength($road_length)
    {
        $this->road_length = $road_length;
    }
}
?>