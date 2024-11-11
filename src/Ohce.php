<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    function reverse($word): string
    {
        return strrev($word);
    }

    function isPalindrome($word): bool
    {
        return $word === $this->reverse($word);
    }
}
