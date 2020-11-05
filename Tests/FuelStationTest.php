<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class fuelstationTest extends TestCase
{
    public function testGetRoadDist(): void
    {
        $obj = new Duration();
        $this->assertEquals(time(),$obj->get_start());
    }
    public function testRefuelDist(): void
    {
        $obj= new FuelStation();
        $ans = new Journey();
        $obj->refuel(70,$ans);
        $this->assertEquals(10,$ans->getDist());
    }
    public function testRefuelTime(): void
    {
        $obj= new FuelStation();
        $ans = new Journey();
        $obj->refuel(70,$ans);
        $this->assertEquals(0.6428571428571428,$ans->getTime());
    }
    public function testRefuelCount(): void
    {
        $obj= new FuelStation();
        $ans = new Journey();
        $obj->refuel(70,$ans);
        $this->assertEquals(1,$ans->getCount());
    }
}
?>