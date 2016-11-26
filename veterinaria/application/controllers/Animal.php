<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Animal_model');
		$this->load->model('Usuario_model');
	}
	public function index()
	{
		$this->load->view('mascotas/login');
	}


	function registrarM()
	{	
		session_start();
	if (isset($_SESSION['loggedin'] ) && $_SESSION['loggedin']== true){
		$this->load->view('mascotas/registrarM');
		if ($_POST){
			if ($_POST['nombre'] == "" or $_POST['fn'] == "" or $_POST['tipo'] == ""
				or $_POST['raza'] == "" or $_POST['peso'] == "" or $_POST['color'] == ""
				or $_POST['foto'] == "" or $_POST['comentario'] == ""){
				echo "<script>alert('Dejo algun campo vacio')</script>";

			}	
			else{
			$this->Animal_model->guardarRegistros($_POST);
			header('location:http://veterinaria.000webhostapp.com/animal/mensaje');
			}
		}
		}
		else{
			echo "<script>alert('Inicie session')</script>";
			$this->load->view('mascotas/login');

		
		}
		

		}
	

	function registrarUsuario()
	{
		$this->load->view('mascotas/registrarUsua');
		if ($_POST){
			if ($_POST['email'] == "" or $_POST['nombre'] == "" or $_POST['clave'] == ""){
				echo "<script>alert('Dejo algun campo vacio')</script>";

			}	
			else{
			$this->Usuario_model->registrar($_POST);
			header('location:http://veterinaria.000webhostapp.com/animal/mensaje');

			}
		}
		
	}

	function checklogin()
		{	
			session_start();
			$this->load->view('mascotas/login');
			if($_POST){
			$host_db = "localhost";
			$user_db = "id213722_root";
			$pass_db = "allweneedislove";
			$db_name = "id213722_veterinaria";
			$tbl_name = "registrousuario";

			$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

			if ($conexion->connect_error){
				die("La conexion fallo: " . $conexion->connect_error);
			}

			$correo = $_POST['email'];
			$password = $_POST['clave'];

			$sql = "SELECT * FROM $tbl_name where email = '{$correo}'";	

			$result = $conexion->query($sql);



			$row= mysqli_fetch_assoc($result);

			$sql = "SELECT * FROM $tbl_name ";	

			$result = $conexion->query($sql);



			$campo= mysqli_fetch_assoc($result);

			if ($campo['id'] == null){
				if ($password == "1tl4w3b" and $correo =="admin"){
					$_SESSION['loggedin'] = true;
					header('location:http://veterinaria.000webhostapp.com/animal/registrarM');
				}
				else{
                                echo "<script>alert('Error en su correo o contrasena')</script>";
                               
					}
				


			}
			else{	
			if($row['clave'] == $password){
					
				$_SESSION['loggedin'] = true;

			

			header('location:http://veterinaria.000webhostapp.com/animal/registrarM');
			

			}
			else{
                echo "<script>alert('Error en su correo o contrasena')</script>";
				}

			}
		}
	}



	function mensaje(){
		$this->load->view('mascotas/mensaje');	
		}

	function cerrarSesion(){
      
			session_start();
            Unset($_SESSION['correo']);
            session_destroy();
            header('location:http://veterinaria.000webhostapp.com/animal');

                  
        }	




}