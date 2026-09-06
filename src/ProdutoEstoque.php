<?php

namespace App;
use InvalidArgumentException;

class ProdutoEstoque
{
    public function __construct(
        private string $Nome,
        private float $Preco,
        private int $Estoque
    ) {
        if(trim($this->Nome) === "" ){
            throw new InvalidArgumentException('O produto precisa de um nome!');
        }
        if($this->Preco <= 0 ){
            throw new InvalidArgumentException('O produto precisa de um valor acima de zero!');
        }
        if($this->Estoque < 0 ){
            throw new InvalidArgumentException('O produto precisa de um numero de estoque válido (igual ou maior que zero)!');
        }
    }

    public function aplicarDesconto(float $percentual): void
    {
        if($percentual > 0 && $percentual <= 50){
            $this->Preco -= ($this->Preco * $percentual) / 100;
        } else{
            throw new InvalidArgumentException('É necessário informar uma porcentagem positiva e menor que 50 para aplicar o desconto');
        }
    }

    public function repor(int $quantidade): void
    {
        if($quantidade > 0){
            $this->Estoque += $quantidade;
        } else{
            throw new InvalidArgumentException('Insira uma quantidade válida para repor no estoque (que seja maior que zero)');

        }
    }

    public function reservar(int $quantidade): void
    {
        if($quantidade > 0 && $quantidade <= $this->Estoque){
            $this->Estoque -= $quantidade;
        } else{
            throw new InvalidArgumentException('Insira uma quantidade válida para reservar do estoque (que esteja no limite do estoque e que seja maior que zero)');
        }
    }

    public function ConsultarPreco(): string
    {
        return number_format($this->Preco, 2, ",");
    }

    public function ConsultarEstoque(): int
    {
        return $this->Estoque;
    }

    public function Resumo(): string
    {
        return 'O produto "' . $this->Nome . '" atualmente custa R$ ' . $this->ConsultarPreco() . " e possui um estoque de " .  $this->ConsultarEstoque() . ' unidades'; 
    }

}
?>