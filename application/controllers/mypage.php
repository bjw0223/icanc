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
	
    // 회원정보
    public function info()
    {
        $this->load->view('header');
        $this->_head('info');
        $this->load->view('footer');
	}
	
    // 회원 초대
    public function invitation()
    {
        $this->load->view('header');
        $this->_head('invitation');
        $this->load->view('footer');
	}
	
    // 정보 수정
    public function modification()
    {
        $this->load->view('header');
        $this->_head('modification');
        $this->load->view('footer');
	}
	
    // 파일 관리
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
        
        // 폼검증
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
    // 비밀번호 변경 
    function pwdmodify()
    {
        $this->load->view('header');
        $this->_head('pwdmodify');
        $this->load->view('footer');
    }     

    // 기본정보 변경
    function basicinfoModify()
    {
        $this->load->library('form_validation');
        $this->load->view('header');
        $this->_head('basicinfomodify');
        $this->load->view('footer');
    }

    function modifyNickname()
    {
            // 별명 변경
            $beforeNick = $this->session->userdata('user_nickname');
            $afterNick = $this->input->post('afterNick');
            $option = array(
                            'beforeNick' => $beforeNick,
                            'afterNick' => $afterNick
                           );
            $this->user_model->nicknameModify($option);
            // 세션의 별명값 변경
            $sess_add = array( 'user_nickname' => $afterNick);
            $this->session->set_userdata($sess_add);
            redirect(base_url().'index.php/main');
            $this->load->view('footer');
    }
    
    // 별명 중복 검사
    function checkforNickname($nickname)
    {
        $user = $this->user_model->checkRedundancy('nickname',array('nickname'=>$nickname));
        
        if($user == null)
        {
            //echo '<font color="#77bb3">사용 가능한 별명 입니다.</font>';
            echo '<font color="green">사용 가능한 별명 입니다.</font>';
        }
        else
        {
            echo '<font color="brwon">중복된 별명 입니다.</font>';
        }
    }
    
    // 이메일 중복 검사
    function checkforEmail($email)
    {
        $user = $this->user_model->checkRedundancy('email',array('email'=>$nickname));
        
        if($user == null)
        {
            echo '<font color="#77bb3">사용 가능한 이메일 입니다.</font>';
        }
        else
        {
            echo '<font color="brwon">등록된 이메일 입니다.</font>';
        }
    }



    public function _head($address)
    {
        $data['email'] = $this->session->userdata('user_email');
        $data['nickname'] = $this->session->userdata('user_nickname');
        $data['selected'] = $address;
        $this->load->view('navbar');
        $this->load->view('reference');
        $this->load->view('mypage/mypage_contents',$data);
        $this->load->view('mypage/'.$address);
    }

}


