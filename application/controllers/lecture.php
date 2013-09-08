<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lecture extends CI_Controller {

	public function index($title="tutorial_main",$subTitle="tutorial_main")
	{
		$this->_head();
		$this->load->view('navbar');
        $this->load->view('reference');
		$this->load->view('lecture_title');
		$this->load->view('contents');
		$this->load->view('lecture');
		$this->load->view('footer');
	}
    public function show($title,$subTitle,$flag="false")
	{
        if( $flag == "false") {
            $this->load->view($title.'/'.$subTitle);
        }
        else if($flag == "true" )
        {
            $this->load->view($title.'/'.$subTitle.'_Title');
        }
	}

    public function reference($fname)
    {
		$this->load->view('reference/'.$fname);
    }
	public function program()
    {
		$this->_head();
		$this->load->view('navbar');
        $this->load->view('reference');
		$this->load->view('contents');
		$this->load->view('program/understanding');
		$this->load->view('footer');
    }
    function _head()
    {
        $data['active']='lecture';
        $this->load->view('header',$data);
    }







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
