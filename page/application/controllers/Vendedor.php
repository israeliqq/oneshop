<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('tienda2');
		date_default_timezone_set("Chile/Continental");
	}

	public function index()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('resumen');
		//$this->load->view('tienda/index');
	}

	public function ingresar_producto()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('ingresar_producto');
		//$this->load->view('tienda/index');
	}

	public function orden_compra()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('mostrar_oc');
		//$this->load->view('tienda/index');
	}

	public function actualizar_datos()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('actualizar_datos');
		//$this->load->view('tienda/index');
	}

	public function listar_productos()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('listar_productos');
		//$this->load->view('tienda/index');
	}

	public function resumen()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('resumen');
		//$this->load->view('tienda/index');
	}




}
