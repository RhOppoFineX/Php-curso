<?php

require_once 'conexion.php';

$Id_color = $_GET['Id_color'];
$sqlDelete = 'DELETE FROM colores WHERE Id_color = ?';
$cmdDelete = $pdo->prepare($sqlDelete);
$cmdDelete->execute(array($Id_color));

header('location:index.php'); 

