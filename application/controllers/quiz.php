<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quiz extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('quiz_model');
    }
 //지웅 
    public function objectiveQuiz($srl)
    {
<<<<<<< HEAD
        $this->load->model('quiz_model');
        $data['data'] = $this->quiz_model->getObjectiveQuiz($srl);
=======
        $data = $this->quiz_model->getTextQuiz($srl);
        
>>>>>>> 378d8540ad21729da25e545f059af5753a3ed345
        $this->load->view('header');
        $this->load->view('quiz/objectiveQuiz',$data);
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
