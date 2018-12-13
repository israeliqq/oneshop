<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('organolayout');
		date_default_timezone_set("Chile/Continental");
	}

	public function index(){
		if($this->session->userdata('organo')){ 
			if($this->session->userdata('organo')=="ADMIN"){ 
				redirect(base_url()."home/menu");
			}else{
				$this->layout->view("index");}
		}else{ redirect(base_url()."home/error"); }
	}






}
