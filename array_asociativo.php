<?php

$array = [
    "Coche" => ["nombre" => "rojo", "hex" => "#FF0000"],
    "Moto" => ["nombre" => "verde", "hex" => "#00FF00"],
    "Avión" => ["nombre" => "azul", "hex" => "#0000FF"],
    "Tren" => ["nombre" => "gris", "hex" => "#808080"],
    "Autobus" => ["nombre" => "naranja", "hex" => "#FFA500"]
];

include "functions.php"
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="container-fluid">

    <header>
        <?php
        include_once 'header.php'
        ?>
    </header>

    <div class="listado">
        <h1>Arrays asociativos</h1>

        <p>En este ejercicio se nos pedía trabajar con un array asociativo, la primera parte constaba de mostrar todos los vehículos<br> con sus respectivos colores, mientras que en la segunda parte se nos pidió extraer solamente uno.<br><br>

        Originalmente, los colores estaban en negrita, pero por una decisión de diseño, los puse con sus respectivos colores, <br> añadiendolos al array y convirtiendo a su vez cada elemento en un array asociativo.

        </p>

        <div class="todo">
            <h4>Todos los vehiculos</h4>
            <ul class="list-group">

                <?php
                foreach ($array as $vehiculo => $info) {
                    $nombreColor = $info['nombre'];
                    $hexColor = $info['hex'];
                    echo "<li class='list-group-item w-100'>El vehículo <strong>$vehiculo</strong> es de color: <strong style='color: $hexColor;'>$nombreColor</strong></li>";
                }
                ?>
            </ul>
        </div>

        <br>

        <div class="tren">
            <h4 class="my-2">Tren solo</h4>
            <?php
            if (isset($array['Tren'])) {
                $nombreColorTren = $array['Tren']['nombre'];
                $hexColorTren = $array['Tren']['hex'];
                echo "El color del <strong>Tren</strong> es: <strong style='color: $hexColorTren;'>$nombreColorTren</strong> <br>";
            }

            ?>
        </div>

    </div>

    </main>

    <footer>
        &copy;Javier López Lezama examen PHP.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>