<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class ruralroadTest extends TestCase
{
                    /**
     * @covers \RuralRoad::GetSpeedLimit
     * @uses \RuralRoad::__construct
     * @uses \ruralroadTest::testGetSpeedLimit
     */
    public function testGetSpeedLimit(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(80.5,$obj->GetSpeedLimit(70));
    }
                   /**
     * @covers \RuralRoad::GetSpeedLimit
     * @uses \RuralRoad::__construct
     * @uses \ruralroadTest::testGetSpeedLimit1
     */
    public function testGetSpeedLimit1(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(57.5,$obj->GetSpeedLimit(50));
    }
                   /**
     * @covers \RuralRoad::GetSpeedLimit
     * @uses \RuralRoad::__construct
     * @uses \ruralroadTest::testGetSpeedLimit2
     */
    public function testGetSpeedLimit2(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(0,$obj->GetSpeedLimit(0));
    }
                   /**
     * @covers \RuralRoad::GetSpeedLimit
     * @uses \RuralRoad::__construct
     * @uses \ruralroadTest::testGetSpeedLimit3
     */
    public function testGetSpeedLimit3(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(126.5,$obj->GetSpeedLimit(110));
}
}
