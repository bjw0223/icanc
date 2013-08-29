<?php
class Board_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function _getBoard($board)
	{
		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else if($board=='free'){
			$this->db->where('board_name', 3);
		}else{
			//게시판 추가
		}
	}

	function _setBoard($board)
	{
		if($board=='faq'){
			$this->db->set('board_name', 1);
		}else if($board=='qna'){
			$this->db->set('board_name', 2);
		}else if($board=='free'){
			$this->db->set('board_name', 3);
		}else {
			//게시판 추가
		}
	}

	function get($srl)
	{
		$this->_hit($srl);
		$this->db->where('srl',$srl);
		$query=$this->db->get('board');
		return $query->row();
	}
	
	function _hit($srl)
	{		
		$this->db->where('srl', $srl);
		$this->db->set('hits', 'hits+1', false);
		$this->db->update('board');
	}
    
	function getList($board, $search_param=null,$page=1,$list_count=10)
    {
        $this->db->order_by('group_id', 'desc');
		$this->db->order_by('reply_srl','asc');
        $this->db->limit($list_count , ($page-1)*$list_count );
		$this->db->where('is_deleted', 0);	//삭제 확인
		$this->db->where('is_blind', 0);	//블라인드 확인
		$this->db->where('is_closed', 0);	//비공개 확인
		
/*		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else {
			//게시판 추가
		}
*/		
		$this->_getBoard($board);

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
		
/*		if($board=='faq'){
			$this->db->where('board_name', 1);
		}else if($board=='qna'){
			$this->db->where('board_name', 2);
		}else {
			//게시판 추가
		}
*/
		$this->_getBoard($board);

		$total_rows = $this->db->count_all_results('board');
        
		$data['list'] = $query;
        $data['total_rows'] = $total_rows;
        $data['page'] = $page;
        $data['list_count'] = $list_count;
        $data['page_count'] = ceil($total_rows / $list_count) ;

		return $data;
    }
    
	public function saveDoc($data, $board)
    {
		$total_rows = $this->db->count_all_results('board');
		
/*		if($board=='faq'){
			$this->db->set('board_name', 1);
		}else if($board=='qna'){
			$this->db->set('board_name', 2);
		}else {
			//게시판 추가
		}
*/
		$this->_setBoard($board);

        $this->db->set('created_time','NOW()',false);
        $this->db->set('modified_time','NOW()',false);
       	$this->db->set('group_id', $total_rows+1);
		$this->db->insert('board',$data);
    }

	function saveModifiedDoc($data, $board, $srl)
	{
		$this->db->where('srl', $srl);
        $this->db->set('modified_time','NOW()',false);
		$this->db->set('title', $data['title'] );
		$this->db->set('text', $data['text'] );
		$this->db->update('board');
	}

	function saveReplyDoc($data, $board, $srl)
	{
		//get parent's infomation
		$this->db->where('srl', $srl);
		$result = $this->db->get('board')->row();
		//check parent's reply_cnt
		$reply_srl = $result->reply_cnt+1;
		//insert reply_cnt+1 to reply_srl
		
		$this->db->where('srl', $srl);
		$this->db->set('reply_cnt', 'reply_cnt+1', false);
		$this->db->update('board');

/*		if($board=='faq'){
			$this->db->set('board_name', 1);
		}else if($board=='qna'){
			$this->db->set('board_name', 2);
		}else {
			//게시판 추가
		}
*/
		$this->_setBoard($board);

		$this->db->set('created_time','NOW()',false);
      	$this->db->set('modified_time','NOW()',false);
      	$this->db->set('group_id', $srl);
		$this->db->set('reply_srl', $reply_srl);
		$this->db->insert('board',$data);
	}

	function delDoc($srl)
	{
		var_dump($srl);
		$this->db->where('srl', $srl);
		$this->db->set('is_deleted', 1);
		$this->db->update('board');
	}

	function good($srl)
	{	
		$this->db->where('srl', $srl);
		$this->db->set('goods', 'goods+1', false);
		$this->db->update('board');
	}

    function getMyList($search_param=null,$page=1,$list_count=10,$nickname)
    {
		$this->db->where('writer', $nickname);
		$this->db->where('is_deleted', 0);
        $this->db->order_by("srl", "desc");
        $this->db->limit($list_count , ($page-1)*$list_count );

        if($search_param == null) {  
		  	$query=$this->db->get('board')->result();
            $this->db->where('writer', $nickname);
            $total_rows = $this->db->count_all_results('board');

        }else{
            $this->db->like($search_param['search_key'],$search_param['search_keyword']);
            $query=$this->db->get('board')->result();

            $this->db->where('writer', $nickname);
            $this->db->like($search_param['search_key'],$search_param['search_keyword']);
            $total_rows = $this->db->count_all_results('board');
        }

		$data['list'] = $query;
        $data['total_rows'] = $total_rows;
        $data['page'] = $page;
        $data['list_count'] = $list_count;
        $data['page_count'] = ceil($total_rows / $list_count) ;

		return $data;

    }
    function getWriter($srl)
    {
        $this->db->select('writer');
		$this->db->where('srl', $srl);
        $query=$this->db->get('board')->row();
        return $query;
    }

}



