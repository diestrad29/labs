<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrofinal_model extends CI_Model {

	public function registrarUsuarioFinal($data){
		$this->load->database();
		$this->db->set('estado', '0');
		$this->db->where('codigo', $data['codigo']);
		$this->db->update('clientes'); // gives UPDATE mytable SET field = field+1 WHERE id = 2		

	}	
}

?>