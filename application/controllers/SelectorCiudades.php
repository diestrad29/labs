<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectorCiudades extends CI_Controller {

	public function index()
	{
		$this->load->view('registro/registro_servicio');
	}

	public function cargarcombo(){

	$options="";

		 if ($_POST["micategoria"]=='cundinamarca') {
		             $options= '
		             <option value="bogota">Bogotá</option>
		             <option value="chia">Chia</option>
		             <option value="soacha">Soacha</option>
		             ';    
		         }
		 if ($_POST["micategoria"]=='valledelcauca') {
		             $options= '
		     		 <option value="cali">Cali</option>
		         	 <option value="caicedonia">Caicedonia</option>
		         	 <option value="jamundi">Jamundi</option>
		             ';    
		         }
		 if ($_POST["micategoria"]=='antioquia') {
		             $options= '
		        	 <option value="medellin">Medellín</option>
		             <option value="itagui">Itagui</option>
		             <option value="rionegro">Rionegro</option>
		             ';    
		         }
 
    echo $options;

	}

}