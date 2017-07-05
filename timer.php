<?php

class Timer
{
    // public $m;
    //public $h;

    var $m;
    var $h;
    var $y;

    function time()
    {
        $m = 15;
        $h = 3;
        $y = ($h + ($m / 60)) * 30 - $m * 6;
        echo $y;
    }
}

$time = new Timer;
$time -> y = "";
echo $time->y;




        /**public function time() {
            $m = 15;
            $h = 3;
            $y = ($h + ($m / 60))*30 - $m * 6;
            echo $y;
        } **/






?>