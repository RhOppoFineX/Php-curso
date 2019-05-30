<?php

// $datos = ['dolar'=> 600, 'euro'=>800]; Array asociativo

//$peticion = $_GET['variableMaje'];

// echo json_encode($peticion); Transforma lo que pasemos por parametro a formato json

header('Content-Type: application/json');
//indicamos que el resultado de este archivo es en formato json


header("Access-Control-Allow-Origin: *");
//si ponemos un asterisco después de los dos puntos la api será publica de lo contrario ponemos el nombre de nuestro dominio 


if($_GET['moneda'] === 'euro' || $_GET['moneda'] === 'dolar')
{
    require_once 'conexion.php';

    $sql = 'SELECT * FROM ' .$_GET['moneda'];
    $sentencia  = $pdo->prepare($sql);
    $sentencia->execute();//si no tiene parametros la manadamos sin el array

    $datos = $sentencia->fetchAll();

    echo json_encode($datos);


}else{
    echo 'solicitud no encontrada';
}


 

