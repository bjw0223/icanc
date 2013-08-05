<?php
class Board_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
	function gets()
	{
		$this->db->select('*');
		$this->db->from('faq_board');
		$query=$this->db->get();
		return $query->result();
	}
	
	function get($srl)
	{
		$this->db->select('*');
		$this->db->from('faq_board');
		$this->db->where('srl',$srl);
		$query=$this->db->get();
		return $query->result();
	}
}



