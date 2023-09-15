<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    //var_dump($email);
    //exit();

    if($email === ""){//no esta funcionando este condicional revisar porque???
        header("Location: ../views/login.php");
    }

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    try{
        $resultado = $mysqli->query("INSERT INTO profiles(email, pass) VALUES ('$email','$pass')");

        if($resultado){
            session_start();
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $pass;
            header("Location: ../views/show.php?email=$email");//$id
        }else{
            "Error al guardar el perfil";
        }

    }catch(mysqli_sql_exception $e){

        if($mysqli->errno == 1062){
            session_start();
            $_SESSION['duplicado'] = "El correo ya existe";
            header("Location: /index.php");
        }else{
            echo "Error" . $e->getMessage();
        }
    }

    }else{
        echo "No estas usando POST para acceder a este archivo";
    }