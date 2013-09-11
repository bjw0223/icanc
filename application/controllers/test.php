<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }

    // 로그인 창
    function index()
    {
        $this->load->view('header');
        $this->load->view('test');
        $this->load->view('footer');
    }
    function fwrite()
    {
        $this->load->view('header');
        $this->load->view('test2');
        $this->load->view('footer');
    }
}
