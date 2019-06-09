<?php

class MSalidaCTP extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    public function guardar($param){
        $campos = array(
            'id' => $param['id'],
            'NRegistro' => $param['NRegistro'],
            'Genero' => $param['Genero'],
            'Fecha'=> $param['Fecha'],
            'Hora'=> $param['Hora'],
            'IDPersonaConducida' => $param['IDPersonaConducida'],
            'Identificación' => $param['Identificacion'],
            'Genero' => $param['Genero'],
            'FechaNacimiento' => $param['FechaNacimiento'],
            'Edad' => $param['Edad'],
            'Apellidos' => $param['Apellidos'],
            'Nombres' => $param['Nombres'],
            'Telefono' => $param['Telefono'],
            'IDPolicia' => $param['IDPolicia'],
            'NombresPolicia' => $param['NombresPolicia'],
            'Motivo' => $param['Motivo'],
            'FechaConduccion' => $param['FechaConduccion'],
            'DiaSalida' => $param['DiaSalida'],
            'HoraSalida' => $param['HoraSalida'],
            'Observacion' => $param['Observacion']

        );
        $this->db->insert('SalidaCTP',$campos);
    }
}