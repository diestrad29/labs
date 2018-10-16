<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registroservicio_model extends CI_Model {

	public function registrarServicio($data){
		$this->load->database();

		$this->db->insert('empresa',
			array(
			'idservicio'=>$data['tiposervicio'], 
			'nomempresa'=>$data['nomempresa'],
			'tipoempresa'=>$data['tipoempresa'],
			'numaccionistas'=>$data['numacci'], 
			'cantcapital'=>$data['capital'],
			'departamento'=>$data['categoria'],
			'ciudad'=>$data['subcategoria'])
		);		
	}

	public function registrarServicio2($data){
		$this->load->database();

		$this->db->insert('datacredito',
			array(
			'idservicio'=>$data['tiposervicio'], 
			'fecha'=>$data['fecha'],
			'descripcion'=>$data['descripcion'],
			'soporte'=>$data['soporte'], 
			'departamento'=>$data['categoria'],
			'ciudad'=>$data['subcategoria'])
		);		
	}		
}

?>
