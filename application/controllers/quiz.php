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
        $data['active']='quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('quiz_main');
        $this->load->view('footer');
    }

    public function categoryList()
    {
        $data = $this->quiz_model->getCategory();

        $data['active']='quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('category_list',array('data'=>$data));
        $this->load->view('footer');
    }
    
    // 카테고리 내의 기본문제 리스트 생성 
    public function basicQuizList($id)
    {
        $data =$this->quiz_model->getCategoryQuestion($id);
        
        $data['active']='quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('basic_list',array('data'=>$data));
        $this->load->view('footer');
    }

    // 실전문제 리스트 생성
    public function practiceQuizList()
    {
        // 실전문제 개수와 제목 가져오기
        $data =$this->quiz_model->getPracticeQuestion();

        $data['active'] = 'quiz';
        $this->load->view('header');
        $this->load->view('navbar',$data);
        $this->load->view('practice_list',array('data'=>$data));
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
   public function codingQuiz($target,$id)
    {
        $codeData = $this->quiz_model->getCodingCode(1); // thread 코드 가져오기
        $temp['active'] = 'quiz';
        $result['result'] = null;
        $this->load->view('header');
        $this->load->view('coding-navbar',$temp);

        if($target == 'basic' && $this->session->userdata('user_finishQuestionNo')+1 >= $id)
        {
            $quizData = $this->quiz_model->getCodingQuiz($id); 
            $name ="basicResult";
        }
        else if($target == 'practice' && $this->session->userdata('user_level')+1 >= $id)
        {
            $quizData = $this->quiz_model->getPracticeQuiz($id);
            $name ="practiceResult";
        }
        else
        {
            alert('진행할수 없는 퀴즈입니다');
            return 0;
        }
            $data = array_merge((array)$codeData,(array)$quizData);
            $data = (object)$data;
            $this->load->view($name,$data);
            $this->load->view('footer');
    }

    // freeCoding
    public function freeCoding()
    {
        $codeData = $this->quiz_model->getCodingCode(1);
        $data = (array)$codeData;
        $this->load->view('header');
        $result['result'] = null;
        $temp['active'] = 'freeCoding';
        $this->load->view('coding-navbar',$temp);
        $this->load->view('quiz/freeCoding',$data);
        $this->load->view('footer');
    }
    
    // 최종 퀴즈 기록 변경
    public function updateFinishQuestionNo()
    {
       $data['email'] = $this->session->userdata('user_email');
       $data['finishQuestionNo'] = $_POST['finishQuestionNo'];
       $finishQuestionNo = $this->user_model->updateFinishQuestionNo($data);
       $this->session->set_userdata(array('user_finishQuestionNo'=>$finishQuestionNo));
    }

    // 최종 레벨 기록 변경
    public function updateLevel()
    {
       $data['email'] = $this->session->userdata('user_email');
       $data['level'] = $_POST['level'];
       $level = $this->user_model->updateLevel($data);
       $this->session->set_userdata(array('user_level'=>$level));
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
