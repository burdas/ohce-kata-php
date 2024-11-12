<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public const EXIT_STRING = 'Stop!';
    private $daytime;
    private $name;
    public function __construct(Daytime $daytime, String $name)
    {
        $this->daytime = $daytime;
        $this->name = $name;
    }

    public function inputHandler($word): string {
        if ($this->isPalindrome($word)) return "$word ¡Bonita palabra!";
        if ($this->isExitString($word)) return "Adios $this->name";
        return $this->reverse($word);
    }

    function reverse($word): string
    {
        return strrev($word);
    }

    function isPalindrome($word): bool
    {
        return $word === $this->reverse($word);
    }

    function isExitString($word): bool
    {
        return $word === $this::EXIT_STRING;
    }

    function greetings($name): string {
        return '';
    }
}
