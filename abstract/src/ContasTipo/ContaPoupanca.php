<?php

declare(strict_types=1);

namespace App\ContasTipo;

use App\ContaBancaria;

class ContaPoupanca extends ContaBancaria // o "extends" informa que a classe "ContaPoupanca" herda os atributos da classe pai "ContaBancaria"
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    )
    {   
        //o "parrent::" quer dizer que está usando o médotodo da classe pai
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
        
    }

    public function obterSaldo(): string
    {

        return "Seu saldo atual é de R$ " . number_format(($this->saldo + ($this->saldo * self::RENDIMENTO)), 2, ',', '');
    } 


}