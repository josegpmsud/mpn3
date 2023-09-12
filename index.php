<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Proyecto N3</title>
</head>
<body>
    <form action="./handle_db/create.php" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre">

        <br>

        <label for="Precio">Precio:</label>
        <input type="text" name ="precio">

        <br>

        <label for="">Stock:</label>
        <input type="number" name="stock">

        <br>

        <button type="submit">Guardar</button>

        <a href="./home.php">Home</a>


    </form>

    <h2>productos registrados</h2>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Stock</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

                $stmnt = $mysqli->query("SELECT * FROM productos");

                while($row = $stmnt->fetch_assoc()){
                    $id = $row["id"];
                    $nombre = $row["nombre"];
                    $precio = $row["precio"];
                    $stock = $row["stock"];

                    echo "
                    <tr>
                        <td>$id</td>
                        <td>$nombre</td>
                        <td>$precio</td>
                        <td>$stock</td>
                        <td><a href='/views/edit.php?id=$id' >Editar</a><a href='/views/edit.php' >Eliminar</a></td>
                    </tr>

                    ";
                }

            ?>
        </tbody>


    </table>
</body>
</html>