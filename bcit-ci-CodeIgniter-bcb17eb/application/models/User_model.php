<?php

class User_model extends CI_model {
    function create($formArray){
        $this->db->insert('test',$formArray);
        //INSERT INTO users (name,email) values(?,?);
    }
function all(){
   return $users = $this->db->get('test')->result_array();
   //select * from users 
}

function getUser($userID){
    $this->db->where('userID',$userID);
    return $user = $this->db->get('test')->row_array();
    //select * from user where user-id=?
}

function updateUser(){
    $this->db->where('userID',$userID);
    $this->db->update('test',$formArray);
    //updat user select name =? ,email = ? where user_id=?
}

function deleteUser(){
    $this->db->where('userID',$userID);
    $this->db->delete('test');
//delete from user where user_id= ?
}

}

?>