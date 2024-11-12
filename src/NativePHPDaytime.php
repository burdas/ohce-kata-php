<?php
namespace Deg540\PHPTestingBoilerplate;
class NativePHPDaytime extends Daytime{
    function getHour(): int{
        return (int) date('H');
    }
}