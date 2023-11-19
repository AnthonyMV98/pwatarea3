<?php
# Incluir el contador de visitas
    $nombreArchivo = "contador.txt";
# Si no existe, lo creamos
    if (!file_exists($nombreArchivo)) {
        touch($nombreArchivo);
    }
# Obtenemos su contenido
    $contenido = trim(file_get_contents($nombreArchivo));
# Si está vacío, lo igualamos a cero
    if ($contenido == "") {
        $visitas = 0;
    } else {
    # Si no, las visitas son lo que tenga el archivo
        $visitas = intval($contenido);
    }
# Ya sea que las visitas son 0 o las que hayamos leído, las aumentamos
    $visitas++;
# Y volvemos a escribir el valor en el archivo
    file_put_contents($nombreArchivo, $visitas);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contacto</title>
</head>

<body>
    <h1>Esta es la página de contacto</h1>
    <br>
    <a href="index.php">Inicio</a>


    <br><br><br><br><br>


    <?php

    $visitas = file_get_contents("contador.txt");
    printf("Hasta ahora van %d visitas", $visitas);

    ?>

</body>

</html>