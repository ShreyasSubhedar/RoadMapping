<?php

# RoadType interface creates the contract which every Road(Rural/Urban) can follow.
interface RoadType 
{
# GetSpeedLimit() return speed limit of the road.
  public function GetSpeedLimit($percentage);

# GetRoadLength() returns the road limit.
  public function GetRoadLength();

# SetRoadLength() uses $roadLength to set the length of the road.
  public function SetRoadLength($roadLength);

}
?>