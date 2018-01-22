<?php

class Aluno
{
  public $nome; //atributo
  public $rg; //atributo
  public $dataNascimento; //atributo
}

$aluno1 = new Aluno();
$aluno1->nome = "Lorem";
$aluno1->rg = 9289823982;
$aluno1->dataNascimento = "05/03/1974";
$aluno2 = new Aluno();
$aluno2->nome = "Ipsum";
$aluno2->rg = 9289823982;
$aluno2->dataNascimento = "05/03/1932";

echo "Nome: $aluno1->nome" . PHP_EOL;
echo "RG: $aluno1->rg" . PHP_EOL;
echo "Data de Nascimento: $aluno1->dataNascimento" . PHP_EOL;

echo "Nome: $aluno2->nome" . PHP_EOL;
echo "RG: $aluno2->rg" . PHP_EOL;
echo "Data de Nascimento: $aluno2->dataNascimento" . PHP_EOL;
