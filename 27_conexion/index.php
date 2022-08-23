<?php

    $servidor = "localhost";
    $nombreusuario = "apablo";
    $password = "55891200";

    $conexion = new mysqli($servidor, $nombreusuario, $password);

    if($conexion-> connect_error){
        die("Conexión fallida: " . $conexion-> connect_error);
    }

    echo "Conexión exitosa...";
    
?>