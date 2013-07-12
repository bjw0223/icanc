<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
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








}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
