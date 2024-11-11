<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public const EXIT_STRING = 'Stop!';
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
}
