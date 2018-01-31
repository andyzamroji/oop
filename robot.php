<?php

//class
class robot{

  //property
  public $suara;
  public $berat;

  //construct
  public function __construct($suara, $berat){
    $this->suara = $suara;
    $this->berat = $berat;

    //$this->kemampuan = $kemampuan;
  }

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

//Inheritance atau pewarisan
class robot_hewan extends robot
{
  public function set_kemampuan($kemampuan){
    $this->kemampuan = $kemampuan;
  }

  public function get_kemampuan(){
    return $this->kemampuan;
  }
}

 ?>
