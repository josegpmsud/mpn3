<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = $_POST["id"];
        //var_dump($_FILES);

        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

        if($_FILES["photo"]["tmp_name"]!=""){
            $photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
            $result = $mysqli->query("UPDATE profiles SET photo='$photo' WHERE id=$id");
        }
        
        if($_POST['nam'] != ""){
            $nam = $_POST["nam"];
            $result = $mysqli->query("UPDATE profiles SET nam='$nam' WHERE id=$id");
        }

        if($_POST['bio'] != ""){
            $bio = $_POST["bio"];
            $result = $mysqli->query("UPDATE profiles SET bio='$bio' WHERE id=$id");
        }
       
        if($_POST['phone'] != ""){
            $phone = $_POST["phone"];
            $result = $mysqli->query("UPDATE profiles SET phone='$phone' WHERE id=$id");
        }
        
        if($_POST['pass'] != ""){
            $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
            $result = $mysqli->query("UPDATE profiles SET pass='$pass' WHERE id=$id");
        }
        
        if($_POST['email'] != ""){
            $email = $_POST["email"];           

            try{
                $result = $mysqli->query("UPDATE profiles SET email='$email' WHERE id=$id");
        
                if($result){
                    session_start();
                    $_SESSION['mess'] = "Debes ingresar nuevamente haz actualizado tu email";

                    header("Location: ../views/login.php");//header("Location: ../views/show.php?email=$email");


                }else{
                    "Error al guardar el perfil";
                }
        
            }catch(mysqli_sql_exception $e){
        
                if($mysqli->errno == 1062){
                    session_start();
                    $_SESSION['mess'] = "El correo ya existe";
                    header("Location: ../views/edit.php?id=$id");
                }else{
                    echo "Error" . $e->getMessage();
                }
            }
        
        }
           
        
        /*
        if($result){
            header("Location: ../views/show.php?email=$email");
        }else{
            echo "Error al actualizar";
        }*/
    }

    
?>