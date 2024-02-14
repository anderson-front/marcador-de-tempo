<?php

namespace Source\Loading;

require __DIR__.'/fullstackphp/fsphp.php';

class CalculadoraTempo {

    private $entrada;
    private $saida;

    public function __construct($entrada, $saida)
    {
        $this->entrada = $entrada;
        $this->saida = $saida;
    }

    public function calculaDiferenca()
    {
    }

    private function formtatarTempo($segundos) 
    {

    }
}