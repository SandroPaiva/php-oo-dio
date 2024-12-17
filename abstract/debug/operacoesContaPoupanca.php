<?php 

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaPoupanca;

$conta = new ContaPoupanca(

"Banco Nubank", //banco
"Sandro Paiva",//nome titular
"0001-21",//numero agencia
"321-02",//saldo
0
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->sacar(30);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;