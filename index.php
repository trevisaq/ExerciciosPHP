<?php
require_once __DIR__ . '/vendor/autoload.php';

//  -------------------- LISTA DE EXERCICIOS --------------------

use App\{Aluno, Produto};
// Isso importa e usa as classes "Aluno" e "Produto" no código principal'

// 1. Criar classe produto com 
    // NOME, CATEGORIA, MARCA E PREÇO
    // Função detalhes() que retorna string
    // Criar 2 objetos

$Produto1 = new Produto('Sabonete', 'higiene', 'Avon', 8.99);
$Produto2 = new Produto('Martelo', 'ferramentas', 'Tramontina', 34.99);

echo "\n";
echo $Produto1->detalhes() . PHP_EOL; 
echo $Produto2->detalhes() . PHP_EOL; 

// 2. Criar classe aluno com 
    // NOME, RA, CURSO E SEMESTRE
    // Função apresentar() que retorna string
    // Criar 2 objetos

$Aluno1 = new Aluno('João', 2199678, 'Ciências da computação', 'Segundo');
$Aluno2 = new Aluno('Felipe', 2387317, 'Educação Física', 'Terceiro');

echo "\n";
echo $Aluno1->apresentar() . PHP_EOL; 
echo $Aluno2->apresentar() . PHP_EOL; 
echo "\n";


?>