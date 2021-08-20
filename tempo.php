<?php
 
if( isset($_POST) && !empty ($_POST) ){

    echo '<pre>';
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];

    $acumulador1=[];
    foreach($entrada as $value){

        $hora1 = explode(":", $value);
        $acumulador1[] = ($hora1[0] * 3600) + ($hora1[1] * 60);

    }
    $acumulador2=[];
    foreach($saida as $value){

        $hora2 = explode(":", $value);
        $acumulador2[] = ($hora2[0] * 3600) + ($hora2[1] * 60);

    }

    $resultado = array_sum($acumulador2) - array_sum($acumulador1);
    $hora_ponto = floor($resultado / 3600);
    $resultado = $resultado - ($hora_ponto * 3600);
    $min_ponto = floor($resultado / 60);
    $resultado = $resultado - ($min_ponto * 60);
    $secs_ponto = $resultado;
    
    $date = new DateTime();
    $date->setTime($hora_ponto, $min_ponto, $secs_ponto);
    echo $date->format('H:i:s');
   
}

?>