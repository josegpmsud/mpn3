<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = $_POST["id"];
        $photo = $_POST["photo"];
        $nam = $_POST["nam"];
        $bio = $_POST["bio"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

        $result = $mysqli->query("UPDATE profiles SET photo='$photo', nam='$nam', bio='$bio', phone='$phone', email='$email',  pass='$pass' WHERE id=$id");

        if($result){
            header("Location: ../views/show.php?email=$email");
        }else{
            echo "Error al actualizar";
        }
    }

?>