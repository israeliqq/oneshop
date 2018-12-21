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
		$this->layout->setLayout('tienda');
		$this->layout->view('index');
		//$this->load->view('tienda/index');
	}

	public function ingresar_producto()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('ingresar_producto');
		//$this->load->view('tienda/index');
	}




}
