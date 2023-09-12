<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar profile</h1>

    <?php
        $id = $_GET["id"];
        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM profiles WHERE id=$id");
        $result = $stmnt->fetch_assoc();

    ?>

    <form action="../handle_db/update.php" method="post">

        <input type="text" hidden name="id" value="<?php echo $result['id']?>">

        <label for="">Photo:</label>
        <input type="text" name="photo" value="<?php echo $result['photo']?>">

        <br>

        <label for="">Name:</label>
        <input type="text" name="nam" value="<?php echo $result['nam']?>">

        <br>

        <label for="">Bio:</label>
        <input type="text" name="bio" value="<?php echo $result['bio']?>">

        <br>

        <label for="Precio">Phone:</label>
        <input type="text" name ="phone" value="<?php echo $result['phone']?>">

        <br>

        <label for="">Email:</label>
        <input type="email" name="email" value="<?php echo $result['email']?>">

        <br>

        <label for="">Password:</label>
        <input type="password" name="pass" value="<?php echo $result['pass']?>">

        <br>

        <button type="submit">Actualizar</button>


    </form>

</body>
</html>