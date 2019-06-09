<?php

class MUsuarios extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    public function guardar($param){
        $campos = array(
            'Nombres' => $param['Nombres'],
            'Apellidos' => $param['Apellidos'],
            'Unidad' => $param['Unidad'],
            'Rol' => $param['Rol'],
            'Direccion' => $param['Direccion'],
            'Telefono' => $param['Telefono'],
            'Usuario' => $param['Usuario'],
            'Password' => $param['Password']

        );
        $this->db->insert('Usuarios',$campos);
    }
}