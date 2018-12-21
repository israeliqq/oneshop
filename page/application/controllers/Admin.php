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

	public function registro()
	{
		$this->layout->view('registrar');
	}

	public function ayuda()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('ayuda');
		//$this->load->view('tienda/index');
	}

}
