<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Editer extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index()
    {
        $this->_head();
        $this->load->view('navbar');
        $this->load->view('editer');
        $this->load->view('footer');
    }
    
    function _head()
    {
        $this->load->view('header');
    }










}
