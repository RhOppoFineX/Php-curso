<?php

require_once('jobs.php');//Mandamos a llamar al archivo con las funciones y estas se declaran al mismo tiempo en la aplicación

$lastname = 'Crack';
$name = 'Puto '.$lastname;
$lastname2 = 'Castellanos';
$name2 = "María José $lastname2";
var_dump($name);
var_dump($name2);
$limitMonths = 60;

//Tipos de Datos en PHP

//Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa
//que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP 
//era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array.
$array = array(
  "curso1" => "php",
  "curso2" => "js",
);

// a partir de PHP 5.4
$array = [
  "curso1" => "php",
  "curso2" => "js",
];

// índices numéricos
$array = [
  "php",
  "js",
  "Python",
];

//object: Representa una instancia de una clase. Este tema lo veremos más a fondo en la clase de Programación Orientada a Objetos

class Car
{
  function move (){
    echo "Going forward...   ";
  }  
}

$myCar = new Car();
$myCar->move();

// callable: Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método.
// Variable que guarda un callable
$firstOfArray = function(array $array) {
  if (count($array) == 0) { return null; }
  return $array[0];
};

// Este es nuestro arreglo
$values = [3, 2, 1];

// Usamos nuestro callable y se imprime el valor 3
echo $firstOfArray($values);

// resource: Es un tipo de dato especial que representa un recurso externo, por ejemplo un archivo externo a tu aplicación.
// $res = fopen("c:\\dir\\file.txt", "r");

//ARRAYS ANIDAOS----------------------------------------------------------------------------------------------------------------
//En archivo jobs.php

$jobs[0]->getTitle(); //Acceder a un elemento anidado en un array

?>
<!--Hay diferentes maneras de concatenar Strings como se muestra en el ejemplo la diferencia entre comillas dobles y simples-->
<!--Las varaibles se pueden mandar a llamar desde cualquier bloque de PHP-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resumen</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1> <?php echo $name; ?> </h1>
        <h2> <?php echo $jobs[0]->getTitle(); ?> </h2>
        <ul>
          <li>Mail: hector@mail.com</li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
            <?php
            //----Reemplezamos el Array Original por una clase con Jobs en el archivo jobs.php--------
            //Por esto cambiaremos la menera de llamar a cada Job hay una imagen de como se veía el codigo antes
              $size = count($jobs);//Para ahorrar recursos
              $totalMonths = 0;//Solo los primeros 12 meses.
              for($idx = 0; $idx < $size; $idx++)
              {                
                  $totalMonths += $jobs[$idx]->getMonths();                 
                  if($totalMonths > $limitMonths)
                  {
                    break;
                  }

                if($jobs[$idx]->getVisible())
                {

                  printElement($jobs[$idx]);                       
                  //continue; esta instrucción hace que la iteración del bucle pase a la siguiente sin ejecutar el codigo que siga(se salta el codigo)
                  //break; esta instrucción si se salta del ciclo (Hace que el ciclo pare y no lo deja iterarse más)
                  //El return en una función hace que se termine 
                }

              }

            ?>            
            
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <ul>
              <?php
                $size2 = count($projects);//Para ahorrar recursos
                for($idx = 0; $idx < $size2; $idx++)
                {               
  
                  if($projects[$idx]->getVisible())
                  {
                    printElement($projects[$idx]);               
                  }
  
                }
              ?>
            </ul>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>