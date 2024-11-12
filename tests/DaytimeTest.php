<?php

namespace Deg540\PHPTestingBoilerplate\Test;
use PHPUnit\Framework\TestCase;

class DaytimeTest extends TestCase
{
    /**
     * @test
     */
    public function testIsMorning()
    {
        $dayTime = new DaytimeFake(8);
        $this->assertTrue($dayTime->isMorning());
        $this->assertFalse($dayTime->isAfternoon());
    }

    /**
     * @test
     */
    public function testIsAfternoon(){
        $dayTime = new DaytimeFake(14);
        $this->assertTrue($dayTime->isAfternoon());
        $this->assertFalse($dayTime->isMorning());
    }
}
