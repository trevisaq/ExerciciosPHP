<?php

namespace App;
use InvalidArgumentException;

class Aluno
{
    // Função inicializadore, exeuctada apenas qunado um objeto é criado
    public function __construct(
        private string $Nome,
        private int $RA,
        private array $Notas
    ) {
        if (trim($this->Nome) === ''){
            throw new InvalidArgumentException("É necessário informar o nome do aluno");
        }
        if ($this->RA <= 0){
            throw new InvalidArgumentException("É necessário informar o RA do aluno");
        }
    }
    public function adicionarNota(float $Nota): void
    {
        if($Nota >= 0 && $Nota <= 10){
            // $this->Notas = $Nota;
            $this->Notas[] = $Nota;
        } else{
            throw new InvalidArgumentException("Informe uma nota válida! (De 0 a 10)");
        }
    }

    public function CalcularMedia(): float
    {
        if(count($this->Notas) <= 1){
            echo "Ainda não existem notas suficientes cadastradas para calcular a média!";
        } else{
            return array_sum($this->Notas) / count($this->Notas); // Soma todos os valores e divide pela quantidade de valores
        }
    }

    public function Situacao(): string
    {
        if($this->CalcularMedia() >= 7){
            return "aprovado!";
        } elseif($this->CalcularMedia() >= 5 && $this->CalcularMedia() < 7){
            return "de recuperação!";
        } else{
            return "reprovado!";
        }
    }

    public function Resumo(): string
    {
        return "O aluno " . $this->Nome . " possui média " . $this->CalcularMedia() . " e está " . $this->Situacao();
    }

}
?>