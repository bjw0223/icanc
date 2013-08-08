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
		$this->db->order_by('srl', 'desc');
		$query=$this->db->get();
		return $query->result();
	}
	
	function get($srl)
	{
		$this->_hit($srl);
		$this->db->where('srl',$srl);
		$query=$this->db->get('faq_board');
		return $query->result();
	}
	
	function _hit($srl)
	{
		$this->db->where('srl', $srl);
		$this->db->set('hits', 'hits+1', false);
		$this->db->update('faq_board');

	}
    function getList($srl,$limit=10)
    {
		$this->db->select('*');
		$this->db->order_by('srl', 'desc');
		$query=$this->db->get('faq_board');
    }
    public function saveDoc($flag, $arg)
    {
        if($flag == 'write') // 처음 글쓸경우
        {
            $this->db->set('created_time','NOW()',false);
            $this->db->set('modified_time','NOW()',false);
        }
        else if( $flag == 'modify') // 쓴 글을 수정한 경우
        {
            $this->db->set('modified_time','NOW()',false);
        }
            $this->db->insert('faq_board',$arg);
    }
}



