<?php

class Cliente
{
  public $nome; //atributo
  public $codigo; //atributo
}

$cliente1 = new Cliente();
$cliente1->nome = "Lorem";
$cliente1->codigo = 01;
$cliente2 = new Cliente();
$cliente2->nome = "Ipsum";
$cliente2->codigo = 02;

echo "Nome 1: $cliente1->nome" . PHP_EOL;
echo "Código 1: $cliente1->codigo" . PHP_EOL;

echo "Nome 2: $cliente2->nome" . PHP_EOL;
echo "Código 2: $cliente2->codigo" . PHP_EOL;
