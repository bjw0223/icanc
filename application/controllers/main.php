<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
		$this->load->view('header');
        $this->load->view('reference');
		$this->load->view('contents');
		$this->load->view('description');
		$this->load->view('footer');
	}
    









}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
