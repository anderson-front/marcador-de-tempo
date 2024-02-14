<?php

spl_autoload_register(function($class) {
    $prefix = "Source\\"; // Fornecedor da aplicação
    $baseDir = __DIR__ ."/";
    $len = strlen($prefix); // 7 caracteres
    
    // echo '<pre>';
    // var_dump([$prefix,$baseDir,$len]);


    // echo 'class';
    // echo '<pre>';
    
    // var_dump([$prefix,$class]);
    // var_dump(strncmp($prefix,$class,$len)); // os 7 primeiros caracteres são iguais?
    // Verifica se o $prefix e a $class dentro de $len ou seja os primeiros caracteres que é a pasta source não retorna 1, ou seja seria um fornecedor diferente
    if(strncmp($prefix,$class,$len) !== 0) { // diferente de 0 é porque não é igual
        return;
    }

    $relativeClass = substr($class,$len);

    // echo 'RelativeClass';
    // echo '<pre>';
    // var_dump([$relativeClass,$len]);

    // var_dump($baseDir);
    $file =   $baseDir. str_replace("\\","/", $relativeClass).".php";
    // var_dump($file);

    // echo 'file';
    // echo '<pre>';
    // var_dump($file);

    if(file_exists($file)){
        require $file;
    }
});

/***
 * strncmp
 * 
 */

// $var1 = 'Hello John';
// $var2 = 'Hello Doe';
// if (strncmp($var1, $var2, 7) === 0) {
//     echo 'os primeiros 5 caracteres de $var 1 e $var 2 são iguais em uma comparação de sequência sensível a caso"';
// } else{
//     echo 'Não são iguais apartir do setimo caractere';
// }



