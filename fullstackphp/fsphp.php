<?php
/**
 * Document content and charset
 */
// header("Content-Type: text/html; charset=utf-8");


/**
 * [ PHP Basic Config ] Configurações basicas do sistema
 * Configura o timezone da aplicação
 * Define a função para output de erros.
 */
// date_default_timezone_set("America/Sao_Paulo");
// set_error_handler("fullStackPHPErrorHandler");



/**
 * [ interface ] Style, icon and logo
 */
echo "<link rel='stylesheet' href='../../fullstackphp/fsphp.css'/>";



/**
 * [ Title Function ] Cria o título do arquivo para o browser
 */
// function fullStackPHPClassName($className)
// {
//     echo "<title>{$className} | Full Stack PHP Developer</title>";
// }


/**
 * [ Debug session ] Cria uma linha de sessão para exemplos
 * @var $color = red | green | yellow | blue
 * @var line = __LINE__
 */
// function fullStackPHPClassSession($session, $line, $color = null)
// {
//     $line = (!empty($line) ? " <span class='line-session'>| Linha {$line}</span>" : "");
//     $session = (!empty($session) ? "[ {$session}{$line} ]" : "");
//     $color = (!empty($color) ? "var(--{$color})" : "");
//     echo "<div class='code line' style='background-color: {$color}'>{$session}</div>";
// }


/**
 * [ Default errors ] Função para exibir erros do PHP
 */
function fullStackPHPErrorHandler($error, $message, $file, $line)
{
    $color = ($error == E_USER_ERROR ? "red" : "yellow");
    echo "<div class='trigger' style='border-color: var(--{$color}); color:var(--{$color});'>[ Linha {$line} ] {$message}<small>{$file}</small></div>";
}
