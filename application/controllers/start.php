<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Start extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->overview('tutorial');
    }
    function overview($arg)
    {
        $data['active']='startIcanc';
        $data['selected']=$arg;

        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('reference');
		$this->load->view('start/start_contents',$data);
        $this->load->view("start/$arg");
        $this->load->view('footer');
    }
}


?>
