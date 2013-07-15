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
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('board/board_contents',$data);
        $this->load->view('board/faq');
        $this->load->view('footer');
	}
	public function qna()
    {
        $data['selected']="qna";
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('board/board_contents',$data);
        $this->load->view('board/qna');
        $this->load->view('footer');
	}
    function _head()
    {
        $this->load->view('header');
    }
}


