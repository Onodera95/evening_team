<?php

class Timer
{
    public $y = array();
    public $h;
    public $m;


    public function __construct($h, $m)
    {
        $this->y = array($h, $m);
    }

    public function Corner()
    {
        foreach ($this->y as $u){
            $u = ($h + ($m / 60)) * 30 - $m * 6;
        }

        return $u;
    }
}

$time = new Timer (3, 15);

echo "Угол: ", $time->Corner();

?>