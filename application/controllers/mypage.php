<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {

    var $selected=NULL;
    function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
        $this->info();
	}
	public function info()
    {
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('mypage_contents');
        $this->load->view('mypage/info');
        $this->load->view('footer');
        return $selected="info";
	}
	public function invitation()
    {
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('mypage_contents');
        $this->load->view('mypage/invitation');
        $this->load->view('footer');
	}
	public function modification()
    {
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('mypage_contents');
        $this->load->view('mypage/modification');
        $this->load->view('footer');
	}
	public function showdir()
    {
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('mypage_contents');
        $this->load->view('mypage/showdir');
        $this->load->view('footer');
	}
	public function signout()
    {
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('mypage_contents');
        $this->load->view('mypage/signout');
        $this->load->view('footer');
	}

    function _head()
    {
        $this->load->view('header');
    }
}


