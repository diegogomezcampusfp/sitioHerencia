<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require_once('padre/Animal.php');
    require_once('hija/Perro.php');
    require_once('hija/Gato.php');

    $perro1 = new Perro();
    $gato1 = new Gato();

    $perro1->comer();
    $perro1->abrirProtected();

    $gato1->comer();
    $gato1->abrirProtected();

    ?>
  </body>
</html>
