<?php
require_once '../conexion.php';//Llamamos a la conexion


// echo password_hash("bluuweb", PASSWORD_DEFAULT)."\n"; Para encriptar

$usuario_nuevo = $_POST['Nombre_usuario'];
$password = $_POST['Password'];
$password2 = $_POST['Password2'];
$email = $_POST['Email'];
//Encriptando la contraseña 
$password =  password_hash($password, PASSWORD_DEFAULT);

//Para que no hayan usuarios duplicados

$sql = 'SELECT * FROM usuarios WHERE Nombre_usuario = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();
if($resultado){//si es true significa que la consulta si trae resultados de caso contrario dará false
    echo 'Este usuario ya existe';
    die();//Evita que el codigo de este archivo se siga ejecutando
}
                        

echo '<pre>';
var_dump($usuario_nuevo);
var_dump($password);
var_dump($password2);
echo '<pre>';

// password_verify ( string $password , string $hash ) para comparar 
//Un string y una contraseña ya crifrada para ver si son la misma
//Contraseña

if(password_verify ($password2, $password))
{
    echo 'Contraseña Valida';
    
    //AGREGAR   

    $Insert = 'INSERT INTO usuarios (Nombre_usuario, Email, `Password`) VALUES (?, ?, ?)';
    $cmd = $pdo->prepare($Insert);  
    //Verficamos si se ejecuto correctamente
    if($cmd->execute(array($usuario_nuevo, $email, $password)))
    {
        echo '¡Agregado! <br>';
    }else{
        echo 'Error maje';
    }

     //Cerramos la conexión y la sentencia preparada
     $cmd = null;
     $pdo = null;
     //header('location:index.php'); //si no se recarga la pagina  
}
else{
    echo 'Las contraseñas no coinciden';
}


    






