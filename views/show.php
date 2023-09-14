<?php require_once("../section/head.php") ?>

<body>
    
    <?php
        session_start();
        if(isset($_SESSION['user'])){
            echo "<label>Usuario: ". $_SESSION['user'] . "</label>";
            echo "<a href='../handle_db/closesession.php'>Close Session</a>";
        }else{
            header("Location: /index.php");
        }

        $email = $_GET["email"];
        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM profiles WHERE email='$email'");
        $result = $stmnt->fetch_assoc();

    ?>

    <table>
        <thead>
            <tr>
                
            </tr>
        </thead>
        <tbody>
            <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

                $stmnt = $mysqli->query("SELECT * FROM profiles WHERE email='$email'");

                while($row = $stmnt->fetch_assoc()){
                    $id = $row["id"];
                    $photo = $row["photo"];
                    $nam = $row["nam"];
                    $bio = $row["bio"];
                    $phone = $row["phone"];
                    $email  = $row["email"];
                    $pass = $row["pass"];

                    
                if(isset($row['photo'])){
                    $dataImg = base64_encode($row['photo']);
                    $image= "<img src='data:img/jpg;base64,$dataImg' height='100'/>";
                }else{
                    $image = "No tienes imagen";
                }


                    echo "
                    <tr>
                    <td>
                        <h1>Profile</h1>
                        <p>Some info may be visible to other people</p>
                        <a href='/views/edit.php?id=$id' >Editar</a>
                    </td>
                    </tr>
                    <tr>
                        <td>PHOTO</td>
                        <td>$image</td>
                    </tr>
                    <tr>                        
                        <td>NAME</td>
                        <td>$nam</td>
                    </tr>
                    <tr>                       
                        <td>BIO</td>
                        <td>$bio</td>
                    </tr>
                    <tr>
                        <td>PHONE</td>
                        <td>$phone</td>
                    </tr>
                    <tr>                        
                        <td>EMAIL</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        
                        <td>PASSWORD</td>
                        <td>***********</td>                        
                    </tr>
                   


                    ";
                }

            ?>
        </tbody>


    </table>

</body>
</html>