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
		$this->_head();
		$this->load->view('navbar');
		$this->load->view('reference');
		$this->load->view('board/board_contents');
		$this->load->view('board/document_write');
		$this->load->view('footer');
    }
    function saveDoc()
    {
        $title = $_POST['docTitle'];
        $description = $_POST['textEditor'];

        $this->load->helper('text');
        $string = ascii_to_entities($description);

        $insert_data['title'] = $title; 
        $insert_data['writer'] = "우여명";
        $insert_data['created_time'] = time();
        $insert_data['modified_time'] = time();
        $insert_data['text'] = $string; 
        //date("Y-m-d H:i:s",time())
       	$this->load->model('board_model');
        $this->board_model->saveDoc($insert_data);
        redirect( base_url().'index.php/board/faq');
    }
    function _head()
    {
        $this->load->view('header');
    }
}


