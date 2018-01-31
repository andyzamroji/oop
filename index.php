<?php
require_once 'robot.php';

$robot1 = new robot('Brodaaaa', 90);
$robot1->set_berat(80);
echo 'bunyi robot nya ' . $robot1->get_suara();
echo '<br/>';
echo 'Berat robot nya ' . $robot1->get_berat();
echo '<br/>';
echo '==========================';
echo '<br/>';
$robothewan = new robot_hewan('Hmam Hmam', 66);
echo 'Bunyi robotnya ' . $robothewan->get_suara(); echo "</br>";
echo 'berat robotnya ' . $robothewan->get_berat(); echo "</br>";
$robothewan->set_kemampuan('menembak');
echo 'jenis robotnya  ' . $robothewan->get_kemampuan();

 ?>
