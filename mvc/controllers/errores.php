<?php 
require_once 'libs/controller.php';
class Errores extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje="Hubo un error en la solicitud o no exsite la pagina";
        $this->view->render('error/index');
        //echo "<br>ERROR AL CARGAR EL RECURSO";
        
    }
    function saludo(){
        echo "<br>Ejecutaste el metodo saludo";
    }
}