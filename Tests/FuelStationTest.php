<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class FuelStationTest extends TestCase
{
    public function testGetRoadDist(): void
    {
        $obj = new Duration();
        $this->assertEquals(mktime(),$obj->get_start());
    }
}
?>