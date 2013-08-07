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
    function _head()
    {
        $this->load->view('header');
    }
}


