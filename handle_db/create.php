<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    try{
        $resultado = $mysqli->query("INSERT INTO profiles(email, pass) VALUES ('$email','$pass')");

        if($resultado){

            header("Location: ../views/show.php?email=$email");//$id
        }else{
            "Error al guardar el perfil";
        }

    }catch(mysqli_sql_exception $e){
        
        if($mysqli->errno == 1062){
            header("Location: /index.php");
        }else{
            echo "Error" . $e->getMessage();
        }
    }
    
    }else{
        echo "No estas usando POST para acceder a este archivo";
    }