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
}
?>