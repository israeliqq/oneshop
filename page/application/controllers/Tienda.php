<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('tienda2');
		date_default_timezone_set("Chile/Continental");
	}

	public function index()
	{
		$this->layout->setLayout('tienda');
		$this->layout->view('index');
		//$this->load->view('tienda/index');
	}

	public function carrito()
	{
		$this->layout->view('carrito');
	}

	public function producto()
	{
		$this->layout->view('producto');
	}

	public function pedido()
	{
		$this->layout->view('pedido');
	}

	public function busqueda()
	{
		$this->layout->view('busqueda');
	}

	public function registro()
	{
		$this->layout->view('registro_usuario');
		//$this->load->view('tienda/index');
	}



}
