<?php
    // Condicionales 
    if($_POST){
         // Metodo POST para enviar datos.
        $nombre = $_POST['txtNombre'];
        // Mostrar Datos de variables
        print_r($nombre);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ejercicio 3</title>
</head>
<body>
    <!- Formulario ->
    <form action="ejercicio2.php" method="post">
        <!- Nombre de input para almacenar datos en variable ($nombre) ->
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>