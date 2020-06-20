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

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <title>Práctica 2.8</title>
        <style>
            table {
                margin: auto;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                min-width: 70px;
            }
            .derecha {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Producto</th>
                <th>Precio/Kg</th>
                <th>Peso</th>
                <th>Precio</th>
            </tr>
            <tr>
                <td>Judías</td>
                <td class="derecha"><?php echo PRECIO_JUDIAS; ?></td>
                <td class="derecha"><?php echo $pesoJudias; ?></td>
                <td class="derecha"><?php echo round($costeJudias, 2); ?></td>
            </tr>
            <tr>
                <td>Patatas</td>
                <td class="derecha"><?php echo PRECIO_PATATAS; ?></td>
                <td class="derecha"><?php echo $pesoPatatas; ?></td>
                <td class="derecha"><?php echo round($costePatatas, 2); ?></td>
            </tr>
            <tr>
                <td>Tomates</td>
                <td class="derecha"><?php echo PRECIO_TOMATES; ?></td>
                <td class="derecha"><?php echo $pesoTomates; ?></td>
                <td class="derecha"><?php echo round($costeTomates, 2); ?></td>
            </tr>
            <tr>
                <td>Manzanas</td>
                <td class="derecha"><?php echo PRECIO_MANZANAS; ?></td>
                <td class="derecha"><?php echo $pesoManzanas; ?></td>
                <td class="derecha"><?php echo round($costeManzanas, 2); ?></td>
            </tr>
            <tr>
                <td>Uvas</td>
                <td class="derecha"><?php echo PRECIO_UVAS; ?></td>
                <td class="derecha"><?php echo $pesoUvas; ?></td>
                <td class="derecha"><?php echo round($costeUvas, 2); ?></td>
            </tr>

            <tr>
                <td colspan="3">Total:</td>
            <?php
            $total = $costeJudias + $costePatatas
                    + $costeTomates + $costeManzanas + $costeUvas;
            ?>
                <td class="derecha"><b><?php echo round($total, 2); ?></b></td>
            </tr>
            <tr>
                <td colspan="4">Gracias por su compra.</td>
            </tr>
        </table>
    </body>
</html>