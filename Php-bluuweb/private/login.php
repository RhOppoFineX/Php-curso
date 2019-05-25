<?php

session_start();
require_once '../conexion.php';//Llamamos a la conexion


$usuario_login = $_POST['Nombre_usuario'];
$password = $_POST['Password'];
$contrasenaSinEncriptar = $password;

$sql = 'SELECT `Password` FROM usuarios WHERE Nombre_usuario = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

if( ($resultado) && password_verify ($contrasenaSinEncriptar, $resultado['Password'])){
    echo 'Sesión Iniciada';
    $_SESSION['admin'] = $usuario_login;
    header('Location:restringido.php');
    
}else{
    echo 'Credenciales invalidas';
}



