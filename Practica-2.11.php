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
        <title>Práctica 2.11</title>
        <style>
            .contenedor {
                margin-top: auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            form, .resultado {
                margin: 2% auto 0%;
            }
        </style>
    </head>
    <body>
        <div class="contenedor">
            <form action="" method="post">
                Introduzca un producto: <input type="text" name="consulta">
                <input type="submit" name="enviar" value="Ver precio">
            </form>
            <div class="resultado">

                <?php
                
                if (!empty($_POST['consulta'])) {
                    switch (trim(strtolower($_POST['consulta']))) {
                        case "judias":
                            echo "El precio de las judias es de <b>" . PRECIO_JUDIAS . " €/Kg</b>" ;
                            break;
                        case "patatas":
                            echo "El precio de las patatas es de <b>" . PRECIO_PATATAS . " €/Kg</b>" ;
                            break;
                        case "tomates":
                            echo "El precio de los tomates es de <b>" . PRECIO_TOMATES . " €/Kg</b>" ;
                            break;
                        case "manzanas":
                            echo "El precio de las manzanas es de <b>" . PRECIO_MANZANAS . " €/Kg</b>" ;
                            break;
                        case "uvas":
                            echo "El precio de las uvas es de <b>" . PRECIO_UVAS . " €/Kg</b>" ;
                            break;
                        default:
                        echo "No quedan existencias de esta fruta.";
                    }
                } else {
                    echo "Introduzca un producto para ver su precio";
                }
                
                ?>
            </div>
        </div>
    </body>
</html>