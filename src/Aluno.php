<?php

// Faz parte da PSR-4 
// É utilizado para autoload de classes
namespace App;
class Aluno
{
    // Função inicializadore, exeuctada apenas qunado um objeto é criado
    public function __construct(
        public string $nome,
        public int $ra,
        public string $curso,
        public string $semestre
    ) {}

    public function apresentar(): string
    {
        // This é uma palavra reservada que indica que o atributo(variável)
        // é da classe e não exclusivo da função, logo
        // sempre que vou acessar um atributo da classe, uso "this"
        return "O aluno chamado {$this->nome}, (RA {$this->ra}), cursa {$this->curso} e está no {$this->semestre} semestre";
    }

}
?>