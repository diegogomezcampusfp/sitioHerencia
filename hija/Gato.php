<?php
require_once('./padre/Animal.php');
class Gato extends Animal
{
  public function comer()
  {
    return "<p>Gato comiendo</p>";
  }


  public function abrirProtected()
  {
    $this->dormir();
  }

}
 ?>
