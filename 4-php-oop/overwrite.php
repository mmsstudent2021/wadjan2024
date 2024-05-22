<?php


class A
{
    protected $z;
    public function __construct($z)
    {
        $this->z = $z;
    }
    public function x()
    {
        return "this is x";
    }
}

class B extends A
{

    public $zz;

    public function __construct($z, $zz)
    {
        parent::__construct($z);
        $this->zz = $zz;
    }


    public function x()
    {
        return "this method x from B";
    }
}


$b = new B("z", "zz");

echo $b->x();
