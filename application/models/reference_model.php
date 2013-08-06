<?php
class Reference_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getReference($name,$flag)
    {
        if( $flag == "false" ) //not search
        {
            $this->db->where('name',$name);
            $data['data'] = $this->db->get('reference')->result();
            $data['total_rows'] = 1;
        } 
        else if( $flag == "true" ) //search
        {    
            $this->db->like('name',$name);
            $data['data'] = $this->db->get('reference')->result();
            $this->db->like('name',$name);
            $data['total_rows'] = $this->db->count_all_results('reference');
        }
        return $data;
    }
}
