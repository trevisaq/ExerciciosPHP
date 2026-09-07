<?php

// Faz parte da PSR-4 
// É utilizado para autoload de classes
namespace App;
class Pessoa
{
    // Função inicializadora, executada apenas qunado um objeto é criado
    public function __construct(
        public string $nome,
        public int $idade
    ) {}

    public function apresentar(): string
    {
        // This é uma palavra reservada que indica que o atributo(variável)
        // é da classe e não exclusivo da função, logo
        // sempre que vou acessar um atributo da classe, uso "this"
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos";
    }

}
?>