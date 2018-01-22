<?php

class agencia
{
  public $numero; //atributo
}

$x = new agencia();
$x->numero = 1234;
$y = new agencia();
$y->numero = 4321;

echo "Agência 1: $x->numero" . PHP_EOL;

echo "Agência 2: $y->numero" . PHP_EOL;
