<?php
require_once 'libs/controller.php';

class Nuevo extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        //echo "<br>Nuevo controlador main";

    }

    function render()
    {
        $this->view->render('nuevo/index');
    }
    function registrarAlumno()
    {
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $mensaje = "";
        if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {

            $mensaje = "Nuevo alumno registrado";
        } else {
            $mensaje = "La matricula ya existe";
        }
        $this->view->mensaje = $mensaje;
        $this->render();
    }
}
