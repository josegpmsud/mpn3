<?php

try {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "login_db";//login_db//funvalp

    $mysqli = new mysqli($host, $username, $password, $database);

}catch (mysqli_sql_exception $e){
    
    echo "La conexion Fallo";
    echo "Erro: " . $e->getMessage();
}

?>