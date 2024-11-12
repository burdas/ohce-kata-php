<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Daytime;
use Deg540\PHPTestingBoilerplate\Ohce;
use Mockery;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    private Ohce $ohce;
    private string $name;
    private Daytime $daytime;

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->name = 'Pepe';
        $this->daytime = Mockery::mock(Daytime::class);
        $this->ohce = new Ohce($this->daytime,$this->name);
    }

    /**
    * @test
    */
    public function reverseWord()
    {
        $reverseString = $this->ohce->inputHandler('ohce');
        $this->assertEquals('echo', $reverseString);
    }

    /**
     * @test
     */
    public function checkIsPalindrome(){
        $palindrome = $this->ohce->inputHandler('otto');
        $this->assertEquals('otto ¡Bonita palabra!',$palindrome);
    }

    /**
     * @test
     */
    public function checkIsExitString()
    {
        $exitString = $this->ohce::EXIT_STRING;
        $exitMessage = $this->ohce->inputHandler($exitString);
        $expectedExitMessage = sprintf("Adios %s", $this->name);
        $this->assertEquals($expectedExitMessage, $exitMessage);

    }

    /**
     * @test
     */
    public function morningGreetings(){
        $expectedGreetings = sprintf("¡Buenos días %s!", $this->name);
        $this->daytime->shouldReceive('isMorning')->once()->andReturn(true);
        $greetings = $this->ohce->greetings($this->name);
        $this->assertEquals($expectedGreetings, $greetings);
    }

    /**
     * @test
     */
    public function afternoonGreetings(){
        $expectedGreetings = sprintf("¡Buenas tardes %s!", $this->name);
        $this->daytime->shouldReceive('isMorning')->once()->andReturn(false);
        $this->daytime->shouldReceive('isAfternoon')->once()->andReturn(true);
        $greetings = $this->ohce->greetings($this->name);
        $this->assertEquals($expectedGreetings, $greetings);
    }

    /**
     * @test
     */
    public function eveningGreetings(){
        $expectedGreetings = sprintf("¡Buenas noches %s!", $this->name);
        $this->daytime->shouldReceive('isMorning')->once()->andReturn(false);
        $this->daytime->shouldReceive('isAfternoon')->once()->andReturn(false);
        $greetings = $this->ohce->greetings($this->name);
        $this->assertEquals($expectedGreetings, $greetings);
    }

}
