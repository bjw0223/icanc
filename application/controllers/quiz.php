<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quiz extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('quiz_model');
    }
 //지웅 
    public function textQuiz($srl)
    {
        $data = $this->quiz_model->getTextQuiz($srl);
        
        $this->load->view('header');
        $this->load->view('quiz/textQuiz',$data);
        $this->load->view('footer');
        //$this->load->view('quiz/textQuiz',$data);
    }
//지웅끝



//진영시작
    public function codingQuiz($id)
    {
        $data = $this->quiz_model->getcodingQuiz($id);
        $this->load->view('header');
        $result['result'] = null;
        $this->load->view('quiz/codingQuiz',$data);
        $this->load->view('footer');
    }

//진영끝

}
