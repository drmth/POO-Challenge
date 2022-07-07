<?php

class Speedometer 
{
    const FACTOR = 1.60934;

    public static function convertKmToMiles(float $km): float
    {
        return number_format((float)($km / self::FACTOR), 2, '.', '');
    }

    public static function convertMilesToKm(float $miles): float
    {
        return number_format((float)($miles * self::FACTOR), 2, '.', '');
    }
}