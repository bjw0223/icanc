<?php
class Reference_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    // 회원 추가(가입)
    function show($fname)
    {
        return $this->db->get_where('reference', array('name'=>$fname))->row();
    }
    function get($name)
    {
        $this->db->where('name',$name);
        return $this->db->get('reference')->row();
    }
    function gets($name)
    {
        $this->db->like('name',$name);
        $data['func'] = $this->db->get('reference')->result();
        $this->db->like('name',$name);
        $data['total_rows'] = $this->db->count_all_results('reference');
        return $data;
    }
    
}
