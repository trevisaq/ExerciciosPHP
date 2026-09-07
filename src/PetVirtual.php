<?php

namespace App;
use InvalidArgumentException;
class PetVirtual
{
    // Função inicializadora, executada apenas qunado um objeto é criado
    public function __construct(
        private string $nome,
        private int $fome = 25,
        private int $energia = 75,
        private int $felicidade = 80
    ) {
        if (trim($this->nome) === ''){
            throw new InvalidArgumentException("É necessário informar o nome do pet");
        }
    }

    private function limitar(int $valor): int
    {
        return max(0, min(100, $valor));
    }

    public function alimentar(string $comida): void
    {

        $this->fome = $this->limitar($this->fome - 20);
        $this->energia = $this->limitar($this->energia + 10);
        $this->felicidade = $this->limitar($this->felicidade + 5);
        echo "O pet foi alimentado com $comida!, seus pontos de energia e felicidade aumentaram, enquanto seus pontos de fome diminuiram." . PHP_EOL;
    }

    public function brincar(string $brincadeira): void
    {
        $this->fome = $this->limitar($this->fome + 15);
        $this->energia = $this->limitar($this->energia - 10);
        $this->felicidade = $this->limitar($this->felicidade + 15);
        echo "Você brincou de $brincadeira com seu pet!, seus pontos de fome e felicidade aumentaram, enquanto seus pontos de energia diminuiram." . PHP_EOL;
    }

    public function dormir(): void
    {
        $this->energia = $this->limitar($this->energia + 25);
        echo "Seu pet resolveu tirar uma soneca!, seus pontos de energia aumentaram." . PHP_EOL;
    }

    public function status(): string
    {
        return "Nome: {$this->nome}" . PHP_EOL . "Nivel de fome: {$this->fome}" . PHP_EOL . "Nivel de energia: {$this->energia}" . PHP_EOL . "Nivel de felicidade: {$this->felicidade}";
    }
}
?>