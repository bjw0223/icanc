<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {

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
        $data['selected']="info";
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/info');
        $this->load->view('footer');
	}
	public function invitation()
    {
        $data['selected']="invitation";
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/invitation');
        $this->load->view('footer');
	}
	public function modification()
    {
        $data['selected']="modification";
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/modification');
        $this->load->view('footer');
	}
	public function showdir()
    {
        $data['selected']="showdir";
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/showdir');
        $this->load->view('footer');
	}
	public function signout()
    {
        $data['selected']="signout";
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/signout');
        $this->load->view('footer');
	}

    function _head()
    {
        $this->load->view('header');
    }
}


