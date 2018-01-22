<?php

class Turmas
{
  public $periodo; //atributo
  public $serie; //atributo
  public $sigla; //atributo
  public $tipoDeEnsino; //atributo
}

$turma1 = new Turmas();
$turma1->periodo = "Noturno";
$turma1->serie = "serie 8";
$turma1->sigla = "sigla A";
$turma1->tipoDeEnsino = "Fundamental";

$turma2 = new Turmas();
$turma2->periodo = "Matutino";
$turma2->serie = "1o Ano";
$turma2->sigla = "sigla B";
$turma2->tipoDeEnsino = "Médio";


echo "Período: $turma1->periodo" . PHP_EOL;
echo "Série: $turma1->serie" . PHP_EOL;
echo "Sigla: $turma1->sigla" . PHP_EOL;
echo "Tipo de Ensino: $turma1->tipoDeEnsino" . PHP_EOL;

echo "Período: $turma2->periodo" . PHP_EOL;
echo "Série: $turma2->serie" . PHP_EOL;
echo "Sigla: $turma2->sigla" . PHP_EOL;
echo "Tipo de Ensino: $turma2->tipoDeEnsino" . PHP_EOL;
