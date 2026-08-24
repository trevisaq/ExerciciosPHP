<?php

namespace App;
use InvalidArgumentException;
class ContaBancaria
{
    public function __construct(
        private string $NomeTitular,
        private float $Saldo
    ) {
        if($this->Saldo < 0){
            throw new InvalidArgumentException('O saldo deve ser maior ou igual que zero');
        }
    }

    public function Depositar(float $valor): void
    {
        if($valor > 0){
            $this->Saldo += $valor;
        } else{
            throw new InvalidArgumentException('É necessário informar um valor positivo para depositar ao saldo');
        }
    }

    public function Sacar(float $valor): void
    {
        if($valor > 0 && $valor <= $this->Saldo){
            $this->Saldo -= $valor;
        } else{
            throw new InvalidArgumentException('Insira um valor válido para sacar (que seja positivo e dentro do limite de saque)');
        }
    }



    public function ConsultarSaldo(): float
    {
        return $this->Saldo;
    }

    public function Resumo(): string
    {
        return "A conta de " . $this->NomeTitular . " Pussui um saldo de R$ " . number_format($this->Saldo, 2, ",") ; 
    }

}
?>