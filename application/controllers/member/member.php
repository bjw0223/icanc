<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index()
	{
        $this->load->database();
        $this->load->model('member/member_model');
		$this->load->view('member/member');
    }   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
