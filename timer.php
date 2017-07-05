<?php

class timer
{
       public $m;
       public $h;


        public function time() {
            $m = 15;
            $h = 3;
            $y = ($h + ($m / 60))*30 - $m * 6;
            echo $y;
        }


}


?>