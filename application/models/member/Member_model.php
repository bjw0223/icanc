<?php 

class Member_model  extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function get($id)
    {
        return $this->db->query('SELECT * FROM topic where id='.$id)->row();
        //return $this->db->get_where('topic',array('id'=>$id))->row()
    }
    function gets()
    {
        return $this->db->query('SELECT * FROM topic;')->result();
    }
}
