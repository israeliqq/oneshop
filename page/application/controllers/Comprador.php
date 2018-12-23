<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprador extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('tienda2');
		date_default_timezone_set("Chile/Continental");
	}

	public function index()
	{
		$this->layout->setLayout('tienda');
		$producto = $this->producto_model->getProducto();
		$this->layout->view('index',compact('producto'));
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

	public function mis_compras()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('listar_compras');
	}

	public function favoritos()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('favoritos');
	}

	public function orden_compra()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('mostrar_oc');
	}

}
