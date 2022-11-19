<?php
    // Condicional si el metodo POST se ejecuta
    if($_POST){
        $txtNombre=$_POST['txtNombre'];
        $txtApellido=$_POST['txtApellido'];
        // Concatenar variables y mostrarlas
        echo "Hola, ".$txtNombre." ".$txtApellido;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!- Formulario ->
    <form action="ejercicio4.php" method="post">
        <!- Nombre y Apellido de los input para almacenar datos en variable ($txtNombre) (&txtApellido) ->
        <input type="text" placeholder="Nombre" name="txtNombre" id="">
        <input type="text" placeholder="Apellido" name="txtApellido" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>