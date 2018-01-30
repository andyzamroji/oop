<?php

//class
class robot{

  //property
  public $suara;
  public $berat;

  //method
  public function set_suara($suara){
    $this->suara = $suara;
  }

  public function get_suara(){
    return $this->suara;
  }

  public function set_berat($berat){
    $this->berat = $berat;
  }

  public function get_berat(){
    return $this->berat;
  }
}

$robot1 = new robot;
//$robot1->bersuara();
$robot1->set_suara("brodod");
echo 'bunyi robot nya ' . $robot1->get_suara();
echo '<br/>';

$robot1->set_berat("40Kg");
echo 'Berat robot nya ' . $robot1->get_berat();


 ?>
