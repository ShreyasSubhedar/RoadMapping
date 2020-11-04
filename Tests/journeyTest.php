<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class journeyTest extends TestCase
{
    public function testGetSpeedLimit(): void
    {
        $obj = new Journey();
        $this->assertEquals(0,$obj->updateTotalDistance(20));
    }
    public function testupdateTotalTime(): void
    {
        $obj = new Journey();
        $this->assertEquals(0,$obj->updateTotalTime(3));
    }
    public function testupdateRefuelCount(): void
    {
        $obj = new Journey();
        $this->assertEquals(0,$obj->updateRefuelCount(5.34534));
    }
}
?>