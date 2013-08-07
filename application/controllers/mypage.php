<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('file');
    }
	
    public function index()
	{
        $this->info();
	}
	
    // 회원정보 폼
    public function info()
    {
        $this->load->view('header');
        $this->_head('info');
        $this->load->view('footer');
	}
	
    // 회원 초대 폼
    public function invitation()
    {
        $this->load->view('header');
        $this->_head('invitation');
        $this->load->view('footer');
	}
	
    // 정보 수정 폼
    public function modification()
    {
        $this->load->view('header');
        $this->_head('modification');
        $this->load->view('footer');
	}
    
    // 기본정보 변경 폼
    function basicinfoModify()
    {
        $this->load->view('header');
        $this->_head('basicinfomodify');
        $this->load->view('footer');
    }

    // 비밀번호 변경 폼
    function pwdmodify()
    {
        $this->load->view('header');
        $this->_head('pwdmodify');
        $this->load->view('footer');
    }     

    // 파일 관리 폼
    public function showdir()
    {
        $this->load->view('header');
        $this->_head('showdir');
        $this->load->view('footer');
	}
	
    // 회원 탈퇴
    public function signout()
    {
        $this->load->view('header');       
        $this->load->library('form_validation');
        
        // 폼검증 함수
        $this->form_validation->set_rules('option[]');
        $re = $this->form_validation-run(); 
        if( $re  === false )
        {
            $this->_head('signout');
        }
        else
        {
            // 탈퇴 회원에 대한 user폴더 내의 해당 id폴더 삭제
            $user = $this->user_model->getByEmail(array('email'=>$this->session->userdata('user_email')));
            $userPath = "/var/www/icanc/user"."/".$user->id;
            $rmdir = "rm -r ".$userPath;
            
            $this->session->set_flashdata('message','회원탈퇴가 되었습니다.');
            $this->user_model->del(
                                   $this->session->userdata('user_email')
                                  );
            
            $this->session->sess_destroy();
            // id폴더 삭제 명령
            exec($rmdir);
            redirect( base_url().'index.php/main');
        }
        $this->load->view('footer');

	}
    
    // 기본정보 변경하기
    function modifyBasicinfo()
    {
        $this->_modifyNickname();
        $this->_modifyDateOfBirth();
        $this->_modifyJob();
        redirect(base_url().'index.php/main');
        $this->load->view('footer');
    }
    
    // 별명 변경 함수
    function _modifyNickname()
    {
        // 별명 변경
        $beforeNick = $this->session->userdata('user_nickname');
        $afterNick = $this->input->post('nickname');
        $option = array(
                    'beforeNick' => $beforeNick,
                        'afterNick' => $afterNick
                       );
        $this->user_model->nicknameModify($option);
        
        $sess_add = array( 'user_nickname' => $afterNick); // 세션의 별명 변경
        $this->session->set_userdata($sess_add);
    }

    // 생년월일 변경 함수
    function _modifyDateOfBirth()
    {
        $beforeDateOfBirth = $this->session->userdata('user_dateOfBirth');
        $afterDateOfBirth = $this->input->post('year').".".$this->input->post('month').".".$this->input->post('day');
        
        $option = array(
                        'beforeDateOfBirth' => $beforeDateOfBirth,
                        'afterDateOfBirth' => $afterDateOfBirth
                       );
        $this->user_model->modifyDateOfBirth($option);
        
        $sess_add = array( 'user_dateOfBirth' => $afterDateOfBirth); // 세션의 생년월일 변경
        $this->session->set_userdata($sess_add);
    }

    // 직업 변경 함수
    function _modifyJob()
    {
        require(APPPATH.'/controllers/auth'.EXT);
        $auth = new auth;        
        $beforeJob = $this->session->userdata('user_job');
        $afterJob = $auth->changeJob($this->input->post('job'));
        
        $option = array(
                        'beforeJob' => $beforeJob,
                        'afterJob' => $afterJob
                       );
        $this->user_model->modifyJob($option);
        
        $sess_add = array( 'user_job' => $afterJob); // 세션의 직업 변경
        $this->session->set_userdata($sess_add);
    }

    // 별명 중복 검사 함수
    function checkforNickname()
    {
        $nickname = $_POST['nickname'];
        
        $user = $this->user_model->checkRedundancy('nickname',array('nickname'=>$nickname));

        if($user == null)
        {
            $flag['value'] = "true";
        }
        else
        {
            $flag['value'] = "false";
        }
        
        echo json_encode($flag);

    }
    
    // 이메일 중복 검사 함수
    function checkforEmail()
    {
        $email = $_POST['email'];

        $user = $this->user_model->checkRedundancy('email',array('email'=>$email));
        
        if($user == null)
        {
            $flag['value'] = "true";
        }
        else
        {
            $flag['value'] = "false";
        }
        echo json_encode($flag);
    }
    
    // 헤더 함수
    public function _head($address)
    {
        $data['email'] = $this->session->userdata('user_email');
        $data['nickname'] = $this->session->userdata('user_nickname');
        $data['job'] = $this->session->userdata('user_job');
        $data['dateOfBirth'] = $this->session->userdata('user_dateOfBirth');
        $data['selected'] = $address;
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/'.$address);
    }

}


