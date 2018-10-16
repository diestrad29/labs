<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroUsuario extends CI_Controller {

	public function index()
	{
		$this->load->view('registro/registro_usuario');
	}

	public function email(){

		$this->load->library('email');

		$this->email->to('diegu4r@gmail.com');
		$this->email->from('noreply@gmail.com');
		$this->email->subject('Activación cuenta');
		$this->email->message('Por favor pulse el siguiente enlace para activar su cuenta.' . 'http://localhost/deleyes/index.php/registrousuario/finalizarRegistro?code='.'575321201');
		$this->email->send();

	}

	public function recibedatosRegistro(){

		$code = rand(0,999999999);

		$data = array(

			'codigo' => $code,
			'nombre' => $this->input->post('nom'),
			'tipodocumento' => $this->input->post('doc'),
			'numdocumento' => $this->input->post('num'),
			'correo' => $this->input->post('correo'),
			'telefono' => $this->input->post('tel')
		);

		$this->load->model('registro/registrotemporal_model');
		$this->registrotemporal_model->registrarUsuarioTemporal($data);
		//self::email();
		$this->load->view('alertas/registrotemporal');
		$this->load->view('bienvenida/dashboard');
	}

	public function finalizarRegistro(){

		$data = array(
			'codigo' => $this->input->get('code')
		);

		$this->load->model('registro/registrofinal_model');
		$this->registrofinal_model->registrarUsuarioFinal($data);
		$this->load->view('alertas/registrofinal');
		$this->load->view('bienvenida/dashboard');				

	}
}
