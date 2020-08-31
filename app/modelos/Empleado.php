<?php

/**
 *
 */
class Empleado
{
    private $db;

    public function __construct()
    {

        $this->db = new Base;
    }

    public function obtenerEmpleados()
    {
        $this->db->query('SELECT ');

    }
}
