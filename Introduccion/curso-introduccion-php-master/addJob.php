 <?php
  require_once 'vendor/autoload.php';
  use Illuminate\Database\Capsule\Manager as Capsule;
  use App\models\Job;

  $capsule = new Capsule;
  
  $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => 'localhost',
      'database'  => 'cursophp',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
  ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();

   
   if(!empty($_POST)){
     $job = new Job();
     $job->title = $_POST["title"]; //Input title
     $job->description = $_POST["description"];    
     $job->save();
     var_dump($_POST);     
   }

   

  //  Importantísimo recordar no pedir en forms con GET datos sensibles como passwords,
  //  ya que estos son enviados en la URL, quedando guardados en el historial, 
  //  volviendo vulnerables los datos de los usuarios



 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Add Job</title>
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
 </head>
 <body>
    <h1>Add Job</h1>
    <form action="addJob.php" method="POST"> <!--Hacia donde se estan enviando los valores del formulario-->
        <label for=""> Tittle</label>
        <input type="text" name="title"><br>
        <label for="">Description: </label>
        <input type="text" name="description">
      <br>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </form>     
 </body>
 </html>