<?php
require_once ('Classes.php');
use PHPUnit\Framework\TestCase;
final class journeyTest extends TestCase
{
                /**
     * @covers \Journey::updateTotalDistance
     * @uses \Journey::__construct
     * @uses \journeyTest::testGetSpeedLimit
     */
    public function testGetSpeedLimit(): void
    {
        $obj = new Journey();
        $this->assertEquals(0,$obj->updateTotalDistance(20));
    }
                    /**
     * @covers \Journey::updateTotalTime
     * @uses \Journey::__construct
     * @uses \journeyTest::testupdateTotalTime
     */
    public function testupdateTotalTime(): void
    {
        $obj = new Journey();
        $this->assertEquals(0,$obj->updateTotalTime(3));
    }
                        /**
     * @covers \Journey::updateRefuelCount
     * @uses \Journey::__construct
     * @uses \Journey::__construct
     * @uses \journeyTest::testupdateRefuelCount
     */
    public function testupdateRefuelCount(): void
    {
        $obj = new Journey();
        $this->assertEquals(0,$obj->updateRefuelCount(5.34534));
    }
}
?>