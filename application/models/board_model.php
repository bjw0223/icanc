<?php
class Board_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	function get($board ,$srl)
	{
		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else {
			//게시판 추가
		}
		
		$this->_hit($board, $srl);
		$this->db->where('srl',$srl);
		$query=$this->db->get('_board');
		return $query->row();
	}
	
	function _hit($board, $srl)
	{		
		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else {
			//게시판 추가
		}

		$this->db->where('srl', $srl);
		$this->db->set('hits', 'hits+1', false);
		$this->db->update('board');
	}
    
	function getList($board, $search_param=null,$page=1,$list_count=10)
    {
        $this->db->order_by("srl", "desc");
        $this->db->limit($list_count , ($page-1)*$list_count );
		$this->db->where('is_deleted', 0);	//삭제 확인
		$this->db->where('is_blind', 0);	//블라인드 확인
		$this->db->where('is_closed', 0);	//비공개 확인
		
		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else {
			//게시판 추가
		}
		
        if($search_param == null) {  
		  	$query=$this->db->get('board')->result();

        }else{
            $this->db->like($search_param['search_key'],$search_param['search_keyword']);
            $query=$this->db->get('board')->result();
            $this->db->like($search_param['search_key'],$search_param['search_keyword']);
        }

		/*게시물 갯수 확인을 위해 재확인*/
		$this->db->where('is_deleted', 0);	//삭제 확인
		$this->db->where('is_blind', 0);	//블라인드 확인
		$this->db->where('is_closed', 0);	//비공개 확인
		
		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else {
			//게시판 추가
		}
		
		$total_rows = $this->db->count_all_results('board');
        
		$data['list'] = $query;
        $data['total_rows'] = $total_rows;
        $data['page'] = $page;
        $data['list_count'] = $list_count;
        $data['page_count'] = ceil($total_rows / $list_count) ;

		return $data;
    }
    
	public function saveDoc($flag, $arg, $board)
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
	
		if($board=='faq'){
			$this->db->set('board_name', 1);
		}else if($board=='qna'){
			$this->db->set('board_name', 2);
		}else {
			//게시판 추가
		}

        $this->db->insert('board',$arg);
    }
	
	function good($board, $srl)
	{	
		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else {
			//게시판 추가
		}
		
		$this->db->where('srl', $srl);
		$this->db->set('goods', 'goods+1', false);
		$this->db->update('board');
	}
}



