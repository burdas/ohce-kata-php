<?php

namespace Deg540\PHPTestingBoilerplate;
require_once __DIR__ . '/../vendor/autoload.php';

class Ohce
{
    public const EXIT_STRING = 'Stop!';
    public const PROMPT = '$:';
    private Daytime $daytime;
    private string $name;
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

    private function reverse($word): string
    {
        return strrev($word);
    }

    private function isPalindrome($word): bool
    {
        return $word === $this->reverse($word);
    }

    private function isExitString($word): bool
    {
        return $word === $this::EXIT_STRING;
    }

    function greetings(): string {
        if ($this->daytime->isMorning()) return "¡Buenos días $this->name!";
        if ($this->daytime->isAfternoon()) return "¡Buenas tardes $this->name!";
        return "¡Buenas noches $this->name!";
    }
    public static function main($argc, $argv): void{
        if ($argc !== 2) {
            echo "Número de argumentos incorrectos. Debe introducir el nombre.\n";
            return;
        }
        $name = $argv[1];
        $daytime = new NativePHPDaytime();
        $ohce = new Ohce($daytime, $name);
        echo $ohce->greetings() . "\n";
        $word = readline(self::PROMPT);
        while (!$ohce->isExitString($word)) {
            echo $ohce->inputHandler($word) . "\n";
            $word = readline(self::PROMPT);
        }
    }
}

Ohce::main($argc, $argv);