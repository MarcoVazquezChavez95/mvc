<?php 
require_once 'libs/controller.php';
class Main extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje="Ventana main";
        //echo "<br>Nuevo controlador main";
        
    }

    function render(){
        $this->view->render('main/index');
    }
    function saludo(){
        echo "<br>Ejecutaste el metodo saludo";
    }
}