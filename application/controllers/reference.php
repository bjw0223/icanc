<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reference extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }
    function show()
    {
        $fname = $this->input->get_post('fname');
        $this->load->model('reference_model');
        $data = $this->reference_model->show($fname);
        echo json_encode( $data);
    }
}
