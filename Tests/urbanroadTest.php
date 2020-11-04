<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class urbanroadTest extends TestCase
{
    public function testGetSpeedLimit(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(52.5,$obj->GetSpeedLimit(70));
    }
    public function testGetSpeedLimit1(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(37.5,$obj->GetSpeedLimit(50));
    }
    public function testGetSpeedLimit2(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(0,$obj->GetSpeedLimit(0));
    }
    public function testGetSpeedLimit3(): void
    {
        $obj = new UrbanRoad();
        $this->assertEquals(87.5,$obj->GetSpeedLimit(110));
    }
}
?>