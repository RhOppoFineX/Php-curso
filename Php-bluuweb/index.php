<?php
    require_once 'conexion.php';
    //leer
    $sql_leer = 'Select * From colores';    
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();
    $resultado = $gsent->fetchAll();//Devolvemos un array con los resultados

    //var_dump($resultado);    
    //Agregar
    if(!empty($_POST))
    {
       $Color = strtolower($_POST['Color']);
       $Description = $_POST['Description'];

       $Insert = 'INSERT INTO colores (Color, `Description`) VALUES (?, ?)';
       $cmd = $pdo->prepare($Insert);
       $cmd->execute(array($Color, $Description));//Según el orden del insert

        //Cerramos la conexión y la sentencia preparada
        $cmd = null;
        $pdo = null;
        header('location:index.php'); //si no se recarga la pagina   

    }
    //Modificar
    if(($_GET)){
        $Id_color = $_GET['Id_color'];
        $sqlUpdate = 'SELECT * FROM  colores WHERE Id_color = ?';
        $gsentUpdate = $pdo->prepare($sqlUpdate);
        $gsentUpdate->execute(array($Id_color));
        $resultadoUpdate = $gsentUpdate->fetch();//Fetch sin el All porque solo es un resultado 
        
        //var_dump($resultadoUpdate);        
    }
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6"><!--Leer-->
                <?php foreach($resultado as $dato)://empieza?>                     
                <div class="alert alert-<?php echo $dato['Color'];?> text-uppercase" role="alert">

                    <?php echo $dato['Color'];//El nombre del campo de la tabla colores (es Sensitive Case)?>
                        -
                    <?php echo $dato['Description'];?>

                    <!--Eliminar    lo colocamos arriba del modificar para que este a la derecha de este      Margin Left -->
                    <a href="eliminar.php?Id_color=<?php echo $dato['Id_color'];?>" class="float-right ml-3">
                    <i class="fas fa-trash-alt"></i>  </a>

                            <!--Lado derecho-->
                    <a href="index.php?Id_color=<?php echo $dato['Id_color'];?>" class="float-right"><!--Editar-->
                        <i class="fas fa-edit"></i>
                    </a>                    

                </div>
                <?php endforeach//termina en dos bloques de codigo diferentes de PHP ?>           
            </div>

            <div class="col-md-6"><!--Agregar-->
                <?php if(!$_GET):// Empieza el if ?>
                    <!--FORM AGREGAR-->
                    <h2>AGREGAR ELEMENTOS</h2>
                    <form method="POST">
                        <input type="text" class="form-conrtol" name="Color">
                        <input type="text" class="form-conrtol" name="Description">
                        <button class="btn btn-primary mt-3">Agregar</button> 
                    </form>
               <?php endif //Termina el if ?>


               <?php if($_GET):// Empieza el if ?>
                <!--FORM MODIFICAR-->
                    <h2>MODIFICAR ELEMENTOS</h2>
                    <form method="GET" action="editar.php"><!--Llamamos al archivo para actualizar-->
                        <input type="text" class="form-conrtol" name="Color" value="<?php echo $resultadoUpdate['Color'] ?>">
                        <input type="text" class="form-conrtol" name="Description" value="<?php echo $resultadoUpdate['Description'] ?>">
                         <input type="text" class="d-none" name="Id_color" value="<?php echo $resultadoUpdate['Id_color'] ?>">                          

                        <button class="btn btn-primary mt-3">Modificar</button> 
                    </form>
               <?php endif //Termina el if ?>

            </div>          
            
        </div>
    </div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
//Cerramos la conexión y la sentencia preparada
    $pdo = null;
    $gsent = null;
?>
