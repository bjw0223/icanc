<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    // 로그인 창
    function login()
    {
        $this->_head();
        $this->load->view('login');
        $this->load->view('footer');
    }

    // 로그아웃
    function logout()
    {
        $this->session->sess_destroy();
        redirect( base_url().'index.php/main');
    }

    // 회원가입창
    function register()
    {
        $data['nickname'] = "";
        $this->_head();
        $this->load->view('register',$data);
        $this->load->view('footer');
    }   

    // 회원 가입
    function registerResult()
    {
        if(!function_exists('password_hash')) // libarary 존재여부 확인
        {
            $this->load->helper('password');
        }
        
        $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT); // 암호화 된 비밀번호              
        
        $dateOfBirth = $this->input->post('year').".".$this->input->post('month').".".$this->input->post('day');
        $job = $this->changeJob( $this->input->post('job') );
        
        $this->user_model->add(array(
                                     'email'=>$this->input->post('email'),
                                     'password'=>$hash,
                                     'nickname'=>$this->input->post('nickname'),
                                     'job'=>$job,
                                     'dateOfBirth'=>$dateOfBirth
                                   ));

        $this->session->set_flashdata('message','회원가입에 성공했습니다.');
        $this->_createFolder();
        $this->load->view('footer');
        redirect( base_url().'index.php/main');
    }
    
    // 회원가입 후 회원만의 저장 공간 생성
    function _createFolder()
    {
        $this->load->helper('file');
        $user = $this->user_model->getByEmail(array('email'=>$this->input->post('email')));
        umask(0);
        mkdir("user/$user->id",0777);
        mkdir("user/$user->id/temp",0777);
    }

    
    // 회원 인증    
    function authentication()
    {
        require(APPPATH.'/controllers/mypage'.EXT);
        $mypage = new mypage;        
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $verifyResult = $mypage->verifyPassword($email, $password); // password 검증
        
        if( $verifyResult != null) // 결과값이 있으면
        { 
           // session에 사용자 정보 입력
           $sess_add = array(
                             'user_email'  => $verifyResult->email,
                             'user_nickname' => $verifyResult->nickname,
                             'user_job' => $verifyResult->job,
                             'user_dateOfBirth' => $verifyResult->dateOfBirth,
                             'is_login' => true
                            );
           $this->session->set_userdata($sess_add);
           redirect( base_url().'index.php/main' );
        }
        else 
        {
           $this->session->set_flashdata('message','아이디 혹은 비밀번호를 확인해주세요');
           redirect(base_url().'index.php/auth/login');
        }
    }

    // 메일 보내기
    function sendToMail()
    {
        $this->load->library('email');
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $this->email->initialize($config);
        $this->email->from('miss0110@naver.com','Eugene');
        $this->email->to('sjmwoalsl@naver.com');
        $this->email->subject('테스트메일');
        $this->email->message('테스트중입니다.');

        if ( ! $this->email->send())
        {
            echo 'mail send error';
        }

        echo $this->email->print_debugger();
    }
    
    // 헤더
    function _head()
    {
        $this->load->view('header');
    }
    
    // 직업 값 변경 ( 0~8 )
    function changeJob($job)
    {
        $resulut = null;
        switch($job)
        {
            case '초등학생' : $result = 0;
                              break;
            case '중학생' : $result = 1;
                              break;
            case '고등학생' : $result = 2;
                              break;
            case '대학생' : $result = 3;
                            break;
            case '대학원생' : $result = 4;
                              break;
            case '회사원' : $result = 5;
                            break;
            case '자영업' : $result = 6;
                            break;
            case '무직' : $result = 7;
                          break;
            case '기타' : $result = 8;
                          break;
        }
        return $result;
    }

}
