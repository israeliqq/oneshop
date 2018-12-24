<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('tienda2');
		date_default_timezone_set("Chile/Continental");
	}

	public function index()
	{
		$this->layout->view('index');
	}

	public function login()
	{
		$this->layout->view('login');
	}

	public function cerrar()
	{
		$this->layout->view('index');
	}

	public function registro()
	{
		if (isset($_POST['btnRegistrar'])){
			$producto = array(	
				'nombre' 			=> $_POST['titulo'],
				'descripcion' 		=> $_POST['descripcion'],
				'precio' 			=> $_POST['precio'],
				'stock' 			=> $_POST['stock'],
				'subcategoria_id' 	=> $_POST['categoria'],
				'proveedor_id'		=> $_POST['proveedor']
			);
			$bandera = $this->producto_model->InsertProducto($producto);
			$this->layout->view('listar_productos');
		}else{
			$this->layout->view('ingresar_producto');
		}
	}

	public function ayuda()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('ayuda');
		//$this->load->view('tienda/index');
	}

	public function mensajes()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('mensajes');
	}



}
