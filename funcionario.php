<?php

class Funcionario
{
  public $nome; //atributo
  public $salario; //atributo
}

$funcionario1 = new Funcionario();
$funcionario1->nome = "Lorem";
$funcionario1->salario = 9289823982;
$funcionario2 = new Funcionario();
$funcionario2->salario = 9289823982;

echo "Nome: $funcionario1->nome" . PHP_EOL;
echo "Salário: $funcionario1->salario" . PHP_EOL;

echo "Nome: $funcionario2->nome" . PHP_EOL;
echo "Salário: $funcionario2->salario" . PHP_EOL;
