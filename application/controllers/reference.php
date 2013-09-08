<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reference extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }

    function getReference()
    {
        $this->load->model('reference_model');
        $name = $this->input->get_post('name');
        $flag = $this->input->get_post('flag');
        $data = $this->reference_model->getReference($name,$flag);
        echo json_encode( $data);
    }
    function get()
    {
        $this->load->view('header');
        $this->load->view('reference/reference_list');
        $this->load->view('footer');
    }
    function fseek()
    {
        $this->load->view('header');
        $this->load->view('reference/fseek');
        $this->load->view('footer');
    }
}
