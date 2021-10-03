<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_controller{

   
/*
    function index(){

        $this->load->model('sign_up');
        $students = $this->sign_up->all();
        $data = array();
        $data['students'] = $students;

        $this->load->view('student_login', $data);
    }
*/
    function signup(){



        $this -> form_validation -> set_rules('name' ,'name' ,'required');
        $this -> form_validation -> set_rules('email' ,'email' ,'required|valid_email');
        $this -> form_validation -> set_rules('phone' ,'phone ' ,'required|max_length[10]|min_length[10]');
        $this -> form_validation -> set_rules('branch' ,'branch' ,'required');

        if($this->form_validation->run() == false){

            $this->load->view('student_register');

        }else{
            ///save record to database 
			echo "success" ;

            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
			$formArray['branch'] = $this->input->post('branch');

            $this->Auth_model->signup($formArray);
            $this->session->set_flashdata('success','Record added successfully!');
            redirect(base_url().'index/homeScreen');
        }
    }
/*
    function edit($userId){

        $this->load->model('sign_up');
        $user = $this->sign_up->getUser($userId);
        $data = array();
        $data['students'] = $user;

        $this -> form_validation -> set_rules('name' ,'Name' ,'required');
        $this -> form_validation -> set_rules('email' ,'Email' ,'required|valid_email');

        if($this->form_validation->run() == false){

            $this->load->view('edit', $data);

        }else{

            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $this->sign_up->updateUser($userId , $formArray);

            $this->session->set_flashdata('success','Record updated successfully!');
            redirect(base_url().'index.php/user/index');

        }   
    }

    function delete($userId){

        $this->load->model('sign_up');
        $user = $this->sign_up->getUser($userId);

        if(empty($user)){

            $this->session->set_flashdata('failure','Record not found in database');
            redirect(base_url().'index.php/user/index');

        }
        $this->User_model->deleteUser($userId);
        $this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/user/index');
    }
	*/
}
?>