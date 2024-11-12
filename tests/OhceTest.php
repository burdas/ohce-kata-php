<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    private static Ohce $ohce;
    private static string $name;

    /**
     * @before
     */
    public static function setUpBeforeClass(): void
    {
        self::$name = 'Pepe';
        self::$ohce = new Ohce(new DaytimeFake(9),self::$name);
    }
    /**
    * @test
    */
    public function reverseWord()
    {
        $reverseString = self::$ohce->inputHandler('ohce');
        $this->assertEquals('echo', $reverseString);
    }

    /**
     * @test
     */
    public function checkIsPalindrome(){
        $palindrome = self::$ohce->inputHandler('otto');
        $this->assertEquals('otto ¡Bonita palabra!',$palindrome);
    }

    /**
     * @test
     */
    public function checkIsExitString()
    {
        $exitString = self::$ohce::EXIT_STRING;
        $exitMessage = self::$ohce->inputHandler($exitString);
        $expectedExitMessage = sprintf("Adios %s", self::$name);
        $this->assertEquals($expectedExitMessage, $exitMessage);

    }

}
