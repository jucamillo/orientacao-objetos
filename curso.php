<?php

class Curso
{
  // public -> possivel acessar de qualquer arquivo,
  // private -> possivel acessar somente dentro dessa classe,somente os metodos dessa classe podem alterar
  // protected ->somente essa classe e as classes que herdam ?
  public $nome; //atributo
  public $sala; //atributo
}

$curso = new Curso();
$curso->nome = "Algoritmos em Java";
$curso->sala = "B05";


echo "Nome do curso: $curso->nome" . PHP_EOL;
echo "Sala: $curso->sala" . PHP_EOL;
