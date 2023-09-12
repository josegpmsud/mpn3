<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    $resultado = $mysqli->query("INSERT INTO profiles(email, pass) VALUES ('$email','$pass')");

    if($resultado){
        header("Location: /index.php");
    }else{
        "Error al guardar el perfil";
    }

}else{
    echo "No estas usando POST para acceder a este archivo";
}