<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('mypage_contents');
        $this->load->view('mypage');
        $this->load->view('footer');
	}

    function _head()
    {
        $this->load->view('header');
    }
}


