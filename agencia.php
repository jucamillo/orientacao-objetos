<?php

class agencia
{
  public $numero; //atributo
}

$ag1 = new agencia();
$ag1->numero = 1234;
$ag2 = new agencia();
$ag2->numero = 4321;

echo "Agência 1: $ag1->numero" . PHP_EOL;

echo "Agência 2: $ag2->numero" . PHP_EOL;
