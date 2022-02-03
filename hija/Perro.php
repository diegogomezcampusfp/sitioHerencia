<?php
require_once('./padre/Animal.php');
class Perro extends Animal
{
  public function comer()
  {
    return "<p>Perro comiendo huesos</p>";
  }


  public function abrirProtected()
  {
    $this->dormir();
  }

}
 ?>
