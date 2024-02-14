<?php

require __DIR__.'/fullstackphp/fsphp.php';

// fullStackPHPClassSession("", __LINE__);
 
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];    
    $acumulador1=[];
    
    foreach($entrada as $value){

        if(!empty($value)){

            $hora1 = explode(":", $value);       
            $acumulador1[] = ($hora1[0] * 3600) + ($hora1[1] * 60);
            
        }else{
            echo 'Informe a hora Inicial';
            return;
        }

    }
    $acumulador2=[];
    foreach($saida as $value){

        if(!empty($value)){
        
            $hora2 = explode(":", $value);
            $acumulador2[] = ($hora2[0] * 3600) + ($hora2[1] * 60);
        }else{
            echo 'Informe a hora Final';
            return;
        }

    }
    $resultadoTime = array_sum($acumulador2) - array_sum($acumulador1);
    $hora_ponto = floor($resultadoTime / 3600);
    $resultadoMinutos = $resultadoTime - ($hora_ponto * 3600);
    $min_ponto = floor($resultadoMinutos / 60);
    $resultadoSegundos = $resultadoMinutos - ($min_ponto * 60);
    $secs_ponto = $resultadoSegundos;
   
    $date = new DateTime();
    $date->setTime($hora_ponto, $min_ponto, $secs_ponto);
    echo $date->format('H:i:s');