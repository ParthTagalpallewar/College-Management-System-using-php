<?php
defined('BASEPATH') or exit('No direct script access allowed');

class studentDashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view("studentDashboard/student_dashboard");

    }

    public function changePassword()
    {
        
        $this->load->view("studentDashboard/change_password");
    }

}
