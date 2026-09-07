<?php
require_once __DIR__ . '/vendor/autoload.php';

// use App\{Aluno, Produto};
// // Isso importa e usa as classes "Aluno" e "Produto" no código principal'

// // 1. Criar classe produto com 
//     // NOME, CATEGORIA, MARCA E PREÇO
//     // Função detalhes() que retorna string
//     // Criar 2 objetos

// $Produto1 = new Produto('Sabonete', 'higiene', 'Avon', 8.99);
// $Produto2 = new Produto('Martelo', 'ferramentas', 'Tramontina', 34.99);

// echo "\n";
// echo $Produto1->detalhes() . PHP_EOL; 
// echo $Produto2->detalhes() . PHP_EOL; 

// // 2. Criar classe aluno com 
//     // NOME, RA, CURSO E SEMESTRE
//     // Função apresentar() que retorna string
//     // Criar 2 objetos

// $Aluno1 = new Aluno('João', 2199678, 'Ciências da computação', 'Segundo');
// $Aluno2 = new Aluno('Felipe', 2387317, 'Educação Física', 'Terceiro');

// echo "\n";
// echo $Aluno1->apresentar() . PHP_EOL; 
// echo $Aluno2->apresentar() . PHP_EOL; 
// echo "\n";















// //  ===================================== EXERCICIO 1 (RETANGULO) =====================================

// use App\Retangulo;

// $R1 = new Retangulo(20, 12);
// $R2 = new Retangulo(18, 15);
// $R3 = new Retangulo(4, 4);
// function DescobreQuadrado($retangulo){
//     if ($retangulo->ehQuadrado()){
//         $repo =  "É um quadrado!";
// } else {    
//         $repo = "NÃO É um quadrado!";
// }
//     return $repo;
// }

// function InformacoesGerais($retangulo, $nome){
//     echo "\n\n==================== Em relação ao {$nome} ====================\n\n";
//     echo $retangulo->CalcularArea();
//     echo "\n";
//     echo $retangulo->CalcularPerimetro();
//     echo "\n";
//     echo DescobreQuadrado($retangulo);
//     echo "\n\n===================================================================\n\n";

// }


// InformacoesGerais($R1, "retangulo 1");
// InformacoesGerais($R2, "retangulo 2");
// InformacoesGerais($R3, "retangulo 3");

// echo "\n\nRecalibrando area do retangulo 1...\n\n";
// $R1->Redimensionar(30, 10);

// InformacoesGerais($R1, "retangulo 1");















// //  ===================================== EXERCICIO 2 (CONTA BANCÁRIA) =====================================

// use App\ContaBancaria;

// $C1 = new ContaBancaria("Felipe Ferro", 15.99);
// $C2 = new ContaBancaria("Julio Martins", 321.41);

// echo "\n";
// echo "Saldo inicial: ";
// echo $C1->ConsultarSaldo() . PHP_EOL;
// $C1->Depositar(20);
// echo "Saldo pós deposito: ";
// echo $C1->ConsultarSaldo() . PHP_EOL;
// $C1->Sacar(30);
// echo "Saldo pós saque: ";
// echo $C1->ConsultarSaldo() . PHP_EOL;
// echo "\n";

// // ==================================== TESTES DE SAQUE E SALDO INVÁLIDO ====================================

// // $C1->Depositar(-20);
// // $C1->Depositar(0);
// // $C1->Sacar(10000000);
// // $C1->Sacar(0);

// echo "\n";
// echo $C1->Resumo();
// echo "\n\n==========================================\n\n";
// echo $C2->Resumo();
// echo "\n\n";















//  ========================================== EXERCICIO 3 (ALUNO) ==========================================

// use App\Aluno;

// $A1 = new Aluno('Felipe', 2199678, []);
// $A2 = new Aluno('Andersson', 2194578, [10, 8, 9, 0]);
// $A3 = new Aluno('Matheus', 3295678, [2, 2, 4, 7]);

// $A1->adicionarNota(8);
// $A1->adicionarNota(9);
// $A1->adicionarNota(10);
// $A1->adicionarNota(8);

// echo $A1->Resumo() . PHP_EOL;
// echo $A2->Resumo() . PHP_EOL;
// echo $A3->Resumo() . PHP_EOL;















// //  ================================= EXERCICIO 4 (PRODUTO DE E-COMMERCE) =================================

// use App\ProdutoEstoque;

// $P1 = new ProdutoEstoque('Sabão', 15.99, 20);
// $P2 = new ProdutoEstoque('Chocolate', 18.99, 10);

// echo $P1->Resumo() . PHP_EOL;

// echo "\n===============APÓS ALTERAÇÕES===============\n\n";

// $P1->reservar(15); // de 20 unidades caiu pra 5
// $P1->repor(8); // de 5 unidades subiu pra 13
// $P1->aplicarDesconto(20); // com o desconto de 20% o preco caiu de 15,99 para 12,79

// echo $P1->Resumo() . PHP_EOL;















// //  ================================= EXERCICIO 5 (TERMOSTATO INTELIGENTE) =================================

// use App\TermostatoInteligente;

