<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
class Usuario_model extends CI_MODEL{
	public function __Construct()
	{

		parent::__Construct();
		$this->load->database();


	}


	function registrar($persona)
		{
			var_dump($persona);
			$this->db->insert('registrousuario',$persona);
			
		}	

	}
	



?>