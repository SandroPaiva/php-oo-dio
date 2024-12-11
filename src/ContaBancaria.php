<?php

declare(strict_types=1);

namespace App;

class ContaBancaria
{
    //atributos declarados como privados
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    //metodo que será chamado para ter acesso aos atributps
    public function exibirDadosDaConta(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo
        ];

    //Setters e Getters para atribuição dos valores de cada atributo da classe.    
    }
    public function setBanco(string $banco): void
    {
        $this->banco = $banco;
    }
    public function getBanco(): string
    {
        return $this->banco;
    }
    public function setTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }
    public function getTitular(): string
    {
        return $this->nomeTitular;
    }
    public function setAgencia(string $numeroAgencia): void
    {
        $this->numeroAgencia = $numeroAgencia;
    }
    public function getAgencia(): string
    {
        return $this->numeroAgencia;
    }
    public function setConta(string $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }
    public function getConta(): string
    {
        return $this->numeroConta;
    }
    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }
};
