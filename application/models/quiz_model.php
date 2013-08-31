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
    
    // 기본문제 에디터 퀴즈 생성
    function getCodingQuiz($id)
    {
        $this->db->join('coding_category','coding_basic.categoryNo = coding_category.id','rigth');
        $result = $this->db->get_where('coding_basic',array('coding_basic.id'=>$id))->row();
        return $result;
    }

    // thread 코드 생성
    function getCodingCode($id)
    {
        $result = $this->db->get_where('coding_code',array('id'=>$id))->row();
        return $result;
    }
    
    // 기본문제 카테고리 종류 및 개수
    function getCategory()
    {
        // 카테고리 총 개수 및 내용  
        $query = $this->db->query('SELECT * FROM coding_category ORDER BY id ASC');
        $count['count'] = $query->num_rows();
        $data = $query->result_array();

        // 카테고리별 문제 개수
        $query = $this->db->query('SELECT DISTINCT * FROM (SELECT *  FROM coding_basic ORDER BY categoryNo ASC, questionNo DESC) AS coding GROUP BY coding.categoryNo');
        $rawData = $query->result_array();
        for($i=0; $i<$count['count']; $i++)
        {
            for($j=0; $j<$query->num_rows(); ++$j)
            {
                if( $data[$i]['id'] == $rawData[$j]['categoryNo'])
                {
                    $data[$i]['numInCategory'] = $rawData[$j]['questionNo'];
                }
            }
        }
        
        $result = array_merge($count,$data); 

        return $result;
    }
    
    // 기본문제 각 해당 카테고리 내의 문제 및 개수 
    function getCategoryQuestion($categoryNo)
    {
        $query = $this->db->query('SELECT * FROM coding_category JOIN coding_basic ON coding_basic.categoryNo = coding_category.id WHERE categoryNo='.$categoryNo);
        $count['count'] = $query->num_rows();
        $data = $query->result_array();
        $result = array_merge($count,$data);
        return $result;
    }

    // 실전문제 개수와 제목가져오기
    function getPracticeQuestion()
    {
        $count['count']=$this->db->get('coding_practice')->num_rows();
        $data=$this->db->get('coding_practice')->result_array();
        $result = array_merge($count,$data);
        return $result;
    }

    // id에 해당하는 실전문제 가져오기
    function getPracticeQuiz($id)
    {
        $result = $this->db->get_where('coding_practice',array('id'=>$id))->row();
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
        $this->db->insert('coding_basic');
    }
    
//진영끝
}
