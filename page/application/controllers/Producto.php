<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

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

	public function agregar_carrito()
	{
		$data = array(
			'id' => $this->input->post('id')
		);
		$this->cart->insert($data);
	}

	public function mostrar_carrito()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'ido' => $this->input->post('ido'),
			'idy' => $this->input->post('idy'),
			'idt' => $this->input->post('idt')
		);
		$this->cart->insert('$data');
	}


	


}
