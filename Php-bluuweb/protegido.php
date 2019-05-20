<?php

session_start();//Siempre se tiene que poner que se hace un login
$login = 'Ignacio';

if( isset($_SESSION['admin']) )//Si es flalso redirecionará al login y no mostrará nada de la página 
{
    echo 'Bienvenido Maje ' .$_SESSION['admin'] .'<br>';

    echo '<a href="cerrar.php">cerrar sesión</a>';

}else{
    header('Location:login.php');        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1> Bienvenido Maje!</h1>
    
</body>
</html>

