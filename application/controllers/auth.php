<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
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
        $this->_head();
        $this->load->view('register');
        $this->load->view('footer');
    }   

    // 회원 가입
    function registerResult()
    {
        if(!function_exists('password_hash'))
        {
            $this->load->helper('password');
        }
        
        $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT);              
        
        $this->load->model('user_model');
        
        $dateOfBirth = $this->input->post('year').".".$this->input->post('month').".".$this->input->post('day');
        $job = $this->_changeJob( $this->input->post('job') );
        
        $this->user_model->add(array(
                                        'email'=>$this->input->post('email'),
                                        'password'=>$hash,
                                        'nickname'=>$this->input->post('nickname'),
                                        'job'=>$job,
                                        'dateOfBirth'=>$dateOfBirth
                                    ));

        $this->session->set_flashdata('message','회원가입에 성공했습니다.');
      
        // 회원가입 후 회원만의 저장 공간 생성
        $this->load->helper('file');
        $user = $this->user_model->getByEmail(array('email'=>$this->input->post('email')));
        $userPath = "/var/www/icanc/user"."/".$user->id."/";
        
        umask(0);
        mkdir($userPath,0777);
        mkdir($userPath.'temp',0777);
        $this->load->view('footer');
        redirect( base_url().'index.php/main');
    }
    
    // 회원 인증    
    function authentication()
    {
        $this->load->model('user_model');
        // password 암호화
        if(!function_exists('password_hash'))
        {
            $this->load->helper('password');
        }
        // db에서 email 가져와서 일치여부 확인
        $user = $this->user_model->getByEmail(array('email'=>$this->input->post('email')));
        if(
            $this->input->post('email') == $user->email &&
            password_verify($this->input->post('password'),$user->password)
        )  
          { 
            // session에 사용자 정보 입력
            $sess_add = array(
                              'user_email'  => $user->email,
                              'user_nickname' => $user->nickname,
                              'user_job' => $user->job,
                              'user_dateOfBirth' => $user->dateOfBirth,
                              'is_login' => "true"
                             );
            $this->session->set_userdata($sess_add);
            $returnURL = $this->input->get('returnURL');
            if($returnURL === false)
            {
               $returnURL = base_url().'index.php/main';
            }
            redirect($returnURL);
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
    function _changeJob($job)
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
