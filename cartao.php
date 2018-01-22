<?php

class cartaoDeCredito
{
  public $numero; //atributo
  public $dataDeValidade; //atributo
}

$cartao1 = new cartaoDeCredito();
$cartao1->numero = 1111;
$cartao1->dataDeValidade = "01/01/2013";
$cartao2 = new cartaoDeCredito();
$cartao2->numero = 222;
$cartao2->dataDeValidade = "01/01/2018";

echo "Número 1: $cartao1->numero" . PHP_EOL;
echo "Data de Validade 1: $cartao1->dataDeValidade" . PHP_EOL;

echo "Número 2: $cartao2->numero" . PHP_EOL;
echo "Data de Validade 2: $cartao2->dataDeValidade" . PHP_EOL;
