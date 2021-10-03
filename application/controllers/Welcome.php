<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('homeScreen');
	}
	
	public function login(){
		$this->load->view('student_login');
	}

	public function homeNavigation($view)
	{

		$this->load->view($view);
	}
}
