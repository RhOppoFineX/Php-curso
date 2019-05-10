<?php
namespace App\models;

require_once 'BaseElement.php';

class Job extends BaseElement{

    public function __construct ($title)
    {        
        $newTitle = "Job: $title";
        parent::__construct($newTitle);//Llamamos al constructor de la clase padre        
    }

    //Sobreescribiendo el metodo getDuration
    public function getDuration()
    {
        $years = floor($this->Months / 12);//floor quita el punto decimal (1.5 es 1 y 1.9 igual es 1)
  
        $meses = $this->Months % 12;//No podemos acceder a este atributo si esta private en la clase padre por ello le ponemos Protected
        //Para que todos los elementos hijod puedan acceder a él
  
        $frecuenciaYears = $years > 1 ? "Años" : "Año";
        $frecuenciaMeses = $meses > 1 ? "Meses" : "Mes";
  
        if($years===0)  
          return "$meses $frecuenciaMeses";
  
        else if ($meses===0)
          return "$years $frecuenciaYears";
        
        else
          return "duración: $years $frecuenciaYears y $meses $frecuenciaMeses"; 
              
      }

}