<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

}
