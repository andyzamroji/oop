<?php
require_once 'robot.php';

$robot1 = new robot('Brodaaaa', 90);
echo 'bunyi robot nya ' . $robot1->get_suara();
echo '<br/>';
echo 'Berat robot nya ' . $robot1->get_berat();

 ?>
