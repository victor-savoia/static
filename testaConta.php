<?php

  require ('Conta.php');


  $c1 = new Conta();
  echo $c1->numeroConta . PHP_EOL;
  $c2 = new Conta();
  echo $c2->numeroConta . PHP_EOL;
  $c3 = new Conta();
  echo $c3->numeroConta . PHP_EOL;

  Conta::zeraContador();

  echo 'Contador zerado: ' . Conta::$contador . PHP_EOL;

?>
