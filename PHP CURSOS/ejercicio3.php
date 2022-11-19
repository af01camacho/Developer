<?php
    // Condicionales 
    if($_GET){
         // Metodo GET para enviar datos por URL.
        $nombre = $_GET['txtNombre'];
        // Mostrar Datos de variables
        echo"$nombre";
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
    <form action="ejercicio3.php" method="get">
        <!- Nombre de input para almacenar datos en variable ($txtNombre) ->
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>