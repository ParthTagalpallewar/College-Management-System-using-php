<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Auth_model extends CI_Model
{

    public function signup($formArray)
    {

        $this->db->insert('students', $formArray); //INSERT INTO user(name,email) values (? , ?)
    }

}
