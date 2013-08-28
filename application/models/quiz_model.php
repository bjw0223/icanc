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
    
    // 퀴즈 생성
    function getCodingQuiz($id)
    {
        $result = $this->db->get_where('coding_quiz',array('id'=>$id))->row();
        return $result;
    }

    // thread 코드 생성
    function getCodingCode($id)
    {
        $result = $this->db->get_where('coding_code',array('id'=>$id))->row();
        return $result;
    }

    // 해당 카테고리 내의 문제 개수 확인 
    function getCountQuestion($category)
    {
        $this->db->where(array('category'=>$category));
        $result['count'] = $this->db->count_all_results('coding_quiz');
        return $result;
    }
    
    // 카테고리 종류 및 개수
    function getCategory()
    {
        $query = $this->db->query('SELECT DISTINCT * FROM coding_quiz GROUP BY category ORDER BY id ASC');
        $count['count'] = $query->num_rows();
        $data = $query->result_array();
        $result = array_merge($count,(array)$data); 
        return $result;
    }
    
    // 해당 카테고리 내의 레코드 가져오기 
    function getQuestionId($category)
    {
        $result = $this->db->get_where('coding_quiz',array('category'=>$category))->result_array();
        return $result;
    }

    function setCodingQuiz($data)
    {
        var_dump($data);
        $this->db->set('question',$data['question']);
        $this->db->set('answer',$data['answer']);
        $this->db->set('head',$data['head']);
        $this->db->set('tail',$data['tail']);
        $this->db->set('description',$data['description']); 
        $this->db->insert('coding_quiz');
    }
    
//진영끝
}
