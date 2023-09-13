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

    <form action="../handle_db/update.php" method="post" enctype="multipart/form-data">

        <input type="text" hidden name="id" value="<?php echo $result['id']?>">

        <label for="photo">Photo:</label>
        <input id="photo" type="file" name="photo" value="<?php // echo $result['photo']?>">
        
        <br>

        <label for="nam">Name:</label>
        <input id="nam" type="text" name="nam" value="<?php echo $result['nam']?>">

        <br>

        <label for="bio">Bio:</label>
        <input id="bio" type="text" name="bio" value="<?php echo $result['bio']?>">

        <br>

        <label for="phone">Phone:</label>
        <input id="phone" type="text" name ="phone" value="<?php echo $result['phone']?>">

        <br>

        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="<?php echo $result['email']?>">

        <br>

        <label for="pass">Password:</label>
        <input id="pass" type="password" name="pass" value="<?php echo $result['pass']?>">

        <br>

        <button type="submit">Actualizar</button>


    </form>

</body>
</html>


<?php


?>