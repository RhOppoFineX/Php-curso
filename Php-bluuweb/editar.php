<?php

// echo 'editar.php?Id_color=1&Color=light&Description=este es un color blanco';
// echo '<br>';

$Id = $_GET['Id_color'];
$Color = $_GET['Color'];
$Description = $_GET['Description']; 

// echo $Id;
// echo '<br>';
// echo $Color;
// echo '<br>';
// echo $Description;

include_once 'conexion.php';

$sqlEditar = 'UPDATE colores SET Color = ?, `Description`= ? WHERE Id_color = ?';
$cmd =  $pdo->prepare($sqlEditar);
$cmd->execute(array($Color, $Description, $Id));

header('location:index.php');
