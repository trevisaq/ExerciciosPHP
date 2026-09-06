<?php

namespace App;
use InvalidArgumentException;

class TermostatoInteligente
{
    // Função inicializadore, exeuctada apenas qunado um objeto é criado
    public function __construct(
        private float $temperaturaAtual,
        private float $temperaturaAlvo,
        private bool $ligado = false
    ) {
        if ($this->temperaturaAlvo < 16 || $this->temperaturaAlvo > 30){
            throw new InvalidArgumentException("É necessário informar uma temperatura alvo que esteja entre 16 e 30 graus.");
        }
    }

    public function ligar(): void
    {
        $this->ligado = true;
    }

    public function desligar(): void
    {
        $this->ligado = false;
    }

    public function definirTemperaturaAlvo(float $temperatura): void
    {
        $this->temperaturaAlvo = $temperatura;
    }

    public function atualizarTemperaturaAtual(float $temperatura): void
    {
        $this->temperaturaAtual = $temperatura;
    }

    public function acaoNecessaria(): string
    {
        if($this->ligado == false){
            return "desligado";
        }
        if($this->temperaturaAtual < $this->temperaturaAlvo){
            $this->ligado = True;
            return "aquecer";
        }
        if($this->temperaturaAtual > $this->temperaturaAlvo){
            $this->ligado = True;
            return "resfriar";
        }
        if($this->temperaturaAtual == $this->temperaturaAlvo){
            $this->ligado = True;
            return "manter";
        }
    }
}
?>