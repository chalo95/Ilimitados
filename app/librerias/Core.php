<?php
/*se encarga de mapear la url  y obtiene los valores de estos
para poder controlarlo*/

class Core
{
    //declaracion de define_syslog_variables()
    protected $controladorActual = 'Paginas';
    protected $metodactual       = 'index';
    protected $parametros        = [];

    //constructor de la funcion
    public function __construct()
    {
        //print_r($this-> getUrl());
        $url = $this->getUrl();
        //isset me evalua el array si esta vacio me define false pero si hay algo true
        if (isset($url[0])) {
            //busca el contralodor
            if (file_exists('../app/controladores/' . ucwords($url[0]) . '.php')) {
                //si existe lo setea como controlador actual
                $this->controladorActual = ucwords($url[0]);

                //unset(desarmado) indice
                unset($url[0]);
            }
        }
        //adquirir el controlador predefinido
        require_once '../app/controladores/' . $this->controladorActual . '.php';
        $this->controladorActual = new $this->controladorActual;

        //obtener el  metodo de la url
        if (isset($url[1])) {
            if (method_exists($this->controladorActual, $url[1])) {
                //revisando el metodo o obteniendo el metodo
                $this->metodactual = $url[1];
                unset($url[1]);
            }
        }
        //prueba de funcionamiento
        //echo $this->metodactual;

        //obtener posibles parametros
        $this->parametros = $url ? array_values($url) : [];

        //llamar callback con parametros del array

        call_user_func_array([$this->controladorActual, $this->metodactual], $this->parametros);
    }

    //retorna la url del navegador del archivo .htaccess de publicc
    public function getUrl()
    {
        //echo $_GET['url'];
        if (isset($_GET['url'])) {
            //rtrim este me camia los / en espacios
            $url = rtrim($_GET['url'], '/');
            //valida que es una url y lo filtra
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //me dimilita de donde hasta que caractere me incluye en el array
            $url = explode('/', $url);
            return $url;
        }
    }
}
