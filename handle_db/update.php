<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $stock = $_POST["stock"];

        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

        $result = $mysqli->query("UPDATE productos SET nombre='$nombre', precio=$precio, stock=$stock WHERE id=$id");

        if($result){
            header("Location: /index.php");
        }else{
            echo "Error al actualizar";
        }

    }

?>