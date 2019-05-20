<?php

// echo 'editar.php?Id_color=1&Color=light&Description=este es un color blanco';
// echo '<br>';

$Id_color = $_GET['Id_color'];
$Color = strtolower($_GET['Color']);
$Description = $_GET['Description']; 

 echo $Id_color;
 echo '<br>';
 echo $Color;
 echo '<br>';
 echo $Description;

include_once 'conexion.php';

$sqlEditar = 'UPDATE colores SET Color = ?, `Description`= ? WHERE Id_color = ?';
$cmd =  $pdo->prepare($sqlEditar);
$cmd->execute(array($Color, $Description, $Id_color));
//Cerramos la conexión y la sentencia preparada
$cmd = null;
$pdo = null;

header('location:index.php');
