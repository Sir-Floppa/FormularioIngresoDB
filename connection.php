<?php
    $connection = mysqli_connect('localhost', 'root', '');

    $queryDb = "CREATE DATABASE IF NOT EXISTS cartas";

    mysqli_query($connection, $queryDb);

    $connection = new mysqli('localhost', 'root', '', 'cartas');

    $queryTabla = "CREATE TABLE IF NOT EXISTS cartas (
        codigo INT PRIMARY KEY NOT NULL,
        nombre VARCHAR(24),
        tipo VARCHAR(12),
        codEdicion VARCHAR(7),
        rareza VARCHAR(12),
        cantidad INT)";

    mysqli_query($connection, $queryTabla);
    
    // Terminada creacion de DB y tabla

    function ingresarCarta($id, $nombre, $tipo, $codEdicion, $rareza, $cantidad) {
        global $connection;

        $query = "INSERT INTO cartas VALUES ($id, '$nombre', '$tipo', '$codEdicion', '$rareza', $cantidad)";
        mysqli_query($connection, $query);
    }

    function mostrarCartas() {
        global $connection;

        $query = "SELECT * FROM cartas";
        
        if($result = mysqli_query($connection, $query)) {
            while($row = $result->fetch_assoc()) {
                $id = $row['codigo'];
                $nombre = $row['nombre'];
                $tipo = $row['tipo'];
                $codEdicion = $row['codEdicion'];
                $rareza = $row['rareza'];
                $cantidad = $row['cantidad'];

                $elementoTabla = "
                    <tr>
                        <td>$id</td>
                        <td>$nombre</td>
                        <td>$tipo</td>
                        <td>$codEdicion</td>
                        <td>$rareza</td>
                        <td>$cantidad</td>
                        <td>
                            <button onclick=\"window.open('db_eliminar_carta.php?id=$id', '_self')\">Eliminar</button>
                        </td>
                    </tr>";

                echo $elementoTabla;
            }
        }
    } 

    function eliminarCarta($id) {
        global $connection;

        $query = "DELETE FROM cartas WHERE codigo=$id";
        echo $query;
        mysqli_query($connection, $query);
    }
?>