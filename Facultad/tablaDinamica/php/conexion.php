<?php


function conexion(){
    $server= 'localhost';
    $user = 'root';
    $database = 'pruebas';
    $pass = '';
    $conexion = mysqli_connect($server, $user, $pass, $database);

    return $conexion;
}






