<?php require_once("../section/head.php") ?>

<body>
    
    <?php
        $id = $_GET["id"];
        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM profiles WHERE id=$id");
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

                $stmnt = $mysqli->query("SELECT * FROM profiles WHERE id=$id");

                while($row = $stmnt->fetch_assoc()){
                    $id = $row["id"];
                    $photo = $row["photo"];
                    $nam = $row["nam"];
                    $bio = $row["bio"];
                    $phone = $row["phone"];
                    $email  = $row["email"];
                    $pass = $row["pass"];
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
                        <td>$photo</td>
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
                        <td>$pass</td>                        
                    </tr>
                   


                    ";
                }

            ?>
        </tbody>


    </table>

</body>
</html>