<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Text extends CI_Controller {

	public function index()
	{
        $data = null;
		$this->load->view('text/text',array('data'=>$data));
    }   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
