<?php
class Install_model extends CI_Model {

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
