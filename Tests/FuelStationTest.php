<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class fuelstationTest extends TestCase
{
        /**
     * @covers \Duration::get_start
     * @uses  \Duration::__construct
     * @uses \fuelstationTest::testGetRoadDist
     */
    public function testGetRoadDist(): void
    {
        $obj = new Duration();
        $this->assertEquals(time(),$obj->get_start());
    }
            /**
     * @covers \FuelStation::refuel
     * @uses \FuelStation::__construct
    * @uses \Journey::__construct
    * @uses \Journey::getDist
    * @uses \Journey::updateRefuelCount
    * @uses \Journey::updateTotalDistance
    * @uses \Journey::updateTotalTime
    * @uses \fuelstationTest::testRefuelDist
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
     * @uses \FuelStation::__construct
    * @uses \Journey::__construct
    * @uses \Journey::getDist
        * @uses \Journey::getTime
    * @uses \Journey::updateRefuelCount
    * @uses \Journey::updateTotalDistance
    * @uses \Journey::updateTotalTime
    * @uses \fuelstationTest::testRefuelTime
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
     * @uses \FuelStation::__construct
    * @uses \Journey::__construct
    * @uses \Journey::getDist
        * @uses \Journey::getCount
    * @uses \Journey::updateRefuelCount
    * @uses \Journey::updateTotalDistance
    * @uses \Journey::updateTotalTime
    * @uses \fuelstationTest::testRefuelCount
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