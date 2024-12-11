<?php 

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria();

$conta->setBanco("Banco Santander");
$conta->setTitular("Sandro Paiva");
$conta->setAgencia("0001-21");
$conta->setConta("321-02");
$conta->setSaldo(2000.54);

var_dump($conta->exibirDadosDaConta());