

<?php

/**$m = 15;
$h = 3;

$y = ($h + ($m / 60))*30 - $m * 6;

echo $y;*/



class Rectangle
{
public $params = array();

public function __construct($a, $b) {
$this->params = array($a, $b);
}

public function calcDiagonal()
{
foreach($this->params as $param) {
$sum += pow($param, 2);
}
return sqrt($sum);
}
}

class Cuboid extends Rectangle {
public function __construct ($a, $b, $c) {
$this->params = array($a, $b, $c);
}
    /**public function __construct($a, $b, $c) {
$this->params = array($a, $b, $c);
}*/

}


$r1 = new Rectangle(2,3);
echo $r1->calcDiagonal(), "</br>";

$r1->params = array(2,4);
echo $r1->calcDiagonal(), "</br>";

$c1 = new Cuboid(2,3,4);
echo $c1->calcDiagonal(), "</br>";

?>
