<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Editer extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['active']='freeCoding';
        $this->_head();
        $this->load->view('navbar',$data);
        $this->load->view('reference');
        $this->load->view('editer');
        $this->load->view('footer');
    }
    
    function _head()
    {
        $this->load->view('header');
    }










}
