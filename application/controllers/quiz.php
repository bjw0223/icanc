<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quiz extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('quiz_model');
    }
 //지웅 
    
    public function index()
    {
        $data['active']='quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('quiz_contents');
        $this->load->view('footer');
    }

    public function title($arg)
    {
        $data['active']='quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('quiz_'.$arg);
        $this->load->view('footer');
    }
    
    public function objectiveQuiz($srl)
    {
        $this->load->model('quiz_model');
        $data['data'] = $this->quiz_model->getObjectiveQuiz($srl);
        $this->load->view('header');
        $this->load->view('quiz/objectiveQuiz',$data);
        $this->load->view('footer');
        //$this->load->view('quiz/textQuiz',$data);
    }
    
    public function quizContents()
    {
        $this->load->view('header');
        $this->load->view('quiz_contents');
        $this->load->view('footer');
    }


    public function showFiles()
    {
        $this->load->helper('file');
        $files = get_filenames('./user/14/freeCode/save');
        echo json_encode($files);
    }
    public function deletFile()
    {
        $this->load->helper('file');
        $fname = $this->input->get_post('fname');
        delete_files("./user/14/freeCode/save/$fname");
        echo json_encode( $fname);
    }
//지웅끝



//진영시작

   // 코딩퀴즈 문제
   public function quizTest($id)
    {
        $quizData = $this->quiz_model->getCodingQuiz($id);
        $codeData = $this->quiz_model->getCodingCode(1);
        $data = array_merge((array)$quizData,(array)$codeData);
        $data = (object)$data;
        $temp['active'] = 'quiz';
        $result['result'] = null;
        $this->load->view('header');
        $this->load->view('navbar',$temp);
        $this->load->view('quizStyle',$data);
        $this->load->view('footer');
    }

    // freeCoding 문제
    public function freeCoding()
    {
        $codeData = $this->quiz_model->getCodingCode(1);
        $data = (array)$codeData;
        $this->load->view('header');
        $result['result'] = null;
        $temp['active'] = 'freeCoding';
        $this->load->view('navbar',$temp);
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
