<?php
namespace App\models;

use app\models\project;

require_once 'BaseElement.php';

class Project extends BaseElement 
{
    public function __construct($Tittle){
        $newTitle = "Proyecto: $Tittle";
        parent::__construct($newTitle);
    }

    public function getPrintable()
    {
        $var = 'Sobreescribiendo el metodo abstracto getPrintable() de la interface Printable heredaro por Base Element';
        return $var;                        
    }  

}