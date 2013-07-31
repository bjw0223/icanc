<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function add($option)
    {
        $this->db->set('email',$option['email']);
        $this->db->set('nickname',$option['nickname']);
        $this->db->set('password',$option['password']);
        $this->db->set('created','NOW()',false);
        $this->db->insert('user');
        $result = $this->db->insert_id();
        return $result;
    }
    
    function del($email)
    {
       $this->db->where('email', $email);
       $this->db->delete('user'); 
    }


    
    function getByEmail($option)
    {
        $result = $this->db->get_where('user',array('email'=>$option['email']))->row();
        return $result;
    }


}
