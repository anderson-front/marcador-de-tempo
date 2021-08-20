<?php

class Aplicacao
{
    static  $quantidade;

    function __construct($valor)
    {
        self::$quantidade++;
        $i = self::$quantidade;

        echo "Nova Aplicação nº $i : $valor <br>";
    }
}

new Aplicacao("Rodobank");
new Aplicacao("Fitbank");
new Aplicacao("Sinc");
new Aplicacao("Taylor");
new Aplicacao("Jetro");