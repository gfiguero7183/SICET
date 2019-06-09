<?php

class MCrearPersona extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    public function guardar($param){
        $campos = array(
            'TipoIdentificacion' => $param['TipoIdentificacion'],
            'NumeroIdentificacion' => $param['NumeroIdentificación'],
            'Apellidos' => $param['Apellidos'],
            'Nombre'=> $param['Nombre'],
            'FechaNacimiento'=> $param['FechaNacimiento'],
            'Edad' => $param['Edad'],
            'Direccion' => $param['Direccion'],
            'Telefono' => $param['Telefono'],
            'Ocupacion' => $param['Ocupacion']

        );
        $this->db->insert('CrearPersona',$campos);
    }
}