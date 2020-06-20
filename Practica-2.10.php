<?php

define("PRECIO_JUDIAS", 3.5);
define("PRECIO_PATATAS", 0.4);
define("PRECIO_TOMATES", 1);
define("PRECIO_MANZANAS", 1.2);
define("PRECIO_UVAS", 2.5);

$pesoJudias = 1.21;
$pesoPatatas = 1.73;
$pesoTomates = 2.08;
$pesoManzanas = 2.15;
$pesoUvas = 0.77;

$costeJudias = PRECIO_JUDIAS * $pesoJudias;
$costePatatas = PRECIO_PATATAS * $pesoPatatas;
$costeTomates = PRECIO_TOMATES * $pesoTomates;
$costeManzanas = PRECIO_MANZANAS * $pesoManzanas;
$costeUvas = PRECIO_UVAS * $pesoUvas;

function compararPrecio($valor1, $valor2)
{
    if ($valor1 < $valor2) {
        echo " vale menos que ";
    }
    if ($valor1 > $valor2) {
        echo " vale más que ";
    }
    if ($valor1 == $valor2) {
        echo " vale igual que ";
    }
}

$productos = array(
    array('Judias', PRECIO_JUDIAS),     // [0][0], [0][1]
    array('Patatas', PRECIO_PATATAS),   // [1][0], [1][1]
    array('Tomates', PRECIO_TOMATES),   // [2][0], [2][1]
    array('Manzanas', PRECIO_MANZANAS), // [3][0], [3][1]
    array('Uvas', PRECIO_UVAS)          // [4][0], [4][1]
);

$longitud = count($productos);
$y = 0;
$x = 0;

for ($i=0; $i < $longitud; $i++) {
    for ($j=1; $j < $longitud; $j++) {
        // Evita comparar el mismo producto y pasa al siguiente
        if ($x == $y) {
            $x = $x + 1;
        }
        // Si el valor del siguiente producto supera el número de productos,
        // pasa al primer producto
        if ($x >= $longitud) {
            $x = 0;
        }

        echo $productos[$y][0] . " (" . $productos[$y][1] . ") ";
        compararPrecio(
            ($productos[$y][1]),
            ($productos[$x][1])
        );

        echo $productos[$x][0] . " (" . $productos[$x][1] . ") ";
        echo "<br>";
        echo "<br>";

        $x++;
    }
    $y++;
    echo "<br><br>";
}

?>