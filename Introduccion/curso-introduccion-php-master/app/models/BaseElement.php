<?php
require_once 'Printable.php';
//Siempre que implementamos una interface siempre tenemos que soobreescribir sus metodos abstractos
class BaseElement implements Printable{

    private $Title;//Encapsulamiento
    protected $Description;
    private $Visible;
    protected $Months;
  
    //Metodo Constructor
    //Metodo Magico cuando un metodo empiezan con dos guiones bajos
    //Cuando declaramos un construcutor explicitamnete perdemos el constructor por defecto 
    public function __construct($Title){
        $this->setTitle($Title);
     }
  
    //Setters
  
    public function setTitle ($Title)
    {
         $this->Title = $Title===null ? 'N/A' : $Title;
    }
    public function setDescription ($Description)
    {
         $this->Description = $Description;
    }
    public function setVisible ($Visible)
    {
         $this->Visible = $Visible;
    }
    public function setMonths ($Months)
    {
         $this->Months = $Months;
    }
  
    //Getters
  
    public function getTitle ()
    {
      return $this->Title;
    }
    public function getDescription ()
    {
      return $this->Description;
    }
    public function getVisible ()
    {
      return $this->Visible;
    }
    public function getMonths ()
    {
      return $this->Months;
    }
  
     public function getDuration()
     {
        $years = floor($this->Months / 12);//floor quita el punto decimal (1.5 es 1 y 1.9 igual es 1)
  
        $meses = $this->Months % 12;
  
        $frecuenciaYears = $years > 1 ? "Años" : "Año";
        $frecuenciaMeses = $meses > 1 ? "Meses" : "Mes";
  
        if($years===0)  
          return "$meses $frecuenciaMeses";
  
        else if ($meses===0)
          return "$years $frecuenciaYears";
        
        else
          return "$years $frecuenciaYears y $meses $frecuenciaMeses";
              
      }
      // Sobreeescribimos el metodo
      public function getPrintable(){
        $this->Description;
      }
  }