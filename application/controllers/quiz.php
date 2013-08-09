<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quiz extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }
 //지웅 
    public function objectiveQuiz($srl)
    {
        $this->load->model('quiz_model');
        $data['data'] = $this->quiz_model->getObjectiveQuiz($srl);
        $this->load->view('header');
        $this->load->view('quiz/objectiveQuiz',$data);
        $this->load->view('footer');
        //$this->load->view('quiz/textQuiz',$data);
    }
//지웅끝
//진영시작


//진영끝

}
