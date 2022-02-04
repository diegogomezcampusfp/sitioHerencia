<?php
require_once('./padre/Animal.php');
class Gato extends Animal
{

  public function abrirProtected()
  {
    $this->dormir();
  }

}
 ?>
