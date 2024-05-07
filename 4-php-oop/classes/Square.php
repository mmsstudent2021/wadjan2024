<?php


class Square extends Shape
{
    public function area(float $length): float
    {
        return $length * 2;
    }

    public function showName()
    {
        return "this is square";
    }
}
