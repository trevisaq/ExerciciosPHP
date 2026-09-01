<?php

namespace App;

use InvalidArgumentException;
class Retangulo
{
    public function __construct(
        private float $altura,
        private float $largura
    ) {
        if($this->altura <= 0){
            throw new InvalidArgumentException('A altura deve ser maior que zero');
        }
        if($this->largura <= 0){
            throw new InvalidArgumentException('A largura deve ser maior que zero');
        }
    }

    public function CalcularArea(): string
    {
        $area = $this->altura * $this->largura;
        return "A area do retangulo é: {$area}";
    }

    public function CalcularPerimetro(): string
    {
        $perimetro = $this->altura*2 + $this->largura*2;
        return "O perimetro do retangulo é: {$perimetro}";
    }

    public function ehQuadrado(): bool
    {
        return $this->altura == $this->largura;
    }

    public function Redimensionar(float $largura, float $altura): void
    {
        if($this->altura <= 0){
            throw new InvalidArgumentException('A altura deve ser maior que zero');
        }
        if($this->largura <= 0){
            throw new InvalidArgumentException('A largura deve ser maior que zero');
        }
        
        $this->altura = $altura;  
        $this->largura = $largura;  
    }

}
?>