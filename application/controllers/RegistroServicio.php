<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroServicio extends CI_Controller {

	public function index()
	{
		$this->load->view('registro/registro_servicio');
	}

	public function service2()
	{
		$this->load->view('registro/registro_servicio2');
	}

	public function registrarservicio(){

		$data = array(

			'tiposervicio' => $this->input->post('tiposervicio'),
			'nomempresa' => $this->input->post('nomempresa'),
			'tipoempresa' => $this->input->post('tipoempresa'),
			'numacci' => $this->input->post('numacci'),
			'capital' => $this->input->post('capital'),
			'categoria' => $this->input->post('categoria'),
			'subcategoria' => $this->input->post('subcategoria')
		);

		$this->load->model('registro/registroservicio_model');
		$this->registroservicio_model->registrarServicio($data);
		$this->load->view('alertas/registroservicio');
		$this->load->view('registro/registro_servicio');
	}

	public function registrarservicio2(){

		$data = array(

			'tiposervicio' => $this->input->post('tiposervicio'),
			'fecha' => $this->input->post('fecha'),
			'descripcion' => $this->input->post('descripcion'),
			'soporte' => $this->input->post('soporte'),
			'categoria' => $this->input->post('categoria'),
			'subcategoria' => $this->input->post('subcategoria')
		);

		$this->load->model('registro/registroservicio_model');
		$this->registroservicio_model->registrarServicio2($data);
		$this->load->view('alertas/registroservicio');
		$this->load->view('registro/registro_servicio2');


	}	

}