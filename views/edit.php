<?php require_once("../section/head.php") ?>

<body>
    <h1>Editar profile</h1>

    <?php
        session_start();
        if(isset($_SESSION['user'])){
            echo "<p>Usuario: ". $_SESSION['user'] . "</p><br><br>";
            echo "<a href='../handle_db/closesession.php'>Close Session</a>";
        }else{
            header("Location: /index.php");
        }
        

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