<?php

/**
 *
 */
class Proveedorcon
{

    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerproveedores()
    {

        $this->db->query('SELECT * FROM proveedores');
        $lista = $this->db->registros();
        return $lista;
    }

    public function obtenerproveedor($proveedor)
    {

        $this->db->query('SELECT * FROM proveedores WHERE  id_prov=' . $proveedor);
        $prove = $this->db->registro();
        return $prove;
    }

}
