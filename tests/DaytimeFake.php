<?php
namespace Deg540\PHPTestingBoilerplate\Test;
use Deg540\PHPTestingBoilerplate\Daytime;

class DaytimeFake extends Daytime {

    private int $hour;

    public function __construct($hour)
    {
        $this->hour = $hour;
    }

    function getHour(): int
    {
        return $this->hour;
    }

}