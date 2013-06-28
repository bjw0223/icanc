<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends CI_Controller {

	public function index()
	{
        $this->load->database();
		//$this->load->view('help/help');
		$this->load->model('help/help_model');
        $data = $this->help_model->gets();
        $this->load->view('help/help_list',array('help'=>$data));
	}
    public function get($name)
    {
        $this->load->database();
        $this->load->model('help/help_model');
        $data = $this->help_model->get($name);
        $this->load->view('help/'.$name,array('help'=>$data));
    }
    /*
    public function helpList()
    {
        $this->load->library('pagination');

        $config['base_url'] = 'get/';
        $config['total_rows'] = 200;
        $config['per_page'] = 20; 

        $this->pagination->initialize($config); 

        echo $this->pagination->create_links();


    }
   */ 
    public function helpList($page=1,$list_count=10)
    {
        $this->load->database();
        $data['action'] = 'helpList';
        $this->load->model('help/help_model');
        $search_param = null;
        $data['search_key'] = '';
        $data['search_keyword'] = '';

        if($this->input->get_post('search_key') && $this->input->get_post('search_keyword')){
            $search_param = array();
            $data['search_key'] =  $search_param['search_key'] = $this->input->get_post('search_key');
            $data['search_keyword'] = $search_param['search_keyword'] = $this->input->get_post('search_keyword');
        }

        $result = $this->help_model->getHelpList($page,$list_count,$search_param);

        $data['helpList'] = $result['list'];
		$data['pagination'] = $result['pagination'];
        $this->load->view('help/help_list',array('help'=>$data));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
