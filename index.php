<?php
include_once 'functions.php';

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
        <!-- Include headers -->
        <?php
        include_once 'header.php';
        ?>
    </header>

    <main>
        <h2>Tablas de multiplicar</h2>

        <h3>Tablas hechas con una función en php</h3>

        <p>Tablas de multiplicar del 1 al 6</p>
        <div class="tablas">
            <?php echo tablasMultiplicar(6); ?>
        </div>

    </main>


    <footer>
        &copy;Javier López Lezama examen PHP.
    </footer>

</body>

</html>