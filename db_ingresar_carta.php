<?php
    require('connection.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $codEdicion = $_POST['codigoEdicion'];
    $rareza = $_POST['rareza'];
    $cantidad = $_POST['cantidad'];

    ingresarCarta($id, $nombre, $tipo, $codEdicion, $rareza, $cantidad);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="window.open('index.php', '_self')">
    
</body>
</html>