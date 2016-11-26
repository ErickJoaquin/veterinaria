<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

class Animal_model extends CI_MODEL{
	public function __Construct()
	{

		parent::__Construct();
		$this->load->database();


	}


	function guardarRegistros($registros)
		{

			$this->db->insert('registroanimal',$registros);
			
		}

	function listarAnimales()
	{
		$query = $this->db->get('registroanimal');
		return $query->result();

	}	


	

	}
	



?>