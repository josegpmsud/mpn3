<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar porductos</h1>

    <?php
        $id = $_GET["id"];
        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
        $stmnt = $mysqli->query("SELECT *FROM productos WHERE id=$id");
        $result = $stmnt->fetch_assoc();

    ?>

    <form action="../handle_db/update.php" method="post">

        <input type="text" hidden name="id" value="<?php echo $result['id']?>">

        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $result['nombre']?>">

        <br>

        <label for="Precio">Precio:</label>
        <input type="text" name ="precio" value="<?php echo $result['precio']?>">

        <br>

        <label for="">Stock:</label>
        <input type="number" name="stock" value="<?php echo $result['stock']?>">

        <br>

        <button type="submit">Actualizar</button>


    </form>

</body>
</html>