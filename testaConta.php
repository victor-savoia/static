<?php

  require ('Conta.php');

  echo Conta::$contador . PHP_EOL;
  $c = new Conta();
  echo Conta::$contador. PHP_EOL;

  $c = new Conta();
  echo Conta::$contador. PHP_EOL;


?>
