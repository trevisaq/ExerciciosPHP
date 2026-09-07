<?php

namespace App;
use InvalidArgumentException;

class CarteiraDigital
{
    // Função inicializadore, exeuctada apenas qunado um objeto é criado
    public function __construct(
        private string $proprietario,
        private float $saldo,
        private int $limiteDiario,
        private float $gastoHoje
    ) {
        if (trim($this->proprietario) === ''){
            throw new InvalidArgumentException("É necessário informar um nome para o proprietario da conta");
        }
        if ($this->saldo < 0){
            throw new InvalidArgumentException("É necessário informar um saldo positivo para a conta");
        }
        if ($this->limiteDiario < 0){
            throw new InvalidArgumentException("É necessário informar um limite diário positivo para a conta");
        }
        if ($this->gastoHoje != 0){
            throw new InvalidArgumentException("O gasto diário deve começar como 0 para a criação da conta");
        }
    }


    private function validarPagamento(float $valor): void
    {   
        if($valor <= 0){
            throw new InvalidArgumentException("Erro ao realizar o pagamento!, você deve digitar um valor válido (maior que zero)");
        } elseif ($this->saldo < $valor){
            throw new InvalidArgumentException("Erro ao realizar o pagamento!, você não possui saldo suficiente.");
        } elseif(($this->gastoHoje + $valor) > $this->limiteDiario){
            throw new InvalidArgumentException("Erro ao realizar o pagamento!, o valor do pix excede o limite diário de transações.");
        }
    }


    public function receber(float $valor): void
    {
        $this->saldo += $valor;
        echo "Você recebeu um pagamento!, você agora possui R$ {$this->saldo} na conta" . PHP_EOL;
    }


    public function pagarPix(float $valor): void
    {   
        $this->validarPagamento($valor);
        $this->saldo -= $valor;
        $this->gastoHoje += $valor;
        echo "Você realizou um Pix de R$ {$valor}!, você agora possui R$ {$this->saldo} na conta" . PHP_EOL;
    }


    public function iniciarNovoDia(): void
    {
        $this->gastoHoje = 0;
        echo "Um novo dia se iniciou!, o gasto diário resetou." . PHP_EOL;
    }


    public function consultarSaldo(): float
    {
        return $this->saldo;
    }


    public function consultarLimiteDisponivel(): float
    {
        return $this->limiteDiario - $this->gastoHoje;
    }


    public function resumo(): string
    {
        return "Proprietário da conta: {$this->proprietario}" . PHP_EOL . "Saldo na conta: {$this->consultarSaldo()}" . PHP_EOL . "Limite disponível: {$this->consultarLimiteDisponivel()}" . PHP_EOL . "Total de gastos de hoje: {$this->gastoHoje}";
    }
}
?>