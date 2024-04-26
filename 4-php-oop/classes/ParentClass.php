<?php


class ParentClass
{
    public $a ;
    protected $b ;
    private $c ;

    function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        
    }

    public function x()
    {
        return "x";
    }

    protected function y()
    {
        return "y";
    }

    private function z()
    {
        return "z";
    }
}
