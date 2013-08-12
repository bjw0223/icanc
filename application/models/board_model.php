<?php
class Board_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
/*	function gets()
	{
		$this->db->select('*');
		$this->db->from('faq_board');
		$this->db->order_by('srl', 'desc');
		$query=$this->db->get();
		return $query->result();
	}
*/
	function get($board ,$srl)
	{
		$this->_hit($board, $srl);
		$this->db->where('srl',$srl);
		$query=$this->db->get($board.'_board');
		return $query->row();
	}
	
	function _hit($board, $srl)
	{
		$this->db->where('srl', $srl);
		$this->db->set('hits', 'hits+1', false);
		$this->db->update($board.'_board');

	}
    
	function getList($table, $search_param=null,$page=1,$list_count=10)
    {
        $this->db->order_by("srl", "desc");
        $this->db->limit($list_count , ($page-1)*$list_count );
		//$query=$this->db->get($table)->result();

        if($search_param == null) {
            $query=$this->db->get($table)->result();
			//블라인드와 삭제 확인하기
            $total_rows = $this->db->count_all_results($table);

        //    $query = $this->db->get($this->table);

          //  $total_rows = $this->db->count_all($this->table);

        }else{

            $this->db->like($search_param['search_key'],$search_param['search_keyword']);
            $query=$this->db->get($table)->result();
            $this->db->like($search_param['search_key'],$search_param['search_keyword']);
            //블라인드와 삭제 확인하기
			$total_rows = $this->db->count_all_results($table);
        }

		//$this->db->where('is_blind', 0);
        //$total_rows = $this->db->count_all_results($table);

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
        $this->db->insert($board.'_board',$arg);
    }
	
	function good($board, $srl)
	{	
		$this->db->where('srl', $srl);
		$this->db->set('goods', 'goods+1', false);
		$this->db->update($board.'_board');
	}
}



