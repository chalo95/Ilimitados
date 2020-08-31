<?php

/**
 *
 */
class Proveedor extends Controlador
{

    public function __construct()
    {
        $this->proveedormodel = $this->modelo('Proveedorcon');
    }

    public function agregar()
    {

        $this->vista('proveedor/viewadd');
    }

    public function lista()
    {
        //obtiene la lista de los usiarios
        $proveedor = $this->proveedormodel->obtenerproveedores();
        $lista     = ['proveedor' => $proveedor];
        $this->vista('proveedor/viewlista', $lista);
    }

    public function editar($dato)
    {

    }

    public function eliminar($dato)
    {

    }

    public function datos($dato)
    {
        $proveedor = $this->proveedormodel->obtenerproveedor($dato);
        $lista     = ['proveedor' => $proveedor];
        $this->vista('proveedor/viewdato', $proveedor);

    }

}
