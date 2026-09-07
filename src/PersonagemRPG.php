<?php

namespace App;
use InvalidArgumentException;
class PersonagemRPG
{
    // Função inicializadora, executada apenas qunado um objeto é criado
    public function __construct(
        private string $nome,
        private int $vidaMaxima,
        private int $vidaAtual,
        private int $energia
    ) {
        if (trim($this->nome) === ''){
            throw new InvalidArgumentException("É necessário informar o nome do personagem");
        }
        if ($this->vidaMaxima <= 0){
            throw new InvalidArgumentException("É necessário que a vida máxima do personagem seja maior que 0");
        }
    }
    public function sofrerDano(int $dano): void
    {
        if($dano > 0){
            if ($dano >= $this->vidaAtual){
                // Se o dano execer a vida atual, simplesmente defino que a vida retorna como 0
                $this->vidaAtual = 0;
            } else{
                $this->vidaAtual -= $dano;
            }
        } else{
            throw new InvalidArgumentException("Informe um valor de dano válido! (Sendo ele positivo)");
        }
    }

    public function curar(int $pontos): void
    {
        if($pontos > 0){
            if ($this->vidaAtual + $pontos >= $this->vidaMaxima){
                throw new InvalidArgumentException("Informe um valor de pontos de cura válido! (Não podendo execeder o limite da vida máxima)");
            } else{
                $this->vidaAtual += $pontos;
            }
        } else{
            throw new InvalidArgumentException("Informe um valor de pontos de cura válido! (Sendo ele positivo)");
        }
    }

    public function executarAtaque(int $custoEnergia, int $danoBase): int
    {   
        if ($this->vidaAtual <= 0) {
            throw new InvalidArgumentException("Você não pode realizar ataques com um personagem derrotado!");
        }
        if ($this->energia < $custoEnergia) {
            throw new InvalidArgumentException("Você não pode realizar ataques com um personagem sem energia suficiente!");
        }

        $this->energia -= $custoEnergia;
        return $danoBase;
    }   
    
    public function descansar(): void 
    {   
        $this->energia = min(300, $this->energia + 30);
    }   
    
    public function estaVivo(): bool
    {
        if ($this->vidaAtual > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function status(): string
    {
        return "Nome: {$this->nome}" . PHP_EOL . "Vida maxima: {$this->vidaMaxima}" . PHP_EOL . "Vida atual: {$this->vidaAtual}" . PHP_EOL . "Energia: {$this->energia}";
    }
}
?>