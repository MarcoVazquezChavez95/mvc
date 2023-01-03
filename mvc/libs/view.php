<?php
class View
{
    function __construct()
    {
        //echo "<br>Vista base";
    }
    function render($nombre){
        //Requerimos el nombre del archivo que se va a renderizar en nuestra vista
        require 'views/'.$nombre.'.php';
    }
}
