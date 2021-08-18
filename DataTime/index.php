<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Tempo</title>
</head>

<body>
<input type="time" id="appt" name="hour_start" required>
<input type="time" id="appt" name="hour_end" required>

    <?php
    $entrada = '17:00:00';
    $saida = '05:30:00';
    $hora1 = explode(":", $entrada);
    $hora2 = explode(":", $saida);
    $acumulador1 = ($hora1[0] * 3600) + ($hora1[1] * 60);
    $acumulador2 = ($hora2[0] * 3600) + ($hora2[1] * 60);
    $resultado = $acumulador2 - $acumulador1;
    $hora_ponto = floor($resultado / 3600);
    $resultado = $resultado - ($hora_ponto * 3600);
    $min_ponto = floor($resultado / 60);
    $resultado = $resultado - ($min_ponto * 60);
    $secs_ponto = $resultado;
    $date = new DateTime();
    $date->setTime($hora_ponto, $min_ponto, $secs_ponto);
    echo $date->format('H:i:s');
    ?>

</body>

</html>