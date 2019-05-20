<?php

require_once 'conexion.php';

$Id_color = $_GET['Id_color'];
$sqlDelete = 'DELETE FROM colores WHERE Id_color = ?';
$cmdDelete = $pdo->prepare($sqlDelete);
$cmdDelete->execute(array($Id_color));

//Cerramos la conexión y la sentencia preparada
$cmdDelete = null;
$pdo = null;
header('location:index.php'); 

