<?php

class Conta {

  public static $contador;
  public $numeroConta;

  function __construct(){
      self::$contador++;
      $this->numeroConta = self::$contador;
  }

  static function  zeraContador(){
    echo 'Total de contas anteriores: ' . self::$contador.PHP_EOL;
    self::$contador = 0;
  }

}


?>
