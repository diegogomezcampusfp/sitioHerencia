<?php
require('./padre/Animal.php');
class Perro extends Animal
{
  public function comer()
  {
    echo "<p>Perro comiendo</p>";
  }

}
 ?>
