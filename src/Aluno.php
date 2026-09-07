<?php

namespace App;
use InvalidArgumentException;
class Aluno
{
    // Função inicializadora, executada apenas qunado um objeto é criado
    public function __construct(
        private string $nome,
        private int $ra,
        private array $notas
    ) {
        if (trim($this->nome) === ''){
            throw new InvalidArgumentException("É necessário informar o nome do aluno");
        }
        if ($this->ra <= 0){
            throw new InvalidArgumentException("É necessário informar o RA do aluno");
        }
    }
    public function adicionarNota(float $nota): void
    {
        if($nota >= 0 && $nota <= 10){
            $this->notas[] = $nota;
        } else{
            throw new InvalidArgumentException("Informe uma nota válida! (De 0 a 10)");
        }
    }

    public function CalcularMedia(): float
    {
        if(count($this->notas) <= 1){
            echo "Ainda não existem notas suficientes cadastradas para calcular a média!";
        } else{
            return array_sum($this->notas) / count($this->notas); // Soma todos os valores e divide pela quantidade de valores
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
        return "O aluno " . $this->nome . " possui média " . $this->CalcularMedia() . " e está " . $this->Situacao();
    }

}
?>