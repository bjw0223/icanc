<?php 

class Member_model  extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function checkvalue($data)
    {
       $this->db->get_where(''); 
       // return $this->db->query('SELECT * FROM topic where id='.$id)->row();
        //return $this->db->get_where('topic',array('id'=>$id))->row()
    }
}