// $T1 = new TermostatoInteligente(25.0, 17.0);
// $T2 = new TermostatoInteligente(12.0, 22.0);

// echo "\n====================== TERMOSTADO 1 ======================\n\n";
// echo "Ação necessária: " . $T1->acaoNecessaria() . PHP_EOL; // Verifica que está desligado
// $T1->ligar(); // Envio a ação para ligar
// echo "Ação necessária: " . $T1->acaoNecessaria() . PHP_EOL; // Le a temperatura alvo e define a ação necessária.

// echo "\n====================== TERMOSTADO 2 ======================\n\n";

// $T2->ligar();
// echo "Ação necessária: " . $T2->acaoNecessaria() . PHP_EOL; // Le a temperatura alvo e define a ação necessária.
// $T2->atualizarTemperaturaAtual(22); // Atualiza a temperatura atual do termostato 2
// echo "Ação necessária: " . $T2->acaoNecessaria() . PHP_EOL; // Percebe a nova temperatura e define a nova ação (se manter)















//  ====================================== EXERCICIO 6 (PERSONAGEM DE RPG) ======================================

// use App\PersonagemRPG;

// $P1 = new PersonagemRPG("Eleven", 150, 150, 300);
// $P2 = new PersonagemRPG("Demogorgon", 300, 300, 250);


// echo $P1->status();
// echo"\n========================= FICHAS =========================\n";
// echo $P2->status();


// $P1->sofrerDano($P2->executarAtaque(80, 70));   
// echo"\n\n";
// echo "1. Demogorgon ataca eleven!!, (Vida de eleven cai de 150 para 80. energia de demogorgon cai de 250 para 170)";
// echo"\n";
// $P1->curar(30); // Vida de Eleven sobe de 80 para 110
// echo"\n";
// echo "2. Eleven decide se curar para recuperar o hp perdido!!, (Vida de eleven sobe 30 pontos)";
// echo"\n";
// $P2->descansar(); // Demogorgon decide descansar para recuperar pontos de energia (170 -> 200)
// echo"\n";
// echo "3. Demogordon decide se curar!! (demogorgon recupera 30 pontos de energia)";
// echo"\n";
// $P2->sofrerDano($P1->executarAtaque(280, 500));
// echo"\n";
// echo "4. Eleven utiliza toda sua energia para matar Demogorgon com um ataque surpresa!!! (A vida de demogorgon e a energia de Eleven zera)";
// echo"\n";
// if ($P2->estaVivo()){
//     echo "\nDemogorgon segue com vida!";
// } else{
//     echo "\nDemogorgon foi derrotado!!!";
// }
// echo"\n\n";


// echo $P1->status();
// echo"\n========================= FICHAS PÓS BATALHA =========================\n";
// echo $P2->status();


// echo"\n========================= TESTES PÓS BATALHA =========================\n";


// $P1->executarAtaque(280, 500); // Erro ao tentar realizar ataque sem energia
// $P1->curar(500); // Erro ao tentar curar a vida acima da vida máxima
// echo $P1->status();















// //  ====================================== EXERCICIO 7 (PET VIRTUAL) ======================================

// use App\PetVirtual;

// $caramelo = new PetVirtual("Caramelo", 10, 60, 50);

// echo $caramelo->status();
// echo "\n\n";
// $caramelo->brincar("lutinha");
// $caramelo->brincar("correr");
// $caramelo->brincar("pular");
// $caramelo->brincar("rolar");
// echo "\n";
// $caramelo->alimentar("biscoitos scooby");
// echo "\n";
// $caramelo->dormir();
// echo "\n\n";
// echo $caramelo->status();
// echo "\n\n";

// // echo"\n========================= TESTES DE LIMITADOR =========================\n";

// // // O DOG ENTROU EM COMA
// // $caramelo->dormir();
// // $caramelo->dormir();
// // $caramelo->dormir();
// // $caramelo->dormir();
// // $caramelo->dormir();
// // echo "\n\n";
// // echo $caramelo->status();
// // echo "\n\n";
// // // O DOG FICOU DOIDO
// // $caramelo->brincar("correr");
// // $caramelo->brincar("correr");
// // $caramelo->brincar("correr");
// // $caramelo->brincar("correr");
// // $caramelo->brincar("correr");
// // $caramelo->brincar("correr");
// // echo "\n\n";
// // echo $caramelo->status();
// // echo "\n\n";














//  ====================================== EXERCICIO 8 (CARTEIRA DIGITAL) ======================================

// use App\CarteiraDigital;

// $CD1 = new CarteiraDigital("Felipe Motta", 25.50, 700, 0);
// echo $CD1->resumo();

