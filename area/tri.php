<?php


class Tri
{

    public $S;


    public function __construct($a, $b)
    {
        $this->S = $a * $b;
    }

    public function calcArea() {

       /** $a = 10;
        $b = 5;*/
        foreach($this->S as $p) {
            $sum = 1 / 2 * $p;
        }
        return $sum;
    }
}

    $r1 = new Tri(10, 5);
    echo $r1->calcArea(), "</br>";



?>
