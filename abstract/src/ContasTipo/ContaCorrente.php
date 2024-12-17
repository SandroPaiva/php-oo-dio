<?php

declare(strict_types=1);

namespace App\ContasTipo;

use App\ContaBancaria;

class ContaCorrente extends ContaBancaria // o "extends" informa que a classe "ContaCorrente" herda os atributos da classe pai "ContaBancaria", oque permite chamar os metodos de depósito e saque que estão fora daqui,
{
    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

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

        return 'Seu saldo atual é de R$ ' . number_format(($this->saldo - self::TAXA), 2, ',', '');
    } 


}