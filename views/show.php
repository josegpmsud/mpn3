<?php require_once("../section/head.php") ?>

<body>
    <?php require_once("../section/nav.php") ?>
    
    <?php
        $email = $_GET["email"];
        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM profiles WHERE email='$email'");
        $result = $stmnt->fetch_assoc();
    ?>

    <section class="p-show">
    <table class="table-show">
        <thead>
            <tr>
            <h1>Personal info</h1>
            <p>Basic info, like your name and photo</p>
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

                    strlen($row["bio"])>70 ? $pun = "...": $pun = "";
                    
                    $bio = substr($row["bio"], 0, 70) . $pun;
                    $phone = $row["phone"];
                    $email  = $row["email"];
                    $pass = $row["pass"];

                    
                if(isset($row['photo'])){
                    $dataImg = base64_encode($row['photo']);
                    $image= "<img class ='image-perfil' src='data:img/jpg;base64,$dataImg' height='100'/>";
                }else{
                    $image = "<img class='image-perfil' src='../assets/sinPerfil.jpg' alt=''>";
                }
                

                    echo "
                    <tr  class='row'>
                    <td colspan='3'>
                        <div>
                            <h1>Profile</h1>
                            <span>Some info may be visible to other people</span>
                        </div>
                        <div>
                        <a href='/views/edit.php?id=$id' >Editar</a>
                        </div>
                        
                    </td>
                    
                                        
                    </tr>
                    <tr class='row'>
                        <td>PHOTO</td>
                        <td>$image</td>
                    </tr>
                    <tr class='row'>                        
                        <td>NAME</td>
                        <td>$nam</td>
                    </tr>
                    <tr class='row'>                       
                        <td>BIO</td>
                        <td>$bio</td>
                    </tr>
                    <tr class='row'>
                        <td>PHONE</td>
                        <td>$phone</td>
                    </tr>
                    <tr class='row'>                        
                        <td>EMAIL</td>
                        <td>$email</td>
                    </tr>
                    <tr class='row'>
                        
                        <td>PASSWORD</td>
                        <td>***********</td>                        
                    </tr>
                   
                    ";
                }

            ?>
        </tbody>


    </table>
    <?php
        require_once("../section/footer.php");
    ?>  
    </section>
</body>
</html>