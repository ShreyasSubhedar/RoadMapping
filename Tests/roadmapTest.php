<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;

final class roadmapTest extends TestCase
{
                /**
     * @covers \RoadMap::mapRoad
     */
    public function testMapRoad1(): void
    {
        $obj = new RoadMap();
        $journy=$obj->mapRoad("Urban",600);

        $this->assertEquals(670,$journy->getDist());
        $this->assertEquals(14.26190476190476,$journy->getTime());
        $this->assertEquals(3,$journy->getCount());
    }
                    /**
     * @covers \RoadMap::mapRoad
     */

    public function testMapRoad2(): void
    {
        $obj = new RoadMap();
        $journy=$obj->mapRoad("Urban",0);

        $this->assertEquals(40,$journy->getDist());
        $this->assertEquals(0.7619047619047619,$journy->getTime());
        $this->assertEquals(0,$journy->getCount());
    }
                /**
     * @covers \RoadMap::mapRoad
     */
    public function testMapRoad3(): void
    {
        $obj = new RoadMap();
        $journy=$obj->mapRoad("Urban",900);

        $this->assertEquals(990,$journy->getDist());
        $this->assertEquals(21.3571428571428549,$journy->getTime());
        $this->assertEquals(5,$journy->getCount());
    }
                /**
     * @covers \RoadMap::mapRoad
     */
    public function testMapRoad4(): void
    {
        $obj = new RoadMap();
        $journy=$obj->mapRoad("Rural",600);

        $this->assertEquals(730,$journy->getDist());
        $this->assertEquals(10.568322981366459,$journy->getTime());
        $this->assertEquals(3,$journy->getCount());
    }
                /**
     * @covers \RoadMap::mapRoad
     */
    public function testMapRoad5(): void
    {
        $obj = new RoadMap();
        $journy=$obj->mapRoad("Rural",0);

        $this->assertEquals(100,$journy->getDist());
        $this->assertEquals(1.2422360248447204,$journy->getTime());
        $this->assertEquals(0,$journy->getCount());
    }
                /**
     * @covers \RoadMap::mapRoad
     */
    public function testMapRoad6(): void
    {
        $obj = new RoadMap();
        $journy=$obj->mapRoad("Rural",900);

        $this->assertEquals(1040,$journy->getDist());
        $this->assertEquals(14.919254658385093,$journy->getTime());
        $this->assertEquals(4,$journy->getCount());
    }
    
}
?>