// echo "\n\n";
// $CD1->receber(2000);
// echo "\n";
// $CD1->pagarPix(680);
// echo "\n";
// echo "Você possui um saldo de R$ " . $CD1->consultarSaldo() . PHP_EOL;
// echo "Você possui um limite diário de R$ " . $CD1->consultarLimiteDisponivel() . PHP_EOL;
// echo "\n";
// echo "================================ NOVO DIA SE INICIA ================================" . PHP_EOL;
// $CD1->iniciarNovoDia(); // Reinicio o gasto diário da conta, permitindo novas transições
// echo "====================================================================================" . PHP_EOL;
// echo "\n";
// echo "Você possui um saldo de R$ " . $CD1->consultarSaldo() . PHP_EOL;
// echo "Você possui um limite diário de R$ " . $CD1->consultarLimiteDisponivel() . PHP_EOL;
// echo "\n";
// $CD1->pagarPix(400);
// echo "\n";

// echo $CD1->resumo();













// // ===================================== EXERCICIO 9 (CONFIGURAÇÃO DE JOGO) =====================================

// use App\ConfiguracaoJogo;
// $original = new ConfiguracaoJogo(80, "normal", True);

// echo "\n================ CONFIG ORIGINAL ================\n";
// echo $original->resumo();
// echo "=================================================\n";

// $copia = clone $original; // Faço a instancia copia pra poder salvar a config original
// $atalho = $original; // Faço a instancia atalho pra poder alterar a config original indiretamente

// $atalho->alterarDificuldade("facil");
// $atalho->alterarVolume(30);
// $atalho->alternarTelaCheia(false);


// echo "\n\n";
// echo "\n------ VERIFICAÇÃO DE ATALHOS PÓS ALTERAÇÃO -----\n\n";

// function ehIgual($config1, $config2){
//     if ($config1 === $config2){
//         return 'Sim!';
//     } else {
//         return 'Não!';
//     }
// }
// echo "O Atalho é igual ao Original? " . ehIgual($atalho, $original) . PHP_EOL; // (os quais foram afetados pelo atalho, logo, sao iguais)
// echo "A Copia é igual ao Original? " . ehIgual($copia, $original) . PHP_EOL; // (o qual o original foi alterado pelo atalho, logo a copia e o original são diferentes)
// echo "\n\n";


// echo "\n================== CONFIG COPIA =================\n";
// echo $copia->resumo();
// echo "=================================================\n";

// echo "\n================ CONFIG ORIGINAL ================\n";
// echo $original->resumo();
// echo "=================================================\n";

// echo "\n================== CONFIG ATALHO ================\n";
// echo $atalho->resumo();
// echo "=================================================\n";













//  ======================================= EXERCICIO 10 (DRONE DE ENTREGA) =======================================

use App\DroneEntrega;

// Crio um drone somente com as informações que preciso, o identificador e a carga maxima (deixando o resto ser pré-setado pelo __construct)
$PrimeiroDrone = new DroneEntrega("3128e36", 200); 
$SegundoDrone = new DroneEntrega("4128e38", 100, "disponivel", 0, 100); // Demonstro que podeira sim definir as caracteristicas pelo index sem problema



echo "\n\n-------------------- PRIMEIRA ENTREGA DO PRIMEIRO DRONE --------------------\n\n";
$PrimeiroDrone->carregarPacote(155); // 1. Faço o drone coletar a carga de 155kg
$PrimeiroDrone->decolar(6.2);        // 2. Faço o drone decolar definindo sua distância de viagem
$PrimeiroDrone->finalizarEntrega();  // 3. Faço o drone finalizar a entrega e retornar a "base de abastecimento"
$PrimeiroDrone->recarregar();        // 4. Restauro a carga do drone para 100%
echo $PrimeiroDrone->status();       // 5. Mostro o status do drone após entregar o pacote e recarregar.
echo "\n\n----------------------------------------------------------------------------\n\n";



echo "\n\n--------------------- SEGUNDA ENTREGA DO PRIMEIRO DRONE --------------------\n\n";
$PrimeiroDrone->carregarPacote(180); // 1. Faço o drone coletar a carga de 180kg
$PrimeiroDrone->decolar(4.8);        // 2. Faço o drone decolar definindo sua distância de viagem
$PrimeiroDrone->finalizarEntrega();  // 3. Faço o drone finalizar a entrega e retornar a "base de abastecimento"
echo $PrimeiroDrone->status();       // 4. Mostro o status do drone após entregar o pacote (antes de recarregar).
echo "\n\n----------------------------------------------------------------------------\n\n";




echo "\n\n============================ DOIS DRONES EM CONJUNTO =======================\n\n";
$PrimeiroDrone->recarregar();        // Restauro a carga do primeiro drone para 100%
$PrimeiroDrone->carregarPacote(110); // 1. Faço o drone coletar a carga de 110kg
$PrimeiroDrone->decolar(4);          // 2. Faço o drone decolar definindo sua distância de viagem

$SegundoDrone->carregarPacote(50);   // 1. Faço o drone coletar a carga de 50kg
$SegundoDrone->decolar(5);           // 2. Faço o drone decolar definindo sua distância de viagem
$SegundoDrone->finalizarEntrega();   // 3. Faço o drone finalizar a entrega e retornar a "base de abastecimento"


echo "DRONE 1: " . $PrimeiroDrone->status() . PHP_EOL;
echo "\n\n";
echo "DRONE 2: " . $SegundoDrone->status();
echo "\n\n============================================================================\n\n";


?>
