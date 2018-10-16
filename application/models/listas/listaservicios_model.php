<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listaservicios_model extends CI_Model {

	public function listaServicios(){
		$this->load->database();
		$query = $this->db->get('datacredito');	
		return $query;
	}	
}

?>