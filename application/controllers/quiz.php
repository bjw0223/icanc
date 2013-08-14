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
        $this->load->model('quiz_model');
        $data['data'] = $this->quiz_model->getObjectiveQuiz($srl);
        $this->load->view('header');
        $this->load->view('quiz/objectiveQuiz',$data);
        $this->load->view('footer');
        //$this->load->view('quiz/textQuiz',$data);
    }
    public function quizTest($id)
    {
        $data = $this->quiz_model->getCodingQuiz($id);
        $result['result'] = null;
        $this->load->view('header');
        $this->load->view('quizTest',$data);
        $this->load->view('footer');
    }
//지웅끝



//진영시작
   
    // 코딩퀴즈 문제
    public function codingQuiz($id)
    {
        $data = $this->quiz_model->getCodingQuiz($id);
        $this->load->view('header');
        $result['result'] = null;
        $this->load->view('quiz/codingQuiz',$data);
        $this->load->view('footer');
    }

    // 코딩퀴즈 만들기 폼
    public function createCodingQuizForm()
    {
        $this->load->view('header');
        $this->load->view('quiz/createCodingQuiz');
        $this->load->view('footer');
    }

    // 코딩퀴즈 저장
    public function createCodingQuiz()
    {
        $data = array (
                        'question' => $this->input->post('question'),
                        'answer' => $this->input->post('answer'),
                        'head' => $this->input->post('head'),
                        'tail' => $this->input->post('tail'),
                        'description' => $this->input->post('description')
                );
        $this->quiz_model->setCodingQuiz($data);
        redirect( base_url()."index.php/quiz/createCodingQuizForm" );
    }

//진영끝

}
