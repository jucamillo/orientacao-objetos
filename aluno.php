<?php

//api carbon - data
require 'lib/Carbon.php';
use Carbon\Carbon;
//require puxa arquivo e oo use é o namespace
// puxa o nome e sobrenome da class, sem o use teria que por p Carbon\ antes de tds as vezes que usamos ela la em baixo

class Aluno
{
  public $nome; //atributo
  public $rg; //atributo
  public $dataNascimento; //atributo
}

$aluno1 = new Aluno();
$aluno1->nome = "Lorem";
$aluno1->rg = 9289823982;
$aluno1->dataNascimento = Carbon::createFromDate(1987, 5, 21, 'America/Sao_Paulo');
$aluno2 = new Aluno();
$aluno2->nome = "Ipsum";
$aluno2->rg = 9289823982;
$aluno2->dataNascimento = Carbon::createFromDate(1960, 5, 21, 'America/Sao_Paulo');

echo "Nome: $aluno1->nome" . PHP_EOL;
echo "RG: $aluno1->rg" . PHP_EOL;
echo "Data de Nascimento: {$aluno1->dataNascimento->format('d/m/Y')}" . PHP_EOL;

echo "Nome: $aluno2->nome" . PHP_EOL;
echo "RG: $aluno2->rg" . PHP_EOL;
echo "Data de Nascimento: {$aluno2->dataNascimento->format('d/m/Y')}" . PHP_EOL;
