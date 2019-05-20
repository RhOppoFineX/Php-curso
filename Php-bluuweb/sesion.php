<?php

session_start();//Siempre se tiene que poner que se hace un login
$login = 'Ignacio';

//es una constante y la asoiciamos al "administrador"
$_SESSION['admin'] = $login;
//Es un array, también esta variable viaje a cualquier página (archivo) que llame el metodo session_start(); 
//Se guarda en las Cookies del navegador

if( isset($_SESSION['admin']) ) //isset para verficar si una variable es null o ha sido declarada
{
    header('Location:login.php');    
}

