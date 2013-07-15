<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    function login()
    {
        $this->_head();
        $this->load->view('login');
        $this->load->view('footer');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect( base_url().'index.php/main');
    }
    function register()
    {
           $this->_head();
           $this->load->library('form_validation');
           // 회원가입시 사용자 정보의 유효성 검사
           $this->form_validation->set_rules('email','이메일 주소','required|valid_email|is_unique[user.email]');    
           $this->form_validation->set_rules('nickname','닉네임','required|min_length[1]|max_length[20]');
           $this->form_validation->set_rules('password','비밀번호','required|min_length[6]|max_length[30]|matches[re_password]');
           $this->form_validation->set_rules('re_password','비밀번호','required');
            
           if( $this->form_validation->run() === false)
           {
              $this->load->view('register');
           }
           else
           {
              if(!function_exists('password_hash'))
              {
                  $this->load->helper('password');
              }

              $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT);              

              $this->load->model('user_model');
              $this->user_model->add(array(
                          'email'=>$this->input->post('email'),
                          'password'=>$hash,
                          'nickname'=>$this->input->post('nickname')
                          ));
        
              $this->session->set_flashdata('message','회원가입에 성공했습니다.');
              
              // 회원가입 후 회원만의 저장 공간 생성
              $this->load->helper('file');
              $user = $this->user_model->getByEmail(array('email'=>$this->input->post('email')));
              $userPath = "/var/www/user"."/".$user->id."/";
              umask(0);
              mkdir($userPath,0777);
              var_dump($s);
              $this->load->view('footer');
              //redirect( base_url().'index.php/main');
           }
    }
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
            $sess_add = array(
                              'user_email'  => $user->email,
                              'user_nickname' => $user->nickname,
                              'is_login' => true
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
    function _head()
    {
        $this->load->view('header');
    }

}
