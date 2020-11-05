<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class durationTest extends TestCase
{
    /**
     * @covers \Duration::setDuration
     */
    public function testGetRoadDist(): void
    {
        $obj = new Duration();
        $this->assertEquals($obj->get_end(),$obj->setDuration(5));
    }
    
}
?>