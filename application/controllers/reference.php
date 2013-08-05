<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reference extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }
/*
    function getFun()
    {
        $name = $this->input->get_post('name');
        $this->load->model('reference_model');
        $data = $this->reference_model->gets($name);
        echo json_encode( $data);
    }
*/
    function getFun()
    {
        $this->load->model('reference_model');

        if( $this->input->get_post('name'))
        {
            $name = $this->input->get_post('name');
            $data['func'] = $this->reference_model->get($name);
        }else if( $this->input->get_post('search_name') ){
            $search_name = $this->input->get_post('search_name');
            $data = $this->reference_model->gets($search_name);
        }
        echo json_encode( $data);
    }

}
