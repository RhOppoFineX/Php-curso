<?php

require 'app/models/Job.php';
require 'app/models/project.php';
require_once 'app/libraries/project.php';

$job1 = new Job('PHP Developer');//Instancia de la clase Job
$job1->setDescription('this is a fucking Job');
$job1->setVisible(true);
$job1->setMonths(12);

$job2 = new Job('Phython Dev');//Instancia de la clase Job
$job2->setDescription('This is a incredible job Alex Hunter');
$job2->setVisible(true);
$job2->setMonths(24);

$job3 = new Job('DevOps');//Instancia de la clase Job
$job3->setDescription('This is a amazing job Alex Hunter');
$job3->setVisible(true);
$job3->setMonths(14);

$job4 = new Job('Node.js');//Instancia de la clase Job
$job4->setDescription('This is a indescribable job Alex Hunter');
$job4->setVisible(false);
$job4->setMonths(13);

$job5 = new Job('Fronted');//Instancia de la clase Job
$job5->setDescription('This is a inevitable job Alex Hunter');
$job5->setVisible(true);
$job5->setMonths(10);

$project1 = new Project('Project 1');
$project1->setDescription('Description 1');
$project1->setVisible(true);
$project1->setMonths(6);

$projects = [
  $project1  
];



$jobs = [

  $job1,
  $job2,
  $job3,
  $job4,
  $job5
  
  // [
  //   'title' => 'PHP Developer',
  //   'description' => 'This is a fuck job Alex Hunter',
  //   'visible' => true,
  //   'months' => 12 
  // ],

  // [
  //   'title' => 'Phython Dev',
  //   'description' => 'This is a incredible job Alex Hunter',
  //   'visible' => true,
  //   'months' => 24
  // ],

  // [
  //   'title' => 'DevOps',
  //   'description' => 'This is a amazing job Alex Hunter',
  //   'visible' => true,
  //   'months' => 14
  // ],

  // [
  //   'title' => 'Node.js',
  //   'description' => 'This is a indescribable job Alex Hunter',
  //   'visible' => false,
  //   'months' => 13
  // ],

  // [
  //   'title' => 'Fronted',
  //   'description' => 'This is a inevitable job Alex Hunter',
  //   'visible' => true,
  //   'months' => 10
  // ]
];
//Indicamos el tipo de dato que esperamos recibir
function printElement(Printable $job)
{
  echo '<li class="work-position">' .
  '<h5>' .$job->getTitle(). '</h5>'.
  '<h6>' .$job->getDescription().  '</h6>'.
  '<h6>' .$job->getDuration().  '</h6>'.
  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>
  <strong>Achievements:</strong>
  <ul>
    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
  </ul>
  </li>';  
}


//No es necesario cerrar php

//Maneras de mandar a llamar archivos

// include: agrega un archivo sin importar si ya fué agregado. Si el archivo no existe, solo arroja un warning como mensaje de error.
// include_once, al igual que include, agrega el archivo pero solo una vez. Si el archivo ya había sido agregado anteriormente, arroja un warning.
// Si el archivo no existe, tambien mostrará warning.
// require, agrega un archivo las veces que se llame a la funcion sin importar si estaba agregado o no. PERO, si el archivo no existe, arroja un error fatal.
// require_once, permite agregar el archivo externo una sola vez. Si se repite, arroja error fatal y si el archivo no existe, tambien arroja error fatal y termina la ejecución del programa.