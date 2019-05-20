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
        <form action="agregarUsuario.php" metohd="post">
            <div class="form-row">
                <div class="col-sm-3"> 
                    <input type="text" class="form-control" name="Nombre_usuario" placeholder="Ingresa tu usuario">            
                </div>
                <div class="col-sm-3"> 
                    <input type="password" class="form-control" name="Password" placeholder="Ingresa tu contraseña">            
                </div>
                <div class="col-sm-3"> 
                    <input type="password" class="form-control" name="Password2" placeholder="Repite tu contraseña">            
                </div>
                <div class="col-sm-3"> 
                    <input type="email" class="form-control" name="Email" placeholder="Ingresa tu correo">            
                </div>

                    <button type="submit" class="btn btn-primary"> Guardar </button>               
                        
            </div>

        </form>  
    </div>
</body>
</html>