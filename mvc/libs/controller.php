<?php
class Controller
{
    function __construct()
    {
        //Creamos la vista de nuestro controllador
        $this->view = new View();
    }

    function loadModel($model)
    {
        $url = "models/" . $model . 'model.php';
        if (file_exists($url)) {
            require $url;
            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}
