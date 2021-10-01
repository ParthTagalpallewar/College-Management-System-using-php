<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('student_register');
	}
	
	public function login(){
		$this->load->view('student_login');
	}
}
