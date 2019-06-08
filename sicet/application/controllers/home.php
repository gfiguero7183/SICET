<?php


class Home extends CI_Controller
{

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
}