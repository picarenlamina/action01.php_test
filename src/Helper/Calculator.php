<?php
namespace App\Helper;

class Calculator
{
    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    public function div(float $a, float $b): float
    {
        return $a / $b;
    }
}
