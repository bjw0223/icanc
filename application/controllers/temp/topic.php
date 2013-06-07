<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends CI_Controller {
	public function index()
	{
        $this->load->view('header');
        $this->load->view('topic');
        $this->load->view('footer');
        
	}
    public function get($id)
    {
        $this->load->database();
        $this->load->model('topic_model');
        $data = $this->topic_model->gets();
        $topic_id=$this->topic_model->get($id);
        
        $this->load->view('header');
        $this->load->view('topic_list',array('topic'=>$data));
        //$this->load->view('get',array('id'=>$topic_id);
        $this->load->view('get',array('topic'=>$topic_id));
        $this->load->view('footer');
    }
    public function gets()
    {
        $this->load->database();
        $this->load->model('topic_model');
        $data = $this->topic_model->gets();
        $this->load->view('header');
        $this->load->view('gets',array('topic'=>$data));
        $this->load->view('footer');
    }
}
