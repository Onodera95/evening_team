<?php

$a = 10;
$b = 5;
$c = 6;


$sin = $a / $c;
$B = 180 - 90 - $sin;
$S = 1/2 * $a * $b;

//$b = sqrt($s);

echo "b = ", sqrt($a - $c),  "<br/>";
echo "Угол А = ", $sin,  "<br/>";
echo "Угол В = ", $B,  "<br/>";
echo "Площадь = ", $S;



?>