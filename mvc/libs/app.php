<?php
require_once 'controllers/errores.php';

class App
{

    function __construct()
    {
        //Verficamos que la url no venga vacia si viene vacia se le asigna el valor null
        //En caso contrario asigna el valor de la url
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        //Elimina los espacios en blanco apartir del slash
        $url = rtrim($url, "/");
        //Dividimos el contenido de nuestra url a un arreglo
        $url = explode('/', $url);

        //Cuando se ingresa sin definir controllador
        if (empty($url[0])) {
            //Guarda en nuestra variable la url de nuestra controlador principal
            $archivoController = 'controllers/main.php';
            //Rquerimos el archivo por medio de nuestra variable
            require_once $archivoController;
            //crea un nuevo objeto de la clase main
            $controller = new Main();
            //Genera un modelo main apartir de nuestro controlador
            $controller->loadModel('main');
            //Genera la vista de nuestro modelo apartir de nuestro controlador
            $controller->render();
            //Retorna falso y detenemos el constructor del controllador
            return false;
        }

        //Si la url no es vacia guardamos en la varibale y concatenamos la ubicacion del archivo controller mas la extencion php
        $archivoController = 'controllers/' . $url[0] . '.php';
        //Verifica que el archivoController exista en nuestra carpeta del proyecto
        if (file_exists($archivoController)) {
            //Si existe el archivo genera un nuevo controlador apartir de nuestra variable
            require_once $archivoController;
            //Crea un nuevo controlador apartir del primer parametro recibido por medio de la url
            $controller = new $url[0];
            //Genera un modelo apartir de nuestra url 
            $controller->loadModel($url[0]);
            //Verificamos el tamaño total de parametros que contiene nuestra url
            $nparam = sizeof($url);
            //Validamos si el tamaño de parametros es mayor a uno
            if ($nparam > 1) {
                //Validamos si el tamaño de parametros es mayor a dos
                if ($nparam > 2) {
                    //Creamos una nueva variable de tipo arreglo 
                    $param = [];
                    //Ciclo que recorre y asigna el valor de los parametros a nuestro arreglo
                    for ($i = 2; $i < $nparam; $i++) {
                        array_push($param, $url[$i]);
                    }
                    //Asignamos el valor de nuestros parametros al metodo del controlador
                    $controller->{$url[1]}($param);
                } else {
                    //Si los parametros son vacios generamos el metodo sin parametros
                    $controller->{$url[1]}();
                }
            } else {
                //Generamos la vista
                $controller->render();
            }
        } else {
            //Generamos una nueva instancia de nuestro controlador errores
            $controller = new Errores();
        }
    }
}
