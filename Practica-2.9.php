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

$precioMaximo = 1.5;

?>

<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible" content=\"ie=edge\">
        <meta name=\"description" content=\"\">
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
            <?php
            if (PRECIO_JUDIAS < $precioMaximo) {
                echo "<tr>";
                echo "<td>Judías</td>";
                echo "<td class=\"derecha\">" . PRECIO_JUDIAS . "</td>";
                echo "<td class=\"derecha\">" . $pesoJudias . "</td>";
                echo "<td class=\"derecha\">" . round($costeJudias, 2) . "</td>";
                echo "</tr>";
            } else {
                $costeJudias = 0;
            }

            if (PRECIO_PATATAS < $precioMaximo) {
                echo "<tr>";
                echo "<td>Patatas</td>";
                echo "<td class=\"derecha\">" . PRECIO_PATATAS . "</td>";
                echo "<td class=\"derecha\">" . $pesoPatatas . "</td>";
                echo "<td class=\"derecha\">" . round($costePatatas, 2) . "</td>";
                echo "</tr>";
            } else {
                $costePatatas = 0;
            }

            if (PRECIO_TOMATES < $precioMaximo) {
                echo "<tr>";
                echo "<td>Tomates</td>";
                echo "<td class=\"derecha\">" . PRECIO_TOMATES . "</td>";
                echo "<td class=\"derecha\">" . $pesoTomates . "</td>";
                echo "<td class=\"derecha\">" . round($costeTomates, 2) . "</td>";
                echo "</tr>";
            } else {
                $costeTomates = 0;
            }

            if (PRECIO_MANZANAS < $precioMaximo) {
                echo "<tr>";
                echo "<td>Manzanas</td>";
                echo "<td class=\"derecha\">" . PRECIO_MANZANAS . "</td>";
                echo "<td class=\"derecha\">" . $pesoManzanas . "</td>";
                echo "<td class=\"derecha\">" . round($costeManzanas, 2) . "</td>";
                echo "</tr>";
            } else {
                $costeManzanas = 0;
            }

            if (PRECIO_UVAS < $precioMaximo) {
                echo "<tr>";
                echo "<td>Uvas</td>";
                echo "<td class=\"derecha\">" . PRECIO_UVAS . "</td>";
                echo "<td class=\"derecha\">" . $pesoUvas . "</td>";
                echo "<td class=\"derecha\">" . round($costeUvas, 2) . "</td>";
                echo "</tr>";
            } else {
                $costeUvas = 0;
            }

            ?>

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