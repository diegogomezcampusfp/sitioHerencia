<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require('hija/Perro.php');
    require_once('hija/Gato.php');

    $perro1 = new Perro();
    $gato1 = new Gato();

    $gato1->abrirProtected();
    $perro1->comer();

    ?>
  </body>
</html>
