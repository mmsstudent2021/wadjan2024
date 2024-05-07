<?php

class Circle extends Shape
{


    public function area(float $length): float
    {
        return pi() * $length;
    }

    public function showName()
    {
        return "this is square";
    }
}
