<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Board extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
        $this->faq();
	}

	/*게시판 리스트 출력 함수*/
	public function blist($board='faq', $page=1, $list_count=10)
    {
        $selected['selected']=$board;
        $search_param = null;
        $data['search_key'] = '';
        $data['search_keyword'] = '';
		$data['goods'] =0;
		$data['board'] = $board;

        if($this->input->get_post('search_key') && $this->input->get_post('search_keyword')){
            $search_param = array();
            $data['search_key'] =  $search_param['search_key'] = $this->input->get_post('search_key');
            $data['search_keyword'] = $search_param['search_keyword'] = $this->input->get_post('search_keyword');
        }

        $this->load->model('board_model');
        $list=$this->board_model->getList($board, $search_param,$page,$list_count);
		
		$this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('board/btitle', $data);
		$this->load->view('board/board_contents',$selected);
        $this->load->view('board/blist',$list);
        $this->load->view('footer');
	}
	
	function doc_view($board, $page, $srl)
	{	
        $selected['selected']=$board;
       	$this->load->model('board_model');
       	$list = $this->board_model->get($srl);
		$result['data'] = $list;
		$data['board'] = $board;

		$comments = $this->board_model->getComments($srl);

		$this->_head();
		$this->load->view('navbar');
		$this->load->view('reference');
        $this->load->view('board/btitle', $data);
		$this->load->view('board/board_contents', $selected);
		$this->load->view('board/doc_view',$result);
		$this->load->view('board/comment', $comments);
//		$this->load->view('board/sk_social_reply');
		$this->load->view('footer');

	}

	function documentWrite($board) //문서작성
    {
        if( $this->session->userdata('is_login') == "ture" ) // 로그인 여부 확인
        { 
			$nick = $this->session->userdata('user_nickname');
			if(($board == 'faq') && ($nick != 'admin'))
			{
            	$this->session->set_flashdata("message","FAQ 게시판은 관리자 계정만 글쓰기 가능합니다.");
            	redirect( base_url()."index.php/board/blist/faq" );
			}
			else
			{
				$selected['selected']=$board;
           	 	$this->_head();
           	 	$this->load->view('navbar');
            	$this->load->view('reference');
            	$this->load->view('board/board_contents', $selected);
            	$this->load->view('board/document_write');
            	$this->load->view('footer');
			}
        }
        else // 비로그인시 로그인창으로 리다이렉트
        {
            $this->session->set_flashdata("message","로그인후 사용 가능합니다");
            redirect( base_url()."index.php/auth/login" );
        }
    }
    
	function saveDoc($board)
    {
		$board_name = $board;
        $title = $_POST['docTitle'];
        $description = $_POST['textEditor'];

        $this->load->helper('text');
        $string = ascii_to_entities($description);

        $nickname = $this->session->userdata('user_nickname');

        $insert_data['title'] = $title; 
        $insert_data['writer'] = $nickname;
        $insert_data['text'] = $string;

        //date("Y-m-d H:i:s",time())
       	$this->load->model('board_model');
        $this->board_model->saveDoc($insert_data, $board);
        redirect( base_url().'index.php/board/blist/'.$board);
    }

	function saveModifiedDoc($board, $srl)
	{
        $title = $_POST['docTitle'];
        $description = $_POST['textEditor'];
        $this->load->helper('text');
        $string = ascii_to_entities($description);
	
        $insert_data['title'] = $title; 
        $insert_data['text'] = $string;

        //date("Y-m-d H:i:s",time())
       	$this->load->model('board_model');
        $this->board_model->saveModifiedDoc($insert_data, $board, $srl);
        redirect( base_url().'index.php/board/blist/'.$board);

	}

	function saveReplyDoc($board, $page, $srl)
	{
		$board_name = $board;
        $title = $_POST['docTitle'];
        $description = $_POST['textEditor'];

        $this->load->helper('text');
        $string = ascii_to_entities($description);

        $nickname = $this->session->userdata('user_nickname');

        $insert_data['title'] = $title; 
        $insert_data['writer'] = $nickname;
        $insert_data['text'] = $string;

        //date("Y-m-d H:i:s",time())
       	$this->load->model('board_model');
        $this->board_model->saveReplyDoc($insert_data, $board, $srl);
		
		redirect( base_url().'index.php/board/blist/'.$board.'/'.$page);
	}
   	
	function delDoc($board, $page, $srl)
	{
		if($this->session->userdata('is_login') == "ture" ) // 로그인 여부 확인
		{
			$table='board';
			$this->load->model('board_model');
			$writer = $this->board_model->getWriter($table, $srl);
			$nick = $this->session->userdata('user_nickname');

			if($nick==$writer)
			{
				$this->load->model('board_model');
				$this->board_model->delDoc($srl);
        		redirect( base_url().'index.php/board/blist/'.$board.'/'.$page);
			}
			else
			{	
				$this->session->set_flashdata("message",'작성자만 삭제 가능합니다');
        		redirect( base_url().'index.php/board/doc_view/'.$board.'/'.$page.'/'.$srl);
			}
		}
		else // 비로그인시 로그인창으로 리다이렉트
        {
            $this->session->set_flashdata("message","로그인후 사용 가능합니다");
            redirect( base_url()."index.php/auth/login" );
        }
	}

	function replyDoc($board, $page, $srl)
	{
		$title = $this->input->get_post('title');
		$reply_cnt = $this->input->get_post('reply_cnt');

		$data['title'] = $title;
		$data['reply_srl'] = $reply_cnt+1;

		if($this->session->userdata('is_login') == "ture" ) // 로그인 여부 확인
		{
        	$selected['selected']=$board;
		    
			$this->_head();
            $this->load->view('navbar');
            $this->load->view('reference');
            $this->load->view('board/board_contents', $selected);
            $this->load->view('board/document_reply', $data);
            $this->load->view('footer');
      	}
		else{// 비로그인시 로그인창으로 리다이렉트
        
            $this->session->set_flashdata("message","로그인후 사용 가능합니다");
            redirect( base_url()."index.php/auth/login" );
        }
	}

	function modifyDoc($board, $page, $srl)
	{
		if($this->session->userdata('is_login') == "ture" ) // 로그인 여부 확인
		{
			$table='board';
			$this->load->model('board_model');
			$writer = $this->board_model->getWriter($table, $srl);
			$nick = $this->session->userdata('user_nickname');

			if($nick==$writer)//일치했을때 삭제
			{
        		$selected['selected']=$board;
				
				$list = $this->board_model->get($srl);
				$result['data'] = $list;
	
				$this->_head();
        		$this->load->view('navbar');
        		$this->load->view('reference');
        		$this->load->view('board/board_contents', $selected);
        		$this->load->view('board/document_modify', $result);
        		$this->load->view('footer');
			}
			else
			{	
				$this->session->set_flashdata("message",'작성자만 수정 가능합니다');
        		redirect( base_url().'index.php/board/doc_view/'.$board.'/'.$page.'/'.$srl);
			}
		}
		else // 비로그인시 로그인창으로 리다이렉트
        {
            $this->session->set_flashdata("message","로그인후 사용 가능합니다");
            redirect( base_url()."index.php/auth/login" );
        }
	}

	function good($board, $page, $srl)
	{
		$this->load->model('board_model');
		$this->board_model->good($srl);
		redirect( base_url().'index.php/board/doc_view/'.$board.'/'.$page.'/'.$srl);
	}

	function addComment($board, $page, $parent_srl)
	{
		$text = $_POST['text'];
		$nickname = $this->session->userdata('user_nickname');

        $insert_data['writer'] = $nickname;
        $insert_data['text'] = $text;

		$this->load->model('board_model');
		$this->board_model->addComment($parent_srl, $insert_data);
		
		redirect( base_url().'index.php/board/doc_view/'.$board.'/'.$page.'/'.$parent_srl);
	}
	
	function delComment($board, $page, $srl, $comment_srl)
	{
		if($this->session->userdata('is_login') == "ture" ) // 로그인 여부 확인
		{
			$table='comment';
			$this->load->model('board_model');
			$writer = $this->board_model->getWriter($table, $comment_srl);
			$nickname = $this->session->userdata('user_nickname');

			if($writer==$nickname)
			{
				$this->board_model->delComment($srl, $comment_srl);
				redirect( base_url().'index.php/board/doc_view/'.$board.'/'.$page.'/'.$srl);
			}
			else
			{
				$this->session->set_flashdata("message",'작성자만 수정 가능합니다');
        		redirect( base_url().'index.php/board/doc_view/'.$board.'/'.$page.'/'.$srl);
			}
		}
		else
		{
            $this->session->set_flashdata("message","로그인후 사용 가능합니다");
            redirect( base_url()."index.php/auth/login" );
		}
	}

	function modifyComment($board, $page, $srl, $comment_srl)
	{
		redirect( base_url().'index.php/board/doc_view/'.$board.'/'.$page.'/'.$srl);
	}

/*	
	function returnList($srl, $board)
	{
		$this->load->model('board_model');
		$this->board_model->returnList($srl, $);
		//redirect( base_url().'index.php/board/'.$board.'/'.$page);
	}
*/
	function _head()
    {
        $data['active']='board';
        $this->load->view('header',$data);
    }
}


