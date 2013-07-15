<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->_head();
        $this->load->view('navbar');
		$this->load->view('reference');
		$this->load->view('main');
		$this->load->view('footer');
	}
    function _head()
    {
        $this->load->view('header');
    }







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
