<?php


class Home extends CI_Controller
{

    function __construct(){
        parent:: __construct();
        $this->load->model('mUsuarios');
    }

    public function index(){
        $this->load->helper('url'); 
        $this->load->view("home");
    }
    public function menu(){
        $this->load->helper('url'); 
        $this->load->view("menuPrincipal");
    }
    public function ingreso(){
        $this->load->helper('url'); 
        $this->load->view("ingresoCTP");
    }
    public function salida(){
        $this->load->helper('url'); 
        $this->load->view("salidaCTP");
    }
    public function crearPersona(){
        $this->load->helper('url'); 
        $this->load->view("crearPersona");
    }
    public function crearUsuario(){
        $this->load->helper('url'); 
        $this->load->view("crearUsuario");
    }
    public function guardar(){
        $param['Nombres']= $this->input->post('Nombres');
        $param['Apellidos']= $this->input->post('Apellidos');
        $param['Grado']= $this->input->post('Grado');
        $param['Unidad']= $this->input->post('Unidad');
        $param['Rol']= $this->input->post('Rol');
        $param['Direccion']= $this->input->post('Direccion');
        $param['Telefono']= $this->input->post('Telefono');
        $param['Usuario']= $this->input->post('Usuario');
        $param['Password']= $this->input->post('Password');
        $this->mUsuarios->guardar($param);
    }
}