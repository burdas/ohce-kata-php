<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
    * @test
    */
    public function reverseWord()
    {
        $ohce = new Ohce();
        $this->assertEquals('echo', $ohce->reverse('ohce'));
    }
}
