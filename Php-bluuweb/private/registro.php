<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center"> Formulario de registro </h2>
    <br>
    <div class="container center">    
        <form action="agregarUsuario.php" method="POST">
            <div class="form-row">
                <div class="col-sm-6 mt-3"> 
                    <input type="text" class="form-control" name="Nombre_usuario" placeholder="Ingresa tu usuario">            
                </div>
                <div class="col-sm-6 mt-3"> 
                    <input type="password" class="form-control" name="Password" placeholder="Ingresa tu contraseña">            
                </div>
                <div class="col-sm-6 mt-3"> 
                    <input type="password" class="form-control" name="Password2" placeholder="Repite tu contraseña">            
                </div>
                <div class="col-sm-6 mt-3"> 
                    <input type="email" class="form-control" name="Email" placeholder="Ingresa tu correo">            
                </div>

                <div class="offset-sm-5 mt-3">
                    <button type="submit" class="btn btn-primary btn-lg"> Guardar </button>
                </div>                         
            </div>

        </form>  
    </div>

    <br>


    <div class="container center">
        <h2 class="text-center"> Iniciar Sesión </h2>

        <form action="login.php" method="POST">

            <div class="form-row">
                <div class="col-sm-4 mt-3 offset-sm-4"> 
                    <input type="text" class="form-control" name="Nombre_usuario" placeholder="Ingresa tu usuario">            
                </div>
                <div class="col-sm-4 mt-3 offset-sm-4"> 
                    <input type="password" class="form-control" name="Password" placeholder="Ingresa tu contraseña">            
                </div>

                <div class="offset-sm-5 mt-3 center">
                    <button type="submit" class="btn btn-success btn-lg"> Iniciar Sesión </button>
                </div>
            </div>

        </form>

    </div>
</body>
</html>