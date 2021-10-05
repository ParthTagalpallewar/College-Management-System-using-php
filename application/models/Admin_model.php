<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_model extends CI_Model
{

    public function getUsers($data){

        // if query is not null then add        
        if(isset($data['query']) & !empty($data['query'])){
            
            $this->db->like('name', $data['query']);
            
        }
        
        // if query is not null then add        
        if($data['year'] != null & $data['year'] != 'all'){
            
            $this->db->where('year', $data['year']);
            
        }
        // if query is not null then add        
        if($data['branch'] != null & $data['branch'] != 'all'){
            
            $this->db->where('branch', $data['branch']);
            
        }

        

        return $this->db->order_by('id', 'DESC')->get('students')->result_array();
    }

}