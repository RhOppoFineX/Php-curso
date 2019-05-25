<?php

//PDO es un estandar para conectarse a diferenetws bases de datos

    $user = 'root';
    $pass = '';
    $database = 'yt_colores';
    $servername = 'mysql:host=localhost;dbname=yt_colores';
    $pdo = null;
        try {
            $pdo = new PDO($servername, $user, $pass);
            // $con = mysqli_connect('localhost', $user, $pass, $database);                   
            //   foreach($pdo->query('SELECT * from colores') as $fila) {
            //       print_r($fila);
            //   }
            //  $pdo = null;
            
            //echo '<br>  Conectado <br>';
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }

