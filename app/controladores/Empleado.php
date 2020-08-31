<?php

/**
 *
 */
class Empleado extends Controlador
{

    public function __construct()
    {
        # code...
    }

    public function agregar()
    {

        $this->vista('empleado/viewadd');

    }

    public function lista()
    {

        $this->vista('empleado/viewadd');
    }
}
