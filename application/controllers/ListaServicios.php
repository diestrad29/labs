<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaServicios extends CI_Controller {

	public function index()
	{
		$this->load->model('listas/listaservicios_model');
		$data['servicios'] = $this->listaservicios_model->listaServicios();
		$this->load->view('listas/lista_servicios.php',$data);	
	}

}