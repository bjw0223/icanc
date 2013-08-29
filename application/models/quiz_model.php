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
    
    // 코딩 에디터 퀴즈 생성
    function getCodingQuiz($id)
    {
        $this->db->join('quiz_category','coding_quiz.categoryNo = quiz_category.id','rigth');
        $result = $this->db->get_where('coding_quiz',array('coding_quiz.id'=>$id))->row();
        return $result;
    }

    // thread 코드 생성
    function getCodingCode($id)
    {
        $result = $this->db->get_where('coding_code',array('id'=>$id))->row();
        return $result;
    }
    
    // 카테고리 종류 및 개수
    function getCategory()
    {
        // 카테고리 목록  
        $query = $this->db->query('SELECT * FROM quiz_category ORDER BY id ASC');
        $count['count'] = $query->num_rows();
        $data = $query->result_array();

        // 카테고리별 문제 개수
        $query = $this->db->query('SELECT DISTINCT * FROM (SELECT *  FROM coding_quiz ORDER BY categoryNo ASC, questionNo DESC) AS coding GROUP BY coding.categoryNo');
        $rawData = $query->result_array();
        for($i=0; $i<$query->num_rows(); $i++)
        {
           $data[$i]['numInCategory'] = $rawData[$i]['questionNo'];
        }

        $result = array_merge($count,$data); 

        return $result;
    }
    
    // 해당 카테고리 내의 문제 및 개수 
    function getCategoryQuestion($categoryNo)
    {
        $query = $this->db->query('SELECT * FROM quiz_category JOIN coding_quiz ON coding_quiz.categoryNo = quiz_category.id WHERE categoryNo='.$categoryNo);
        $count['count'] = $query->num_rows();
        $data = $query->result_array();
        $result = array_merge($count,$data);
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
