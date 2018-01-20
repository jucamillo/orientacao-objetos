<?php

class cartaoDeCredito
{
  public $numero; //atributo
  public $dataDeValidade; //atributo
}

$x = new cartaoDeCredito();
$x->numero = 1111;
$x->dataDeValidade = "01/01/2013";
$y = new cartaoDeCredito();
$x->numero = 222;
$x->dataDeValidade = "01/01/2018";

echo "Número 1: $x->numero" . PHP_EOL;
echo "Data de Validade 1: $x->dataDeValidade" . PHP_EOL;

echo "Número 2: $y->numero" . PHP_EOL;
echo "Data de Validade 2: $y->dataDeValidade" . PHP_EOL;
