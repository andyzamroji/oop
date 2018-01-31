<?php
require_once 'robot.php';
require_once 'hewan.php';
require_once 'orang.php';

$robot = new robot('testing', 80);
//method chaining
$robot->set_suara('hora hua hore')->set_berat(100);

echo $robot->suara . ' - ' . $robot->berat;
 ?>
