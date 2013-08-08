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
	
	public function faq()
    {
        $data['selected']="faq";
        $this->load->model('board_model');
        $list=$this->board_model->gets();
		$result['list']=$list;
		$this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('board/faq_title',$data);
		$this->load->view('board/board_contents',$data);
        $this->load->view('board/faq', $result);
        $this->load->view('footer');
	}
	
	public function qna()
    {
        $data['selected']="qna";
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
       	$this->load->view('board/qna_title',$data);
       	$this->load->view('board/board_contents',$data);
        $this->load->view('board/qna');
        $this->load->view('footer');
	}

	function show($srl)
	{
       	$this->load->model('board_model');
       	//$this->board_model->updateHit($srl);
       	$list = $this->board_model->get($srl);
		$result['list']=$list;
		$data['selected']="qna";
		$this->_head();
		$this->load->view('navbar');
		$this->load->view('reference');
		$this->load->view('board/board_contents');
		$this->load->view('board/show',$result);
		$this->load->view('footer');
	}	

    function getList($srl,$limit=10)
	{
            
       	$this->load->model('board_model');
		$this->_head();
		$this->load->view('navbar');
		$this->load->view('reference');
		$this->load->view('board/board_contents');
		$this->load->view('board/show',$result);
		$this->load->view('footer');
	}
    function documentWrite() //문서작성
    {
        if( $this->session->userdata('is_login') == "ture" ) // 로그인 여부 확인
        {
            $this->_head();
            $this->load->view('navbar');
            $this->load->view('reference');
            $this->load->view('board/board_contents');
            $this->load->view('board/document_write');
            $this->load->view('footer');
        }
        else // 비로그인시 로그인창으로 리다이렉트
        {
            $this->session->set_flashdata("message","로그인후 사용 가능합니다");
            redirect( base_url()."index.php/auth/login" );
        }
    }
    function saveDoc($flag)
    {
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
        $this->board_model->saveDoc($flag,$insert_data);
        redirect( base_url().'index.php/board/faq');
    }
    function _head()
    {
        $this->load->view('header');
    }
}


