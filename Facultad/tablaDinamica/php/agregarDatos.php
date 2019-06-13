<?php
require_once 'conexion.php';
$conexion = conexion();

$n = $_POST['Nombre'];
$a = $_POST['Apellido'];
$e = $_POST['Email'];
$t = $_POST['Telefono'];

$sql = "INSERT INTO Persona (Nombre, Apellido, Email, Telefono) VALUES ('$n', '$a', '$e', '$t')";

echo $result = mysqli_query($conexion, $sql);





