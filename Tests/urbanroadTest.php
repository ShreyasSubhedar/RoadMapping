<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class urbanroadTest extends TestCase
{
                   /**
     * @covers \UrbanRoad::GetSpeedLimit
     * @uses \UrbanRoad::__construct
     * @uses \urbanroadTest::testGetSpeedLimit
     */
    public function testGetSpeedLimit(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(52.5,$obj->GetSpeedLimit(70));
    }
                   /**
     * @covers \UrbanRoad::GetSpeedLimit
     * @uses \UrbanRoad::__construct
     * @uses \urbanroadTest::testGetSpeedLimit1
     */
    public function testGetSpeedLimit1(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(37.5,$obj->GetSpeedLimit(50));
    }
                   /**
     * @covers \UrbanRoad::GetSpeedLimit
     * @uses \UrbanRoad::__construct
     * @uses \urbanroadTest::testGetSpeedLimit2
     */
    public function testGetSpeedLimit2(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(0,$obj->GetSpeedLimit(0));
    }
                   /**
     * @covers \UrbanRoad::GetSpeedLimit
     * @uses \UrbanRoad::__construct
     * @uses \urbanroadTest::testGetSpeedLimit3
     */
    public function testGetSpeedLimit3(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(82.5,$obj->GetSpeedLimit(110));
    }
}
?>