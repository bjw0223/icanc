<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quiz extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('quiz_model');
        $this->load->model('user_model');
        $this->load->helper('alert');
    }
    
    public function index()
    {
        $data = $this->quiz_model->getCategory();

        $data['active']='quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('quiz_contents',array('data'=>$data));
        $this->load->view('footer');
    }
    
    // quiz list 
    public function title($id)
    {
        $data =$this->quiz_model->getCategoryQuestion($id);

        $data['active']='quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('quiz_list',array('data'=>$data));
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
        $path = './user/14/freeCode/save/'.$fname;
        unlink($path);
        echo json_encode( $path);
    }


//진영시작

   // 코딩퀴즈 문제
   public function quizTest($id)
    {
        if($this->session->userdata('user_finishQuestionNo')+1 >= $id)
        {
            $quizData = $this->quiz_model->getCodingQuiz($id); 
            $codeData = $this->quiz_model->getCodingCode(1); // thread 코드 가져오기
            $data = array_merge((array)$codeData,(array)$quizData);
            $data = (object)$data;
            $temp['active'] = 'quiz';
            $result['result'] = null;
            $this->load->view('header');
            $this->load->view('navbar',$temp);
            $this->load->view('quizStyle',$data);
            $this->load->view('footer');
        }
        else
        {
            alert("진행할 수 없는 퀴즈 입니다");
        }
    }

    // freeCoding
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
    
    // 최종 퀴즈 기록 변경
    public function updateFinishQuestionNo()
    {
       $data['email'] = $this->session->userdata('user_email');
       $data['finishQuestionNo'] = $_POST['finishQuestionNo'];
       var_dump($data['finishQuestionNo']);
       $finishQuestionNo = $this->user_model->updateFinishQuestionNo($data);
       $this->session->set_userdata(array('user_finishQuestionNo'=>$finishQuestionNo));
       var_dump($this->session->userdata('user_finishQuestionNo'));
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
