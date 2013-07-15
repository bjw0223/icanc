<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorial extends CI_Controller {

	public function index()
	{
		$this->_head();
		$this->load->view('navbar');
        $this->load->view('reference');
		$this->load->view('contents');
		$this->load->view('description');
		$this->load->view('footer');
	}
    public function show($title,$subtitle)
    {
		$this->load->view($title.'/'.$subtitle);
    }
    public function reference($fname)
    {
		$this->load->view('reference/'.$fname);
    }
    function _head()
    {
        $this->load->view('header');
    }







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
