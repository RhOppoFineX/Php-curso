
function agregarDatos(nombre, apellido, email, telefono)
{   //El & para hacer una cadena de datos
    var cadena = "Nombre=" + nombre + "&Apellido=" + apellido +
    "&Email=" + email + "&Telefono=" + telefono;
    
    $.ajax({
        type: "POST", 
        url: "php/agregarDatos.php",
        data: cadena,
        success:function(r){
            if(r==1){//Si la consulta o sentencia sql fue existosa

                $('#tabla').load('components/tabla.php');
                alertify.success('Agregado con exito :)');

            }else{
                alertify.error('Fallo el servidor :(');
            }
        }
    });
}