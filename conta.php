<?php

class Conta
{
  public $numero; //atributo
  public $saldo; //atributo
}

$x = new Conta();
$x->numero = 123;
$x->saldo = 1000;

echo "Número X: $x->numero" . PHP_EOL;
echo "Saldo X: $x->saldo" . PHP_EOL;

$y = new Conta();
$y->numero = 555;
$y->saldo = 60000;

echo "Número Y: $y->numero" . PHP_EOL;
echo "Saldo Y: $y->saldo" . PHP_EOL;
