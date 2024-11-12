<?php
namespace Deg540\PHPTestingBoilerplate;
abstract class Daytime{
    private const MORNING = 6;
    private const AFTERNOON = 12;
    private const EVENING = 20;

    abstract function getHour();

    public function isMorning()
    {
        return $this->getHour() >= self::MORNING && $this->getHour() <= self::AFTERNOON;
    }

    public function isAfternoon(){
        return $this->getHour() >= self::AFTERNOON && $this->getHour() <= self::EVENING;
    }
}