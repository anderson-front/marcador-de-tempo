<?php

class Biblioteca
{
    const nome="GTK ";
}

class Aplicacao extends Biblioteca
{
    const ambiente = "Gnome Desktop ";
    const versao = "3.8 ";

    function __construct($nome)
    {
        echo parent::nome.self::ambiente.self::versao. $nome . "<br>";
    }    
}

echo Biblioteca::nome.Aplicacao::ambiente.Aplicacao::versao. "<br>";

new Aplicacao('Dia');
new Aplicacao('Gimp');