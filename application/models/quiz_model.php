<?php
class Quiz_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
//  지웅 시작  
	function getObjectiveQuiz($srl)
	{
		$this->db->where('srl',$srl);
		$this->db->from('objective_quiz');
		$query=$this->db->get()->row();
		return $query;
	}
/*	
	function get($srl)
	{
		$this->_hit($srl);
		$this->db->where('srl',$srl);
		$query=$this->db->get('faq_board');
		return $query->row();
	}
*/
// 지웅끝



// 진영시작
    
    function getCodingQuiz($id)
    {
        $result = $this->db->get_where('coding_quiz',array('id'=>$id))->row();
        return $result;
    }

    
    
    
    
//진영끝
}
