<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class ruralroadTest extends TestCase
{
    public function testGetSpeedLimit(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(80.5,$obj->GetSpeedLimit(70));
    }
    public function testGetSpeedLimit1(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(57.5,$obj->GetSpeedLimit(50));
    }
    public function testGetSpeedLimit2(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(0,$obj->GetSpeedLimit(0));
    }
    public function testGetSpeedLimit3(): void
    {
        $obj = new RuralRoad();
        $this->assertEquals(126.5,$obj->GetSpeedLimit(110));
}
}
