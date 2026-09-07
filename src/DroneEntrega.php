<?php

namespace App;
use InvalidArgumentException;
class DroneEntrega
{
    // Função inicializadora, executada apenas qunado um objeto é criado
    public function __construct(
        private string $identificador,
        private float $cargaMaximaKg,
        // Defino os atributos de status, carga maxima e bateria no construct no caso de não digitar, já vir com esse default
        private string $status = "disponivel", 
        private float $cargaAtualKg = 0,
        private int $bateria = 100
    ) {
        if (trim($this->identificador) === ''){
            throw new InvalidArgumentException("É necessário informar um identificador para o drone");
        }
        if ($this->cargaMaximaKg <= 0){
            throw new InvalidArgumentException("É necessário informar uma carga máxima válida para o drone!");
        }
        if ($this->status != "disponivel"){
            throw new InvalidArgumentException("Erro!, para cadastrar um drone, ele precisa iniciar como disponível.");
        }
        if ($this->cargaAtualKg != 0){
            throw new InvalidArgumentException("Erro!, para cadastrar um drone, ele precisa iniciar com carga atual igual a zero.");
        }
        if ($this->bateria != 100){
            throw new InvalidArgumentException("Erro!, para cadastrar um drone, ele precisa iniciar com a bateria cheia (100).");
        }
    }

    private function consumoEstimado(float $distanciaKm): int
    {
        $consumo = $distanciaKm * 15; // 1km = 15% de bateria
        return $consumo;
    }


    public function carregarPacote(float $peso): void
    {
        if ($peso <= 0){
            throw new InvalidArgumentException("O peso deve ser maior que zero para iniciar o percurso!");
        } elseif ($peso > $this->cargaMaximaKg){
            throw new InvalidArgumentException("O peso deve estar dentro do limite da carga máxima do drone!");
        } elseif ($this->status != "disponivel"){
            throw new InvalidArgumentException("O drone precisa estar disponível para iniciar o percurso!");
        } else{
            $this->cargaAtualKg = $peso; // O drone coleta o pacote
        }
    }

    public function decolar(float $distanciaKm): void
    {
        if ($this->cargaAtualKg <= 0){
            throw new InvalidArgumentException("Para iniciar um percurso, carregue algum pacote primeiro!");
        } elseif ($this->consumoEstimado($distanciaKm) >= $this->bateria){
            throw new InvalidArgumentException("Erro!, o drone não possui bateria suficiente para realizar essa viagem.");
        } else {
            $this->bateria -= $this->consumoEstimado($distanciaKm);
            $this->status = "em_voo"; // O drone muda o status
        }
    }

    public function finalizarEntrega(): void
    {
        $this->cargaAtualKg = 0; // O drone deixa o pacote
        $this->status = "disponivel"; // O drone retorna o status para disponivel
    }

    public function recarregar(): void
    {
        if ($this->status != "disponivel"){
            throw new InvalidArgumentException("Erro!, o drone não pode inicar o recarregamento enquanto estiver em voo");
        } else{
            $this->bateria = 100;
        }
    }

    public function status(): string{
        if ($this->status != "disponivel"){
            $status = "em percurso/voo";
            return "O drone referenciado está atualmente {$status}." . PHP_EOL . "Sua carga atual é de {$this->cargaAtualKg}Kg" . PHP_EOL . "[Bateria em {$this->bateria}%]";
        } else{
            $status = "em espera/disponível";
            return "O drone referenciado está atualmente {$status}." . PHP_EOL . "[Bateria em {$this->bateria}%]";
        }

    }
}
?>