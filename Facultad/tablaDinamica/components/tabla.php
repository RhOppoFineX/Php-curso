<?php
    require_once '../php/conexion.php';
    $conexion = conexion();
?>

<div class="row">
    <div class="col-sm-12">
        <h2 class="text-center mt-4">Tabla Dinamica Facultad</h2>
        <br>
            <!--para que sombree lineas hover, condensed para más comprimido, y bordered para que parezcan celdas-->
        <table class="table table-hover table-condensed table-bordered">
        <caption>                                   <!--Para abrir el modal correspondiente-->
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalNuevo"> Agregar Nuevo <i class="fas fa-plus"></i> </button>
        </caption>
            <tr>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Email</td>
                <td>Teléfono</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
                <?php
                    $sql = 'SELECT * FROM Persona';
                    //Api
                    $result = mysqli_query($conexion, $sql);

                    while($ver = mysqli_fetch_row($result)):                    
                ?>
            <tr>
                <td> <?php echo $ver[1]; ?> </td>
                <td> <?php echo $ver[2]; ?> </td>
                <td> <?php echo $ver[3]; ?> </td>
                <td> <?php echo $ver[4]; ?> </td>
                <td>                                  <!--Para abrir el modal correspondiente-->
                    <button class="btn btn-warning btn-lg"  data-toggle="modal" data-target="#modalEdicion"> <i class="fas fa-pen"></i> </button>
                </td>
                <td>
                    <button class="btn btn-danger btn-lg"> <i class="fas fa-times"></i> </button>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>