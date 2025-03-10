<?php include "functions.php" ?>

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

<body>

    <header>
        <?php
        include_once 'header.php'
        ?>
    </header>
    <div class="array">
        <h1>Array indexado</h1>

        <p>En este ejercicio se nos pedía añadir una nueva fruta al array, una vez hecho, teníamos que mostrarlos en línea marcando en negrita la manzana y separandolos por comas.</p>

        <?php echo fruta() ?>
    </div>

    <footer>
        &copy;Javier López Lezama examen PHP.
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>