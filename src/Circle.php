<?php

namespace AndreusTimm\PHPUnit;

Class Circle
{
    public function area(int|float $radius): float
    {
        return pi() * ($radius ** 2);
    }

    public function perimeter(int|float $radius): float
    {
        return 2 * pi() * $radius;
    }
}