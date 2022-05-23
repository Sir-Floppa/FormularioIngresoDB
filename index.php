<?php
    require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Cartas | Ingresar</title>
    <link rel="stylesheet" href='./styles/styles.css'></link>
</head>
<body>
    <?php include('header.php')?>
    <form name="inputForm" action="./db_ingresar_carta.php" method="post" onsubmit="return validar()">
        <!-- id, nombre, tipo, codigo de edicion, rareza, cantidad -->
        <label for="id">Identificador:</label> <br>
        <input type="number" id="id" name="id" autocomplete="off"> <br>
        
        <label for="nombre">Nombre:</label> <br>
        <input type="text" id="nombre" name="nombre" autocomplete="off"> <br>
        
        <label for="tipo">Tipo de Carta:</label> <br>
        <input type="text" id="tipo" name="tipo" autocomplete="off"> <br>
        
        <label for="codigoEdicion">Codigo de Edicion:</label> <br>
        <input type="text" id="codigoEdicion" name="codigoEdicion" autocomplete="off"> <br>
        
        <label for="rareza">Rareza:</label> <br>
        <input type="text" id="rareza" name="rareza" autocomplete="off"> <br>
        
        <label for="cantidad">Cantidad:</label> <br>
        <input type="number" id="cantidad" name="cantidad" autocomplete="off"> <br>
        
        <button type="submit">Ingresar</button>
    </form>

    <script src="./js/app.js"></script>
</body>
</html>