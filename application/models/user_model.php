<?php
class user_model extends CI_model{
    function create($formArray)
    {
        $this->db->insert('users',$formArray);  //INSERT INTO users (data)
    }
      function all(){
        return $users = $this->db->get('users')->result_array();   //Select * from users  
      }
      function getUser($userId){
          $this->db->where('user_id',$userId);
          return $user = $this->db->get('users')->row_array();     //select * from users where user_id = ?
      }
      function updateUser($userId,$formArray){
          $this->db->where('user_id',$userId);
          $this->db->update('users',$formArray);  //update user SET name = ?, same as others.. where user_id = ?
      }
      function deleteUser($userId){
          $this->db->where('user_id',$userId);
          $this->db->delete('users');     //delete from users where user_id = ?
      }
}
?>