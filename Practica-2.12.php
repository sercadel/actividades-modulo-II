<?php
/*
for ($hora=0; $hora <= 23; $hora++) { 
    echo $hora . ":00";
    echo "<br>";
}*/

$fecha = date_create('2019-09-16');
$hora = 0;

for ($horas=0; $horas <= 23; $horas++) {
    date_time_set($fecha, $hora, 0);
    echo date_format($fecha, 'H:i');
    echo "<br>";
    $hora++;
}

?>