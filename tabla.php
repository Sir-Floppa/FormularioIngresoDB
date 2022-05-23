<?php
    require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Cartas | Visualizar</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <?php include('header.php')?>

    <section>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo de Carta</th>
                <th>Codigo de Edicion</th>
                <th>Rareza</th>
                <th colspan=2>Cantidad</th>
            </tr>
    
            <?php mostrarCartas()?>
        </table>
    </section>
</body>
</html>