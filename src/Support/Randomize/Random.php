<?php

namespace Xdev\Support\Randomize;

class Random
{
    public static function randomNumber(int $min, int $max): int
    {
        return rand($min, $max);
    }

    public static function randomString(int $length): string
    {
        return bin2hex(random_bytes($length));
    }

    public static function randomElementInArray(array $neededArray)
    {
        $index = array_rand($neededArray);
        return $neededArray[$index];
    }
}