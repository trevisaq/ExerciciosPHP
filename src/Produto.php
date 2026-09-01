<?php

// Faz parte da PSR-4 
// É utilizado para autoload de classes
namespace App;
class Produto
{
    // Função inicializadore, exeuctada apenas qunado um objeto é criado
    public function __construct(
        public string $nome,
        public string $categoria,
        public string $marca,
        public float $preco
    ) {}

    public function detalhes(): string
    {
        // This é uma palavra reservada que indica que o atributo(variável)
        // é da classe e não exclusivo da função, logo
        // sempre que vou acessar um atributo da classe, uso "this"
        return "{$this->nome} da marca {$this->marca} é da categoria {$this->categoria} e custa {$this->preco}";
    }

}
?>