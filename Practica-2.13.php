<?php

$fecha = date_create('2019-09-16');
$minutos = 0;

for ($horas=0; $horas <= 23; $horas++) {     
    for ($cuartos=0; $cuartos < 4; $cuartos++) {
        date_time_set($fecha, 0, $minutos);
        echo date_format($fecha, 'H:i');
        echo "<br>";
        $minutos = $minutos + 15;
    }
    echo "<br>";
}

?>