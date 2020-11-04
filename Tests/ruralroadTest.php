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
}
?>