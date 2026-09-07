<?php

namespace App;
use InvalidArgumentException;
class ConfiguracaoJogo
{
    // Função inicializadora, executada apenas qunado um objeto é criado
    public function __construct(
        private int $volume,
        private string $dificuldade,
        private bool $telaCheia = true
    ) {
        if ($this->volume > 100 || $this->volume < 0){
            throw new InvalidArgumentException("Erro!, o volume deve manter o limite entre 0 e 100");
        }
        if (trim($this->dificuldade) != 'facil' && trim($this->dificuldade) != 'normal' && trim($this->dificuldade) != 'dificil'){
            throw new InvalidArgumentException('Erro!, a dificuldade deve ser algo entre "facil", "normal" ou "dificil"');
        }
    }

    public function alterarVolume(int $valor): void
    {
        $this->volume =  max(0, min(100, $valor));
    }

    public function alterarDificuldade(string $novaDificuldade): void
    {
        if (trim($novaDificuldade) != 'facil' && trim($novaDificuldade) != 'normal' && trim($novaDificuldade) && 'dificil'){
            throw new InvalidArgumentException('Erro!, a dificuldade deve ser algo entre "facil", "normal" ou "dificil"');
        } else{
            $this->dificuldade = trim($novaDificuldade);
        }
    }

    public function alternarTelaCheia(bool $telaCheia): void
    {
        $this->telaCheia = $telaCheia;
    }


    public function resumo(): string
    {
        return "Volume configurado: {$this->volume}" . PHP_EOL . "Dificuldade configurada: {$this->dificuldade}" . PHP_EOL . "Tela cheia: " . ($this->telaCheia ? "Sim" : "Não") . PHP_EOL;
    }
}
?>