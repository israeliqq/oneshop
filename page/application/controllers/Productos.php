<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('tienda');
		date_default_timezone_set("Chile/Continental");
	}

	public function index()
	{
		$this->layout->view('index');
		//$this->load->view('tienda/index');
	}

	public function carrito()
	{
		$this->layout->setLayout('tienda2');
		$this->layout->view('carrito');
	}

	public function producto()
	{
		$this->layout->setLayout('tienda2');
		$this->layout->view('producto');
	}

	public function pedido()
	{
		$this->layout->setLayout('tienda2');
		$this->layout->view('pedido');
	}

	public function busqueda()
	{
		$this->layout->setLayout('tienda2');
		$this->layout->view('busqueda');
	}



}
