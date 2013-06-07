<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout extends CI_Controller {

	public function index()
	{
		$this->load->view('layout_head');
		$this->load->view('layout_bodylu');
		$this->load->view('layout_bodyld');
		$this->load->view('layout_bodyr');
		$this->load->view('layout_footer');
	}
    public function fullLayout()
    {
		$this->load->view('layout');
    }   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
