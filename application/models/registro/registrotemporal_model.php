<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrotemporal_model extends CI_Model {

	public function registrarUsuarioTemporal($data){
		$this->load->database();

		$this->db->insert('registro_temporal',
			array(
			'nombre'=>$data['nombre'], 
			'tipo_documento'=>$data['tipodocumento'],
			'numdocumento'=>$data['numdocumento'],
			'email'=>$data['correo'], 
			'telefono'=>$data['telefono'],
			'codigo'=>$data['codigo'])
		);

		$this->db->insert('clientes',
			array(
			'nombre'=>$data['nombre'], 
			'tipo_documento'=>$data['tipodocumento'],
			'numdocumento'=>$data['numdocumento'],
			'email'=>$data['correo'], 
			'telefono'=>$data['telefono'],
			'codigo'=>$data['codigo'])
		);		
	}	
}

?>