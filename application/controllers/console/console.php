<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Console extends CI_Controller {

	public function index()
	{
        $title =null;
		//$this->load->view('console/console');
		$this->load->view('console/console',array('title'=>$title));
    }   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
