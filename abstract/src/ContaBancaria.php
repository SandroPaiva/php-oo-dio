<?php

declare(strict_types=1);

namespace App;

abstract class ContaBancaria
{
    //atributos declarados como privados
    protected string $banco;
    protected string $nomeTitular;
    protected string $numeroAgencia;
    protected string $numeroConta;
    protected float $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return "Depósito de R$ " . number_format($valor, 2, ',', '') . " Realizado";
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return "Saque de R$ " . number_format($valor, 2, ',', '') . " Realizado";
    }

        public abstract function obterSaldo(): string;

         
     
    //Getters para retorno dos valores de cada atributo do objeto.
    public function getBanco(): string
    {
        return $this->banco;
    }
    public function getTitular(): string
    {
        return $this->nomeTitular;
    }
    public function getAgencia(): string
    {
        return $this->numeroAgencia;
    }
    public function getConta(): string
    {
        return $this->numeroConta;
    }
   /*public function getSaldo(): float
    {
        return $this->saldo;
    }*/
};
