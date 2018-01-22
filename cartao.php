<?php

//api carbon - data
require 'lib/Carbon.php';
use Carbon\Carbon;



require 'cartaoDeCredito.php';



$cartao1 = new cartaoDeCredito();
$cartao1->numero = 1111;
$cartao1->dataDeValidade = Carbon::createFromDate(2023, 5, 21, 'America/Sao_Paulo');
$cartao2 = new cartaoDeCredito();
$cartao2->numero = 222;
$cartao2->dataDeValidade =  Carbon::createFromDate(2023, 5, 21, 'America/Sao_Paulo');

echo "Número 1: $cartao1->numero" . PHP_EOL;
echo "Data de Validade 1: {$cartao1->dataDeValidade->format('d/m/Y')}" . PHP_EOL;

echo "Número 2: $cartao2->numero" . PHP_EOL;
echo "Data de Validade 2: {$cartao2->dataDeValidade->format('d/m/Y')}" . PHP_EOL;
