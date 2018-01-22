<?php

class Conta
{
  public $numero; //atributo
  public $saldo; //atributo
  public $limite; //atributo
}

$conta = new Conta();
$conta->numero = 123;
$conta->saldo = 1000;
$conta->limite = 10000;

echo "Número: $conta->numero" . PHP_EOL;
echo "Saldo: $conta->saldo" . PHP_EOL;
echo "Limite: $conta->limite" . PHP_EOL;
