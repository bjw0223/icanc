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
    
}
