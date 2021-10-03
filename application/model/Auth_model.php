<?php
// model is used to communicate with database 
class Auth_model extends CI_MODEL{

    function signup($formArray){

        $this->db->insert('students', $formArray); //INSERT INTO user(name,email) values (? , ?)
    }

/*
    function all(){

       return $users = $this->db->get('students')->result_array();  // SELECT * from users 

    }

    function getUser($Id){
      
        return  $this->db->where('id' , $Id)->get('students')->row_array(); // select * from users where user_id= ? 
    }

    function updateUser($Id,$formArray){

        $this->db->where('id',$Id);
        $this->db->update('students',$formArray); // update user SRT name = ? , email = ? where user_id = ? 
    }

    function deleteUser($Id){

        $this->db->where('id' , $Id);
        $this->db->delete('students');  // DELETE FROM users where user_id = ? 
    }
    */
}
?>