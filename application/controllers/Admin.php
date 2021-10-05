<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_controller
{
    public function index(){
        
        $data = array(
              'query' => $this->input->post('search'),
              'year' => $this->input->post('year'),
              'branch' => $this->input->post('department'),             
        ); 
     
        
        //loading model and sending all students in database
        $this->load->view('admin/home', array(
            'students' => $this->Admin_model->getUsers($data))
        );
    }
}