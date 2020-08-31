<?php

/*clase controlador prncipal
se encarga de cargar los modelos y  lasvistas*/

class controlador
{

    //cargar modelos
    public function modelo($modelo)
    {
        //cargar
        require_once '../app/modelos/' . $modelo . '.php';

        //instacia del modelo
        return new $modelo;
    }
    //cargar vistas
    public function vista($vista, $datos = [])
    {
        //evisa si el  archivo vista existe
        if (file_exists('../app/vistas/' . $vista . '.php')) {
            //carga la vista encontrada
            require_once '../app/vistas/' . $vista . '.php';
        } else {
            //el archivo de la vista no  existe
            die('La vista no existe');
        }
    }

}
