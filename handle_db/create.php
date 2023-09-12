<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];


    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    $resultado = $mysqli->query("INSERT INTO productos(nombre, precio, stock) VALUES ('$nombre','$precio','$stock')");

    if($resultado){
        header("Location: /index.php");
    }else{
        "Error al guardar el producto";
    }

}else{
    echo "No estas usando POST para acceder a este archivo";
}