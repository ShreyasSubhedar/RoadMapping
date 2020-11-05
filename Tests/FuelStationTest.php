<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class fuelstationTest extends TestCase
{
        /**
     * @covers \FuelStation::get_start
     */
    public function testGetRoadDist(): void
    {
        $obj = new Duration();
        $this->assertEquals(time(),$obj->get_start());
    }
            /**
     * @covers \FuelStation::refuel
     */
    public function testRefuelDist(): void
    {
        $obj= new FuelStation();
        $ans = new Journey();
        $obj->refuel(70,$ans);
        $this->assertEquals(10,$ans->getDist());
    }
                /**
     * @covers \FuelStation::refuel
     */
    public function testRefuelTime(): void
    {
        $obj= new FuelStation();
        $ans = new Journey();
        $obj->refuel(70,$ans);
        $this->assertEquals(0.6428571428571428,$ans->getTime());
    }
                /**
     * @covers \FuelStation::refuel
     */
    public function testRefuelCount(): void
    {
        $obj= new FuelStation();
        $ans = new Journey();
        $obj->refuel(70,$ans);
        $this->assertEquals(1,$ans->getCount());
    }
}
?>