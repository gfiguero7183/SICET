<?php

class MIngresoCTP extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    public function guardar($param){
        $campos = array(
            'id' => $param['id'],
            'Identificacion' => $param['Identificación'],
            'Genero' => $param['Genero'],
            'FechaNacimiento'=> $param['FechaNacimiento'],
            'Edad'=> $param['Edad'],
            'Apellidos' => $param['Apellidos'],
            'Nombres' => $param['Nombres'],
            'Telefono' => $param['Telefono'],
            'NumeroRegistro' => $param['NumeroRegistro'],
            'FechaIngreso' => $param['FechaIngreso'],
            'HoraIngreso' => $param['HoraIngreso'],
            'IdentificacionPolicia' => $param['IdentificacionPolicia'],
            'Placa' => $param['Placa'],
            'ApellidosPolicia' => $param['ApellidosPolicia'],
            'NombresPolicia' => $param['NombresPolicia'],
            'FechaDetalle' => $param['FechaDetalle'],
            'HoraDetalle' => $param['HoraDetalle'],
            'MotivoDetalle' => $param['MotivoDetalle']

        );
        $this->db->insert('IngresoCTP',$campos);
    }
}