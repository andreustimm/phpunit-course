<?php

namespace AndreusTimm\PHPUnit;

Class Square
{
    public function area(int|float $side): float
    {
        return $side ** 2;
    }

    public function perimeter(int|float $side): float
    {
        return 4 * $side;
    }

    public function diagonal(int|float $side): float
    {
        return $side * sqrt(2);
    }
}