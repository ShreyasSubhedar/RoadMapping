<?php

require_once('Classes.php');
class Car{

    private $regNum;
    private $carName;
    private $licenseNum;
    private $mappingStatus;
    private $fuelStatus = array('Full' => 0, 'Medium' => 0, 'Low' => 0, 'Empty' => 0);
}

$road_type = $_GET['RoadType'];
$road_length = $_GET['Length'];
$rm = new RoadMap();
$rm->mapRoad($road_type,$road_length);

?>