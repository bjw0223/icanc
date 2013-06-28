<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File extends CI_Controller {

	public function index()
	{
        //$this->load->database();
		//$this->load->view('help/help');
	   // 	$this->load->model('help/help_model');
        //$data = $this->help_model->gets();
        //$this->load->view('help/help_list',array('help'=>$data));
	}
    public function openfile()
    {
        $this->load->database();
        $this->load->helper('file');
        $filename = get_filenames('./asset/user/');
        $data = get_dir_file_info('./asset/user/');
        $this->load->view('file/file_list',array('data'=>$data,'filename'=>$filename));
    }
    public function savefile()
    {
        $this->load->database();
        $this->load->helper('file');
        $filename = get_filenames('./asset/user/');
        $data = get_dir_file_info('./asset/user/');
        $this->load->view('file/save_form',array('data'=>$data,'filename'=>$filename));
    }
    public function deletefile()
    {
        $this->load->helper('file');
        $path = $this->input->get_post('path');
        $commend = "rm ".$path;
        exec($commend,$output,$status);
    }

    public function openContent()
    {
        $this->load->database();
        $this->load->helper('file');
        $this->load->helper('url');
        $path = $this->input->get_post('path');
        //$data = file_get_contents($path); // Read the file's contents
        $data = read_file($path);
    $data = str_replace("}","-_______-",$data);
    $data = str_replace("{","-______-",$data);
    $data = str_replace("#","-_____-",$data);
    $data = str_replace(")","-____-",$data);
    $data = str_replace("(","-___-",$data);
    $data = str_replace("<","-__-",$data);
    $data = str_replace(">","-_-",$data);
    $data = str_replace("\n","__",$data);
    $data = str_replace(" ","_",$data);
        //redirect('/layout/layout/', 'refresh',$data);
        //$this->load->view("layout/layout",$data);
        //echo $data;
        $this->load->view("text/text",array('data'=>$data));
        //return $data;
    }
    public function download()
    {
        $this->load->database();
        $this->load->helper('download');
        $name = $this->input->get_post('name');
        $path = $this->input->get_post('path');
        $data = file_get_contents($path); // Read the file's contents
        force_download($name, $data);
    }
    public function upload()
    {
        $this->load->database();
        $this->load->helper('file');
        //$this->load->helper(array('form', 'url'));
       
        $filename = $this->input->get_post('filename');
        $data = $this->input->get_post('data');
        $data = str_replace("-_______-","}",$data);
        $data = str_replace("-______-","{",$data);
        $data = str_replace("-_____-","#",$data);
        $data = str_replace("-____-",")",$data);
        $data = str_replace("-___-","(",$data);
        $data = str_replace("-__-","<",$data);
        $data = str_replace("-_-",">",$data);
        $data = str_replace("__","\n",$data);
        $data = str_replace("_"," ",$data);

        exec("chmod 777 ./asset/user/".$filename.".c",$output,$status);
        write_file('./asset/user/'.$filename.".c", $data);
        
    }   
    public function tempupload()
    {
        $this->load->database();
        $this->load->helper('file');
       
        $data = $this->input->get_post('data');
        $data = str_replace("-_______-","}",$data);
        $data = str_replace("-______-","{",$data);
        $data = str_replace("-_____-","#",$data);
        $data = str_replace("-____-",")",$data);
        $data = str_replace("-___-","(",$data);
        $data = str_replace("-__-","<",$data);
        $data = str_replace("-_-",">",$data);
        $data = str_replace("__","\n",$data);
        $data = str_replace("_"," ",$data);

        exec("touch ./application/controllers/temp.c",$output,$status);
        write_file('./application/controllers/temp.c', $data);
        
    }   


}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
