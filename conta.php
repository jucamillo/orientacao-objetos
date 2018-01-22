<?php

class Conta
{
  public $numero; //atributo
  public $saldo; //atributo
  public $limite; //atributo
}

$x = new Conta();
$x->numero = 123;
$x->saldo = 1000;
$x->limite = 10000;

echo "Número: $x->numero" . PHP_EOL;
echo "Saldo: $x->saldo" . PHP_EOL;
echo "Limite: $x->limite" . PHP_EOL;
