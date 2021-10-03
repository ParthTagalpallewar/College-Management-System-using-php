<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Auth_model extends CI_Model
{


    public function signup($formArray)
    {   
        $idCode = $this->getIdCode($formArray);
        $formArray['idcode'] = $idCode;
        $formArray['password'] = $idCode;

        $this->db->insert('students', $formArray);
    }

    
	public function getIdCode($formArray){
		$year = substr(date("Y"), 2); 
        $department = $formArray['branch']; 

        $cond = array(
            'branch' => $department,
            'year' => $formArray['year'] 
        );
        $studentsId = $this->db->where($cond)->get('students')->num_rows() + 1;
    
        if(strlen($studentsId) == 1){
            $studentsId = "00". $studentsId;
        }
        if(strlen($studentsId) == 2){
            $studentsId = "0" . $studentsId;
        }

        $finalId = $year. $department. $studentsId; 
		return $finalId;
	}

    // return true if phone number does not exist in database
    public function checkPhoneAlreadyExits($phone){
       
        return $this->db->where('phone', $phone)->get('students')->num_rows() != 0;
    }

}
