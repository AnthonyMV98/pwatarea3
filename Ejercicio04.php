<html>
<head>
<title>Adivina el número</title>    
</head>
<body>
<h1>Adivina el número</h1>
    <echo>Este juego trata de adivinar un número aleatorio entre 1 y 10.</echo><br/>
    <echo>Escribe un valor que esté entre estos 2 valores y prueba suerte.</echo>
<?php
srand(time());
$numero = rand(1, 10);
if ($_REQUEST['numero'] == $numero){
 echo "Has acertado";
} else {
  echo "Prueba otra vez";
}
?>
<form method="get">
<input type="number" name="numero">
<input type="submit" name="submit" value="Probar suerte">
</form>

        <?php
        // Se verifica que exista la variable de sesión con nuestro numero aleatorio generado.
        if (isset($_SESSION['num'])){
        // Si existe nuestro numero, empezamos a compararlo con lo que ingresaron por el formulario.
        if ($_SESSION['num'] == $_GET['numero']){
            echo "Has acertado";
            // Si se acierta, se borra el campo para volver a empezar.
            unset ($_SESSION['num']);
        }
            else {
            // Si no existe o se acierta, se prueba otra vez.
            echo "Prueba otra vez";
            }
        srand(time()); 
        // Devuelve un numero entre el 1 y el 10.
        $_SESSION['num'] = rand(1, 10);
        }
        ?>

</body>
</html>