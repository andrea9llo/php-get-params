<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Params</title>
    <link rel="stylesheet" href="css/style.css">
    <?php

      $psw = $_GET["password"];


     ?>

  </head>
  <body>
    <?php

      if ($psw == "Boolean") {
        ?> <h1><?php echo $psw; ?></h1> <?php
      } else {
        ?> <h2><?php echo $psw; ?></h2> <?php
      }


     ?>

  </body>
</html>
