<?php


class Child extends ParentClass
{
    public $d;
    public $e;

    function __construct($a, $b, $c, $d, $e)
    {
        parent::__construct($a,$b,$c);
        
        $this->d = $d;
        $this->e = $e;
        // $this->a = "000";
        // $this->b = "111";
        // $this->c = "222";
        // echo $this->c;
    }

    public function x()
    {
        return "xxx";
    }
}
