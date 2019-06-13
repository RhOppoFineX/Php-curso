<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tabla Dinamica </title>
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libraries/alertify/css/alertify.min.css">
    <link rel="stylesheet" href="libraries/alertify/css/themes/default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div id="tabla">  </div>    
    </div>

<!-- Modal para nuevo registros -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">                    
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content"><!--modal-sm controlar el tamaño del modal-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nueva Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <label for="">Nombre</label>                 <!--Para que aprezecan ordenados y cada input ocupe una fila-->
          <input type="text" name="" id="Nombre" class="form-control input-sm">

          <label for="">Apellido</label>
          <input type="text" name="" id="Apellido" class="form-control input-sm">

          <label for="">Email</label>
          <input type="text" name="" id="Email" class="form-control input-sm">

          <label for="">Telefono</label>
          <input type="text" name="" id="Telefono" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="Agregar">Agregar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal para edición de datos-->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="">Nombre</label>                 <!--Para que aprezecan ordenados y cada input ocupe una fila-->
        <input type="text" name="" id="NombreUpdate" class="form-control input-sm">

        <label for="">Apellido</label>
        <input type="text" name="" id="ApellidoUpdate" class="form-control input-sm">

        <label for="">Email</label>
        <input type="text" name="" id="EmailUpdate" class="form-control input-sm">

        <label for="">Telefono</label>
        <input type="text" name="" id="TelefonoUpdate" class="form-control input-sm">

        <input type="text" hidden="" id="Id_persona">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="Actualizar">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>    

</body>

  <!--Jquery va antes de va antes de algun otro script que lleve Jquery-->
  <script src="libraries/jquery-3.2.1.min.js"></script>
  <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
  <script src="libraries/alertify/alertify.min.js"></script>
  <script src="js/funciones.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){
          $('#tabla').load('components/tabla.php');
      });
  </script>

  <script>
    $(document).ready(function(){
      $('#Agregar').click(function(){
        var nombre = $('#Nombre').val();
        var apellido = $('#Apellido').val();
        var email = $('#Email').val();
        var telefono = $('#Telefono').val();

        agregarDatos(nombre, apellido, email, telefono);
      });
    });
  </script>
</html>