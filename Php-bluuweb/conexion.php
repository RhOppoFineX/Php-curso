<?php

//PDO es un estandar para conectarse a diferenetws bases de datos

$link = 'mysql:host=localhost;dbname=yt_colores';

$usuario = 'root';
$pass = '';

try{

    $PDO = new PDO($link, $usuario, $pass);
    echo 'Conectado';
    
    foreach($PDO->query('SELECT * from colores') as $fila) {
        print_r($fila);
    }
    $mbd = null;

}catch(PDOException $e){
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}



 