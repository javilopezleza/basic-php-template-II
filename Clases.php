<?php

include "Television.php";

$lavadoraAEG = new Lavadora(300, "blanco", "A", 30, 7);

$tvSamsung = new Television(190, "negro", "P", 10, 50, "true");


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="container-fluid">

    <header>
        <?php
        include_once 'header.php'
        ?>
    </header>

    <div class="info">
        <h1>Clases</h1>
        <p>Ejercicio realizado para aprender sobre las clases y la herencia de las mismas en PHP</p>
    </div>
    <div class="resultados">

        <div class="lavadora">

            <img src="../examenPhp/img/lavadora.jpg" alt="Lavadora aeg">

            <?php
            echo $lavadoraAEG . "<br>";

            echo $lavadoraAEG->precioFinal() . "<br>";
            ?>
        </div>

        <div class="tv">

            <img src="../examenPhp/img/samsung.webp" alt="Televisión Samsung">

            <?php
            echo $tvSamsung . "<br>";

            echo $tvSamsung->precioFinal();

            ?>
        </div>
    </div>

    <footer>
        &copy;Javier López Lezama examen PHP.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>