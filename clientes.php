<?php

class Cliente
{
  public $nome; //atributo
  public $codigo; //atributo
}

$x = new Cliente();
$x->nome = "Lorem";
$x->codigo = 01;
$y = new Cliente();
$y->nome = "Ipsum";
$y->codigo = 02;

echo "Nome 1: $x->nome" . PHP_EOL;
echo "Código 1: $x->codigo" . PHP_EOL;

echo "Nome 2: $y->nome" . PHP_EOL;
echo "Código 2: $y->codigo" . PHP_EOL;
