<?php

require_once 'BaseElement.php';

class Project extends BaseElement 
{
    public function getPrintable()
    {
        return $this->Months;                        
    }  

}