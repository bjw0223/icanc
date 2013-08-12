<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Start extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['active']='startIcanc';

        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('reference');
        $this->load->view('startIcanc');
        $this->load->view('footer');
    }
}


?>
