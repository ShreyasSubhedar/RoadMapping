<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class fuelstationTest extends TestCase
{
    public function testGetRoadDist(): void
    {
        $obj = new Duration();
        $this->assertEquals(time(),$obj->get_start());
    }
}
?>