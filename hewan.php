<?php
require_once 'robot.php';
//Inheritance atau pewarisan
class robot_hewan extends robot
{
  public function set_kemampuan($kemampuan){
    $this->kemampuan = $kemampuan;
  }

  public function get_kemampuan(){
    return $this->kemampuan;
  }

//overriding
  public function get_suara(){
    return 'suara robot hewan ini adalah ' . $this->suara;
  }

  //self parent
  public function testing()
  {
    return self::get_suara();
  }

}

 ?>
